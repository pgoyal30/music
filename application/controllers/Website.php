<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('WebsiteModel');	
		$this->load->library('cart');
	}

	public function index(){
		$this->load->view('website/header');
		$this->load->view('website/index');
		$this->load->view('website/footer');
	}

	public function contact(){
		$this->load->view('website/header');
		$this->load->view('website/contact');
		$this->load->view('website/footer');
	}

	public function about(){
		$this->load->view('website/header');
		$this->load->view('website/about');
		$this->load->view('website/footer');
	}

	public function track(){
		$data['track'] = $this->WebsiteModel->getalltrack();
	    
		$this->load->view('website/header');
		$this->load->view('website/track', $data);
		$this->load->view('website/footer');
	}

	public function track_detail($id){
		$data['track'] = $this->WebsiteModel->gettrack($id);
		$data['tracks'] = $this->WebsiteModel->getalltrack();
		$this->load->view('website/header');
		$this->load->view('website/track-detail', $data);
		$this->load->view('website/footer');
	}

	public function cart(){
		$data['tracks'] = $this->WebsiteModel->getalltrack();
		$this->load->view('website/header');
		$this->load->view('website/order-summary', $data);
		$this->load->view('website/footer');
	}

	public function addtocart($id,$price){
		if(isset($_SESSION['cart'])){
			if(in_array(['id' => $id, 'price' => $price], $_SESSION['cart'])){
				echo "<script>alert('Already Added')</script>";
				echo "<script>window.location.href = 'http://localhost/AdminPanel1313/Website/cart'</script>";
			}else{
				$_SESSION['cart'][] = array('id' => $id, 'price' => $price);
				echo "<script>alert('Added to Cart')</script>";
				echo "<script>window.location.href = 'http://localhost/AdminPanel1313/Website/cart'</script>";
			}
		}else{
			$_SESSION['cart'][] = array('id' => $id, 'price' => $price);
			echo "<script>alert('Added to Cart')</script>";
				echo "<script>window.location.href = 'http://localhost/AdminPanel1313/Website/cart'</script>";
		}
	
		
	}

	public function removecart($id, $price){
		if(isset($_SESSION['cart'])){
			if(in_array(['id' => $id, 'price' => $price], $_SESSION['cart'])){
				echo "Yes";
				$index = array_search(['id' => $id, 'price' => $price], $_SESSION['cart']);
				unset($_SESSION['cart'][$index]);
				redirect(base_url() . 'Website/cart');
			}
		}else{
			redirect(base_url() . 'Website/cart');
		}
	}


	public function checklogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$isValid = $this->WebsiteModel->checklogin($email, $password);
		if(isset($isValid)){
			$_SESSION['id'] = $isValid->id;
			$_SESSION['email'] = $isValid->email;
			echo "Yes";
		}else{
			echo "No";
		}
	}

	public function isLogin(){
		if(!isset($_SESSION['id']) && !isset($_SESSION['email'])){
			redirect(base_url() . "Website/index");
		}
	}


	public function profile(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['profile'] = $this->WebsiteModel->getuser($id);
		$this->load->view('website/header');
		$this->load->view('website/profile', $data);
		$this->load->view('website/footer');
	}
	

	public function checkemail(){
		$email = $this->input->post('user_email');
		$isValid = $this->WebsiteModel->checkemail($email);
		if(isset($isValid)){
			echo "Yes";
		}else{
			echo "No";
		}
	}

	public function insertuserinfo(){
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['mobile'] = $_POST['mobile'];
		$data['password'] = $_POST['password'];
		$response = $this->WebsiteModel->insertuser($data);
		if(isset($response)){
			echo "Yes";
		}else{
			echo "No";
		}
	}


	public function change_password(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$this->load->view('website/header');
		$this->load->view('website/change-password');
		$this->load->view('website/footer');
	}


	public function updatepassword(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['password'] = $this->input->post('password');
		$isUpdate = $this->WebsiteModel->updatePassword($id, $data);
		if(isset($isUpdate)){
			echo "Yes";
		}else{
			echo "No";
		}
	}

	public function order(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['order'] = $this->WebsiteModel->getallorder($id);
		$this->load->view('website/header');
		$this->load->view('website/orders', $data);
		$this->load->view('website/footer');
	}


	public function links(){
		$this->isLogin();
		$id = $_SESSION['id'];
		// $data['products'] = $this->UserModel->getallorder($id);
		$data['tracks'] = $this->WebsiteModel->getallusertrack($id);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
	
		$this->load->view('website/header');
		$this->load->view('website/add-link', $data);
		$this->load->view('website/footer');
	}

	public function addlink(){
		$this->isLogin();
		$platformArr = $this->input->post('platform');
		$urlArr = $this->input->post('url');
		$channelArr = $this->input->post('channelname');
		$channelurlArr = $this->input->post('channelurl');

		// $data['platform'] = implode(',', $platformArr);
		// $data['links'] = implode(',', $urlArr);
		// $data['channelname'] = implode(',', $channelArr);
		// $data['channelurl'] = implode(',', $channelurlArr);
		$data['trackid'] = $this->input->post('trackid');
		$data['status'] = 3;
		
		
		// $data['links'] = $_POST['url'];
		// $data['platform'] = $_POST['platform'];

		$data['user_id'] = $_SESSION['id'];
		$totalurl = count($urlArr);
		for($i = 0; $i < $totalurl; $i++){
			$data['platform'] = $platformArr[$i];
			$data['links'] = $urlArr[$i];
			$data['channelname'] = $channelArr[$i];
			$data['channelurl'] = $channelurlArr[$i];
			$this->WebsiteModel->addlink($data);
		}
		
		
		// $this->UserModel->addlink($data);
		
		echo "<script>alert('Links Added Successfully');</script>";
		echo "<script>window.location.href = 'links'</script>";
	}

	public function statuswhitelist(){
		$id = $_SESSION['id'];
		$data['whitelist'] = $this->WebsiteModel->getallwhitelist($id);
	
		// echo "<pre>";
		// print_r($data['whitelist']);

		// echo "</pre>";
		// die();
		$this->load->view('website/header');
		$this->load->view('website/status-whitelist', $data);
		$this->load->view('website/footer');
	}

	public function logout(){
		unset($_SESSION['id']);
		unset($_SESSION['email']);
		session_destroy();
		redirect(base_url() . "Website/index");
	}

	public function album(){
		$data['latest'] = $this->WebsiteModel->latesttrack();
		$data['album'] = $this->WebsiteModel->getalltrack();
		$data['latestdemo'] = $this->WebsiteModel->getdemotrack();
		
		$this->load->view('website/album.php', $data);
	}

	public function albumdetail($id){
		$data['track'] = $this->WebsiteModel->gettrack($id);
		$data['demotrack'] = $this->WebsiteModel->demotrack($id);
		$data['latest'] = $this->WebsiteModel->latesttrack();
		$this->load->view('website/album-detail.php', $data);
	}

	public function cartpage(){
		$this->load->view('website/cart.php');
	}


	public function add_cart($id, $price){
		
		   $this->load->library('cart'); 
		   $data['product'] = $this->WebsiteModel->gettrack($id);
		   

			$cartdata = array(
				'id'      => $data['product']->id,
				'qty'     => 1,
				'price'   => $price,
				'name'    => $data['product']->title,
				'cat' => $data['product']->categoryid
			);
	
	 
		
			$cartitem = $this->cart->contents();

			
		
			if(count($cartitem) > 0){
				foreach($cartitem as $cart){
					if($cart['id'] == $data['product']->id){
						redirect(base_url() . "cart");
						break;
					}
				}
			}
			
			$this->cart->insert($cartdata);

		
			redirect(base_url() . "cart");
	}

	public function viewcart(){
		$this->load->view('website/cart.php');
	}


	public function removeitem($rowid){
		$this->cart->remove($rowid);
		redirect(base_url() . "Website/viewcart");
   }
   
}

?>

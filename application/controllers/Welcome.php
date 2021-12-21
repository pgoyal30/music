<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		
	}

	public function login(){
		$this->load->view('User/login.php');
	}

	public function register(){
		$this->load->view('User/register.php');
	}

	public function checkemail(){
		$email = $this->input->post('user_email');
		$isValid = $this->UserModel->checkemail($email);
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
		$response = $this->UserModel->insertuser($data);
		if(isset($response)){
			echo "Yes";
		}else{
			echo "No";
		}
	}


	public function checklogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$isValid = $this->UserModel->checklogin($email, $password);
		if(isset($isValid)){
			$_SESSION['id'] = $isValid->id;
			$_SESSION['email'] = $isValid->email;
			echo "Yes";
		}else{
			echo "No";
		}
	}

	public function isLogin(){
		if(!isset($_SESSION['id'])  && !isset($_SESSION['email'])){
			redirect(base_url() . "Welcome/login");
		}
	}


	public function logout(){
           
		unset($_SESSION['id']);
		unset($_SESSION['email']);
		session_destroy();
		redirect(base_url() . "Welcome/login");
	}

	public function profile(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['profile'] = $this->UserModel->getuser($id);
		$this->load->view('User/header');
		$this->load->view('User/index', $data);
		$this->load->view('User/footer');
	}
	
	public function changepassword(){
		$this->isLogin();
		$this->load->view('User/header');
		$this->load->view('User/change-password');
		$this->load->view('User/footer');
	}

	public function updatepassword(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['password'] = $this->input->post('password');
		$isUpdate = $this->UserModel->updatePassword($id, $data);
		if(isset($isUpdate)){
			echo "Yes";
		}else{
			echo "No";
		}
	}

	public function order(){
		$this->isLogin();
		$id = $_SESSION['id'];
		$data['order'] = $this->UserModel->getallorder($id);
		$this->load->view('User/header');
		$this->load->view('User/order', $data);
		$this->load->view('User/footer');
	}

	public function links(){
		$this->isLogin();
		$id = $_SESSION['id'];
		// $data['products'] = $this->UserModel->getallorder($id);
		$data['tracks'] = $this->UserModel->getalltrack($id);
        
	
		$this->load->view('User/header');
		$this->load->view('User/add-link', $data);
		$this->load->view('User/footer');
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
			$this->UserModel->addlink($data);
		}
		
		
		// $this->UserModel->addlink($data);
		
		echo "<script>alert('Links Added Successfully');</script>";
		echo "<script>window.location.href = 'links'</script>";
	}

	public function statuswhitelist(){
		$id = $_SESSION['id'];
		$data['whitelist'] = $this->UserModel->getallwhitelist($id);
	
		$this->load->view('User/header');
		$this->load->view('User/status-whitelist', $data);
		$this->load->view('User/footer');
	}
}
?>

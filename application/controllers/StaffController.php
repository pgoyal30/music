<?php

    class StaffController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('StaffModel');
            
        }

		public function index(){
			$this->load->view('Staff/login.php');
		}

		public function register(){
			$this->load->view('Staff/register.php');
		}
	
		public function checkemail(){
			$email = $this->input->post('user_email');
			$isValid = $this->StaffModel->checkemail($email);
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
			$response = $this->StaffModel->insertuser($data);
			if(isset($response)){
				echo "Yes";
			}else{
				echo "No";
			}
		}


		public function checklogin(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$isValid = $this->StaffModel->checklogin($email, $password);
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
				redirect(base_url() . "StaffController/index");
			}
		}

		public function logout(){    
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			session_destroy();
			redirect(base_url() . "StaffController/index");
		}


		public function createcategory(){
			$this->isLogin();
			$this->load->view('Staff/header.php');
			$this->load->view('Staff/create-category.php');
			$this->load->view('Staff/footer.php');
		}

		public function create_category(){
			$this->isLogin();
			$data['title'] = $this->input->post('title');
			$data['status'] = $this->input->post('status');
			$data['summary'] = $this->input->post('summary');
			$photoex = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			$url = base_url() . "StaffController/createcategory";
			$extensionArr = array('png', 'jpeg', 'jpg', 'gif');
			if(!in_array($photoex, $extensionArr)){
				echo "<script>alert('Please select only jpeg, png, jpg format only');</script>";
				echo "<script>window.location.href = '{$url}';</script>";
			}else{
				        
				        $photo  = time() .  '' . rand(1,100) . "." . $photoex;
						$data['photo'] = $photo;
						
						$config = array(
							'upload_path' => "./upload/Category/",
							'allowed_types' => "gif|jpg|png|jpeg",
							'file_name' => $photo
							// 'max_size' => '2048000'
						);
						
						$this->load->library('upload', $config);
					

						if(!$this->upload->do_upload('photo')){
							$error = array('error' => $this->upload->display_errors());
							echo "<script>alert('{$error['error']}');</script>";
				            echo "<script>window.location.href = '{$url}';</script>";

						}else{
						
								$data1 = array('upload_data' => $this->upload->data());
								$this->StaffModel->createCategory($data);
								redirect(base_url() . "StaffController/managecategory");
					    }
			}
			
		}

		public function managecategory(){
			$this->isLogin();
            $this->load->view('Staff/header');
            $data['category'] = $this->StaffModel->getCategory();
            $this->load->view('Staff/manage-category', $data);
            $this->load->view('Staff/footer');
        }

		public function editcategory($id){
			$this->isLogin();
			$data['category'] = $this->StaffModel->editCategory($id);
            $this->load->view('Staff/header');
            $this->load->view('Staff/edit-category', $data);
            $this->load->view('Staff/footer');
		}

		public function edit_category($id){
			$this->isLogin();
			$data['title'] = $this->input->post('title');
			$data['summary'] = $this->input->post('summary');
			$data['status'] = $this->input->post('status');
			$oldphoto = $this->input->post('oldphoto');
			$url = base_url() . "StaffController/editcategory/$id";

			if($_FILES['photo']['name'] == ""){
				// $data['resume'] = $oldresume;
					$data['photo'] = $oldphoto;	
			}else{
				
					// $extensionArr = array('png', 'jpeg', 'jpg', 'gif');
					// if(!in_array($photoex, $extensionArr)){
					// 	echo "<script>alert('Please select only jpeg, png, jpg format only');</script>";
					// 	echo "<script>window.location.href = '{$url}';</script>";
					// }else{
						$data['photo'] = $_FILES['photo']['name'];
						
						$photoex = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
						$photo  = time() .  '' . rand(1,100) . "." . $photoex;
						$data['photo'] = $photo;
						$config = array(
						'upload_path' => "./upload/Category/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'file_name' => $photo
						// 'max_size' => '2048000'
						);
						$this->load->library('upload', $config);
						if(!$this->upload->do_upload('photo')){

							$error = array('error' => $this->upload->display_errors());
							echo "<script>alert('{$error['error']}');</script>";
				            echo "<script>window.location.href = '{$url}';</script>";

							die();
						}else{
							
							$data1 = array('upload_data' => $this->upload->data());
						}
						if(file_exists('./upload/Category/'.$oldphoto)){
							unlink('./upload/Category/'.$oldphoto);
						}
				    // }
					
				}
			
	
			$this->StaffModel->updateCategory($id,$data);
			redirect(base_url() . "StaffController/managecategory");
		}

		public function deletecategory($id){
			$this->isLogin();
			$data['category'] = $this->StaffModel->editCategory($id);
			$oldphoto = $data['category']->photo;
			if(file_exists('./upload/Category/'.$oldphoto)){
				unlink('./upload/Category/'.$oldphoto);
			}
			
			$this->StaffModel->deleteCategory($id);
			redirect(base_url() . "StaffController/managecategory");
		}


		public function addproduct(){
			$this->isLogin();
			$data['category'] = $this->StaffModel->getCategory();
			$this->load->view('Staff/header.php');
			$this->load->view('Staff/add-product', $data);
			$this->load->view('Staff/footer.php');
		}

		public function add_product(){
			$this->isLogin();
			$url = base_url() . "StaffController/addproduct";
			$data['title'] = $this->input->post('title');
			$data['catalogno'] = $this->input->post('catalogno');
			$data['track'] = $this->input->post('track');
			$data['description'] = $this->input->post('description');
			$data['categoryid'] = $this->input->post('categoryid');
			$data['usages'] = $this->input->post('usages');
			$data['key'] = $this->input->post('key');
			$data['bpm'] = $this->input->post('bpm');
			$data['price1'] = $this->input->post('price1');
			$data['price2'] = $this->input->post('price2');
			$data['price3'] = $this->input->post('price3');
			$data['discount'] = $this->input->post('discount');
			$data['status'] = $this->input->post('status');
			$data['photo'] = str_replace(' ', '_', $_FILES['photo']['name']);
			$data['demotrack'] = str_replace(' ', '_', $_FILES['demotrack']['name']);
			
			$config = array(
                'upload_path' => "./upload/Product/",
                'allowed_types' => "gif|jpg|png|jpeg",
                // 'max_size' => '2048000'
            );
			$config1 = array(
                'upload_path' => "./upload/Product/",
                'allowed_types' => "gif|jpg|png|jpeg",
                // 'max_size' => '2048000'
            );
            $this->load->library('upload', $config);
           

            if(!$this->upload->do_upload('photo')){
				$error = array('error' => $this->upload->display_errors());
				echo "<script>alert('{$error['error']}');</script>";
				echo "<script>window.location.href = '{$url}';</script>";
				die();

            }else{
				$this->load->library('upload', $config1);
				$this->upload->initialize($config1);
				
				if(!$this->upload->do_upload('demotrack')){
					$error['error1'] =  $this->upload->display_errors(); 
					
					echo "<script>alert('{$error['error1']}');</script>";
				    echo "<script>window.location.href = '{$url}';</script>";
					die();
					
				}else{
					$data1 = array('upload_data' => $this->upload->data("{$data['photo']}"));
                    $data1 = array('upload_data' => $this->upload->data("{$data['demotrack']}"));
                    $this->StaffModel->addProduct($data);
				    redirect(base_url() . "StaffController/manageproduct");
				}	
		   }
		}

		public function editproduct($id){
			$this->isLogin();
			$data['product'] = $this->StaffModel->getProduct($id);
			$data['category'] = $this->StaffModel->getCategory();
			$this->load->view('Staff/header.php');
            $this->load->view('Staff/edit-product.php', $data);
            $this->load->view('Staff/footer.php');
		}

		public function edit_product($id){
			$this->isLogin();
		
			$url = base_url() . "StaffController/editproduct/$id";
			$data['title'] = $this->input->post('title');
			$data['catalogno'] = $this->input->post('catalogno');
			$data['track'] = $this->input->post('track');
			$data['description'] = $this->input->post('description');
			$data['categoryid'] = $this->input->post('categoryid');
			$data['usages'] = $this->input->post('usages');
			$data['key'] = $this->input->post('key');
			$data['bpm'] = $this->input->post('bpm');
			$data['price1'] = $this->input->post('price1');
			$data['price2'] = $this->input->post('price2');
			$data['price3'] = $this->input->post('price3');
			$data['discount'] = $this->input->post('discount');
			$data['status'] = $this->input->post('status');
			
			$oldphoto = $this->input->post('oldphoto');
			$olddemotrack = $this->input->post('olddemotrack');

			

			if($_FILES['photo']['name'] == "" || $_FILES['demotrack']['name'] == ""){
				// $data['resume'] = $oldresume;
				
				if($_FILES['photo']['name'] == "" && $_FILES['demotrack']['name'] == ""){
					$data['photo'] = $oldphoto;
					$data['demotrack'] = $olddemotrack;	
				}elseif($_FILES['demotrack']['name'] == ""){
					$data['demotrack'] = $olddemotrack;
					$data['photo'] = str_replace(' ', '_', $_FILES['photo']['name']);
					// if(file_exists('./upload/Product/' . $oldphoto)){
				    // unlink('./upload/Product/' . $oldphoto);
					// }
				   $config = array(
					'upload_path' => "./upload/Product/",
					'allowed_types' => "gif|jpg|png|jpeg",
					// 'max_size' => '2048000'
				    );
				    $this->load->library('upload', $config);
	
				
				    if(!$this->upload->do_upload('photo')){
						$error = array('error' => $this->upload->display_errors());
						echo "<script>alert('{$error['error']}');</script>";
				        echo "<script>window.location.href = '{$url}';</script>";
						die();	
					
				    }else{
					    
						$data1 = array('upload_data' => $this->upload->data("{$data['photo']}"));
						if(file_exists('./upload/Product/' . $oldphoto)){
							unlink('./upload/Product/' . $oldphoto);
						}
				
			        }
					
				}elseif($_FILES['photo']['name'] == ""){
					$data['photo'] = $oldphoto;	
					$data['demotrack'] = str_replace(' ', '_', $_FILES['demotrack']['name']);

					// if(file_exists('./upload/Product/' . $olddemotrack)){
					// 	unlink('./upload/Product/' . $olddemotrack);
					// }
				    
				   $config = array(
					'upload_path' => "./upload/Product/",
					'allowed_types' => "gif|jpg|png|jpeg",
					// 'max_size' => '2048000'
				   );
				   $this->load->library('upload', $config);
	
				
				   if(!$this->upload->do_upload('demotrack')){
						$error = array('error' => $this->upload->display_errors());
						// echo "<pre>";
						// print_r($error);
						// echo "</pre>";
						// die();
						echo "<script>alert('{$error['error']}');</script>";
				        echo "<script>window.location.href = '{$url}';</script>";
						die();
					
				   }else{
					    
						$data1 = array('upload_data' => $this->upload->data("{$data['demotrack']}"));

						if(file_exists('./upload/Product/' . $olddemotrack)){
							unlink('./upload/Product/' . $olddemotrack);
						}
				
			        }
					
					
				}
			}else{
				
				$data['photo'] = str_replace(' ', '_', $_FILES['photo']['name']);
				$data['demotrack'] = str_replace(' ', '_', $_FILES['demotrack']['name']);
				
				
				$config = array(
					'upload_path' => "./upload/Product/",
					'allowed_types' => "gif|jpg|png|jpeg",
					// 'max_size' => '2048000'
				);
				$config1 = array(
					'upload_path' => "./upload/Product/",
					'allowed_types' => "gif|jpg|png|jpeg",
					// 'max_size' => '2048000'
				);
				$this->load->library('upload', $config);
				$this->upload->initialize($config1);
				$this->load->library('upload', $config1);
	
				// Code
				if(!$this->upload->do_upload('photo') || !$this->upload->do_upload('demotrack')){

					if(!$this->upload->do_upload('photo') && !$this->upload->do_upload('demotrack')){
						$error = array('error' => $this->upload->display_errors());
						$error['error1'] =  $this->upload->display_errors();
						echo "<script>alert('{$error['error']}');</script>";
						echo "<script>alert('{$error['error1']}');</script>";
				        echo "<script>window.location.href = '{$url}';</script>";
						die();
						
					}elseif(!$this->upload->do_upload('demotrack')){
						$error = array('error' => $this->upload->display_errors());
						echo "<script>alert('{$error['error']}');</script>";
				        echo "<script>window.location.href = '{$url}';</script>";
						die();
						
					}elseif(!$this->upload->do_upload('photo')){
						$error['error1'] =  $this->upload->display_errors(); 
						echo "<script>alert('{$error['error1']}');</script>";
				        echo "<script>window.location.href = '{$url}';</script>";
						die();
						
					}
	
				}else{
					    
						$data1 = array('upload_data' => $this->upload->data("{$data['photo']}"));
						$data1 = array('upload_data' => $this->upload->data("{$data['demotrack']}"));
						
						if(file_exists('./upload/Product/'.$oldphoto)){
							unlink('./upload/Product/'.$oldphoto);
						}
						
						if(file_exists('./upload/Product/'.$olddemotrack)){
							unlink('./upload/Product/'.$olddemotrack);
						}
				
			}
		 }

		

			$this->StaffModel->updateProduct($id,$data);
			redirect(base_url() . "StaffController/manageproduct");
		}

		public function manageproduct(){
			$this->isLogin();
			$data['product'] = $this->StaffModel->getAllProduct();
			$this->load->view('Staff/header');
            $this->load->view('Staff/manage-product', $data);
            $this->load->view('Staff/footer');
		}

		public function deleteproduct($id){
			$this->isLogin();
            $product = $this->StaffModel->getProduct($id);
			$productphoto = $product->photo;
			$productdemotrack = $product->demotrack;
			if(file_exists('./upload/Product/' . $productphoto)){
				unlink('./upload/Product/'.$productphoto);
			}

			if(file_exists('./upload/Product/' . $productdemotrack)){
				unlink('./upload/Product/'.$productdemotrack);
			}
			
			$this->StaffModel->deleteProduct($id);
			redirect(base_url() . "StaffController/manageproduct");
		}

       
	
	}


?>

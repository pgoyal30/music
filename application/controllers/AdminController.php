<?php

    class AdminController extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('AdminModel');
            
        }

		public function index(){
			$this->load->view('login.php');
		}

		public function checklogin(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$isValid = $this->AdminModel->checklogin($email, $password);
			if(isset($isValid)){
				$_SESSION['id'] = $isValid->id;
				$_SESSION['email'] = $isValid->email;
				$_SESSION['role'] = $isValid->role;
				echo "Yes";
			}else{
				echo "No";
			}
		}


		public function isLogin(){
			if(!isset($_SESSION['id'])  && !isset($_SESSION['email'])){
				redirect(base_url() . "AdminController/index");
			}
		}

		public function logout(){    
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			session_destroy();
			redirect(base_url() . "AdminController/index");
		}


		public function register(){
			$this->load->view('register.php');
		}


		public function checkemail(){
			$email = $this->input->post('user_email');
			$isValid = $this->AdminModel->checkemail($email);
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
			$data['role'] = 1;
			$response = $this->AdminModel->insertuser($data);
			if(isset($response)){
				echo "Yes";
			}else{
				echo "No";
			}
		}

		public function createcategory(){
			$this->load->view('header.php');
			$this->load->view('create-category.php');
			$this->load->view('footer.php');
		}

		public function create_category(){
			$data['title'] = $this->input->post('title');
			$data['status'] = $this->input->post('status');
			$data['summary'] = $this->input->post('summary');
			$photoex = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			$url = base_url() . "AdminController/createcategory";
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
								$this->AdminModel->createCategory($data);
								redirect(base_url() . "AdminController/managecategory");
					    }
			}
			
		}

		public function managecategory(){
			$this->isLogin();
            $this->load->view('header');
            $data['category'] = $this->AdminModel->getCategory();
            $this->load->view('manage-category', $data);
            $this->load->view('footer');
        }

		public function editcategory($id){
			$this->isLogin();
			$data['category'] = $this->AdminModel->editCategory($id);
            $this->load->view('header');
            $this->load->view('edit-category', $data);
            $this->load->view('footer');
		}

		public function edit_category($id){
			$this->isLogin();
			$data['title'] = $this->input->post('title');
			$data['summary'] = $this->input->post('summary');
			$data['status'] = $this->input->post('status');
			$oldphoto = $this->input->post('oldphoto');
			$url = base_url() . "AdminController/editcategory/$id";

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
							if(file_exists('./upload/Category/'.$oldphoto)){
								unlink('./upload/Category/'.$oldphoto);
							}
							$data1 = array('upload_data' => $this->upload->data());
						}
						
				    // }
					
				}
			
	
			$this->AdminModel->updateCategory($id,$data);
			redirect(base_url() . "AdminController/managecategory");
		}

		public function deletecategory($id){
			$this->isLogin();
			$data['category'] = $this->AdminModel->editCategory($id);
			$photo = $data['category']->photo;
			if(file_exists('./upload/Category/'.$photo)){
				unlink('./upload/Category/'.$photo);
			}
			
			$this->AdminModel->deleteCategory($id);
			redirect(base_url() . "AdminController/managecategory");
		}


		public function addproduct(){
			$this->isLogin();
			$data['category'] = $this->AdminModel->getCategory();
			$this->load->view('header.php');
			$this->load->view('add-product', $data);
			$this->load->view('footer.php');
		}

		public function add_product(){
			$this->isLogin();
			$url = base_url() . "AdminController/addproduct";
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
			// $data['demotrack'] = str_replace(' ', '_', $_FILES['demotrack']['name']);
			
			if($_FILES['photo']['name'] != ""){
				$photoex = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
				$photoname = time() . "" . rand() . "." . $photoex;
				// echo $photoex;
				if(move_uploaded_file($_FILES['photo']['tmp_name'], './upload/Product/' . $photoname)){
					$data['photo'] = $photoname;
				}else{
					$data['photo'] = '';
				}
			}else{
				$data['photo'] = '';
			}
			
			/* License According price 1 */
			if($_FILES['license1']['name'] != ""){
				// echo $_FILES['license1']['name'];
				$l1ex = pathinfo($_FILES['license1']['name'],PATHINFO_EXTENSION);
				$l1name = time() . "" . rand() . "." . $l1ex;
				// echo $l1name;
				if(move_uploaded_file($_FILES['license1']['tmp_name'], './upload/Product/' . $l1name)){
					$data['license1'] = $l1name;
				}else{
					$data['license1'] = '';
				}
			}else{
				$data['license1'] = '';  
			}
			// echo "<br>";
			/* License According price 2 */
			if($_FILES['license2']['name'] != ""){
				// echo $_FILES['license2']['name'];
				$l2ex = pathinfo($_FILES['license2']['name'],PATHINFO_EXTENSION);
				$l2name = time() . "" . rand() . "." . $l2ex;
				// echo $l2name;
				if(move_uploaded_file($_FILES['license2']['tmp_name'], './upload/Product/' . $l2name)){
					$data['license2'] = $l2name;
				}else{
					$data['license2'] = '';
				}
			}else{
				$data['license2'] = '';
			}
			// echo "<br>";

			/* License According price 3 */
			if($_FILES['license3']['name'] != ""){
				// echo $_FILES['license3']['name'];
				$l3ex = pathinfo($_FILES['license3']['name'],PATHINFO_EXTENSION);
				$l3name = time() . "" . rand() . "." . $l3ex;
				// echo $l3name;
				if(move_uploaded_file($_FILES['license3']['tmp_name'], './upload/Product/' . $l3name)){
					$data['license3'] = $l3name;
				}else{
					$data['license3'] = '';
				}
			}else{
				$data['license3'] = ''; 
			}

			/* Sheet --> Product Sheet */
			if($_FILES['sheet']['name'] != ""){
				// echo $_FILES['license3']['name'];
				$sheetex = pathinfo($_FILES['sheet']['name'],PATHINFO_EXTENSION);
				$sheetname = time() . "" . rand() . "." . $sheetex;
				// echo $l3name;
				if(move_uploaded_file($_FILES['sheet']['tmp_name'], './upload/Product/' . $sheetname)){
					$data['sheet'] = $sheetname;
				}else{
					$data['sheet'] = '';
				}
			}else{
				$data['sheet'] = ''; 
			}

			/* Upload DemoTrack */
			if($_FILES['demotrack']['name'][0] != ""){
				$demoArr = $_FILES['demotrack']['name'];
				$totaldemotrack = count($demoArr);
				for($i = 0; $i < $totaldemotrack; $i++){
					$demotrackex = pathinfo($_FILES['demotrack']['name'][$i], PATHINFO_EXTENSION);
					$newname[$i] = time() . rand() . "." . $demotrackex;
					if(move_uploaded_file($_FILES['demotrack']['tmp_name'][$i], './upload/Demotrack/' . $newname[$i])){

						$demodb[] = $newname[$i];
					} 
				}

				$data['demotrack'] = implode(",", $demodb);
			}else{
				$data['demotrack'] = '';
			}


			/* Preview Zip 1 */
			if($_FILES['pzip1']['name'][0] != ""){
				$pzip1Arr = $_FILES['pzip1']['name'];
				$totalpzip1 = count($pzip1Arr);
				for($i = 0; $i < $totalpzip1; $i++){
					$pzip1ex = pathinfo($_FILES['pzip1']['name'][$i], PATHINFO_EXTENSION);
					$pzip1name[$i] = time() . rand() . "." . $pzip1ex;
					if(move_uploaded_file($_FILES['pzip1']['tmp_name'][$i], './upload/PreviewZip/' . $pzip1name[$i])){

						$pzip1[] = $pzip1name[$i];
					} 
				}

				$data['pzip1'] = implode(",", $pzip1);
			}else{
				$data['pzip1'] = '';
			}

			/* Preview Zip 2 */
			// if($_FILES['pzip2']['name'][0] != ""){
			// 	$pzip2Arr = $_FILES['pzip2']['name'];
			// 	$totalpzip2 = count($pzip2Arr);
			// 	for($i = 0; $i < $totalpzip2; $i++){
			// 		$pzip2ex = pathinfo($_FILES['pzip2']['name'][$i], PATHINFO_EXTENSION);
			// 		$pzip2name[$i] = time() . rand() . "." . $pzip2ex;
			// 		if(move_uploaded_file($_FILES['pzip2']['tmp_name'][$i], './upload/PreviewZip/' . $pzip2name[$i])){

			// 			$pzip2[] = $pzip2name[$i];
			// 		} 
			// 	}

			// 	$data['pzip2'] = implode(",", $pzip2);
			// }else{
			// 	$data['pzip2'] = '';
			// }


			/* Preview Zip 3 */
			// if($_FILES['pzip3']['name'][0] != ""){
			// 	$pzip3Arr = $_FILES['pzip3']['name'];
			// 	$totalpzip3 = count($pzip3Arr);
			// 	for($i = 0; $i < $totalpzip3; $i++){
			// 		$pzip3ex = pathinfo($_FILES['pzip3']['name'][$i], PATHINFO_EXTENSION);
			// 		$pzip3name[$i] = time() . rand() . "." . $pzip3ex;
			// 		if(move_uploaded_file($_FILES['pzip3']['tmp_name'][$i], './upload/PreviewZip/' . $pzip3name[$i])){

			// 			$pzip3[] = $pzip3name[$i];
			// 		} 
			// 	}

			// 	$data['pzip3'] = implode(",", $pzip3);
			// }else{
			// 	$data['pzip3'] = '';
			// }


			/* After Zip 1 */
			if($_FILES['azip1']['name'][0] != ""){
				$azip1Arr = $_FILES['azip1']['name'];
				$totalazip1 = count($azip1Arr);
				for($i = 0; $i < $totalazip1; $i++){
					$azip1ex = pathinfo($_FILES['azip1']['name'][$i], PATHINFO_EXTENSION);
					$azip1name[$i] = time() . rand() . "." . $azip1ex;
					if(move_uploaded_file($_FILES['azip1']['tmp_name'][$i], './upload/AfterZip/' . $azip1name[$i])){
						$azip1[] = $azip1name[$i];
					} 
				}

				$data['azip1'] = implode(",", $azip1);
			}else{
				$data['azip1'] = '';
			}


			/* After Zip 2 */
			// if($_FILES['azip2']['name'][0] != ""){
			// 	$azip2Arr = $_FILES['azip2']['name'];
			// 	$totalazip2 = count($azip2Arr);
			// 	for($i = 0; $i < $totalazip2; $i++){
			// 		$azip2ex = pathinfo($_FILES['azip2']['name'][$i], PATHINFO_EXTENSION);
			// 		$azip2name[$i] = time() . rand() . "." . $azip1ex;
			// 		if(move_uploaded_file($_FILES['azip2']['tmp_name'][$i], './upload/AfterZip/' . $azip2name[$i])){
			// 			$azip2[] = $azip2name[$i];
			// 		} 
			// 	}

			// 	$data['azip2'] = implode(",", $azip2);
			// }else{
			// 	$data['azip2'] = '';
			// }


			/* After Zip 3 */
			// if($_FILES['azip3']['name'][0] != ""){
			// 	$azip3Arr = $_FILES['azip3']['name'];
			// 	$totalazip3 = count($azip3Arr);
			// 	for($i = 0; $i < $totalazip3; $i++){
			// 		$azip3ex = pathinfo($_FILES['azip3']['name'][$i], PATHINFO_EXTENSION);
			// 		$azip3name[$i] = time() . rand() . "." . $azip3ex;
			// 		if(move_uploaded_file($_FILES['azip3']['tmp_name'][$i], './upload/AfterZip/' . $azip3name[$i])){
			// 			$azip3[] = $azip3name[$i];
			// 		} 
			// 	}

			// 	$data['azip3'] = implode(",", $azip3);
			// }else{
			// 	$data['azip3'] = '';
			// }
			


			$this->AdminModel->addProduct($data);
			redirect(base_url() . "AdminController/manageproduct");
		}

	
		public function viewproduct($id){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($id);
			$this->load->view('header.php');
			$this->load->view('view-product-item.php', $data);
			$this->load->view('footer.php');
		}

		public function editproduct($id){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($id);
			$data['category'] = $this->AdminModel->getCategory();
			$this->load->view('header.php');
            $this->load->view('edit-product.php', $data);
            $this->load->view('footer.php');
		}

		public function edit_product($id){
			$this->isLogin();
			// echo "<pre>";
			// print_r($_POST);
			// print_r($_FILES);
			// echo "</pre>";
			// die();
			$url = base_url() . "AdminController/editproduct/$id";
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
			$oldl1 = $this->input->post('oldlicense1');
			$oldl2 = $this->input->post('oldlicense2');
			$oldl3 = $this->input->post('oldlicense3');
			$oldsheet = $this->input->post('oldsheet');
			// $olddemotrack = $this->input->post('olddemotrack');

			
			if($_FILES['photo']['name'] != ""){
				$photoex = pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
				$photoname = time() . "" . rand() . "." . $photoex;
				// echo $photoex;
				if(move_uploaded_file($_FILES['photo']['tmp_name'], './upload/Product/' . $photoname)){
					$data['photo'] = $photoname;
				}else{
					$data['photo'] = $oldphoto;
				}
			}else{
				$data['photo'] = $oldphoto;
			}


			if($_FILES['sheet']['name'] != ""){
				$sheetex = pathinfo($_FILES['sheet']['name'],PATHINFO_EXTENSION);
				$sheetname = time() . "" . rand() . "." . $sheetex;
				// echo $photoex;
				if(move_uploaded_file($_FILES['sheet']['tmp_name'], './upload/Product/' . $sheetname)){
					$data['sheet'] = $sheetname;
				}else{
					$data['sheet'] = $oldsheet;
				}
			}else{
				$data['sheet'] = $oldsheet;
			}


			/* License According price 1 */
			if($_FILES['license1']['name'] != ""){
				// echo $_FILES['license1']['name'];
				$l1ex = pathinfo($_FILES['license1']['name'],PATHINFO_EXTENSION);
				$l1name = time() . "" . rand() . "." . $l1ex;
				// echo $l1name;
				if(move_uploaded_file($_FILES['license1']['tmp_name'], './upload/Product/' . $l1name)){
					$data['license1'] = $l1name;
				}else{
					$data['license1'] = $oldl1;
				}
			}else{
				$data['license1'] = $oldl1;  
			}
			// echo "<br>";
			/* License According price 2 */
			if($_FILES['license2']['name'] != ""){
				// echo $_FILES['license2']['name'];
				$l2ex = pathinfo($_FILES['license2']['name'],PATHINFO_EXTENSION);
				$l2name = time() . "" . rand() . "." . $l2ex;
				// echo $l2name;
				if(move_uploaded_file($_FILES['license2']['tmp_name'], './upload/Product/' . $l2name)){
					$data['license2'] = $l2name;
				}else{
					$data['license2'] = $oldl2;
				}
			}else{
				$data['license2'] = $oldl2;
			}
			// echo "<br>";

			/* License According price 3 */
			if($_FILES['license3']['name'] != ""){
				// echo $_FILES['license3']['name'];
				$l3ex = pathinfo($_FILES['license3']['name'],PATHINFO_EXTENSION);
				$l3name = time() . "" . rand() . "." . $l3ex;
				// echo $l3name;
				if(move_uploaded_file($_FILES['license3']['tmp_name'], './upload/Product/' . $l3name)){
					$data['license3'] = $l3name;
				}else{
					$data['license3'] = $oldl3;
				}
			}else{
				$data['license3'] = $oldl3; 
			}

	
			$this->AdminModel->updateProduct($id,$data);
			redirect(base_url() . "AdminController/manageproduct");
		}

		public function manageproduct(){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getAllProduct();
			$this->load->view('header');
            $this->load->view('manage-product', $data);
            $this->load->view('footer');
		}

		public function deleteproduct($id){
			$this->isLogin();
            $product = $this->AdminModel->getProduct($id);
			$productphoto = $product->photo;
			// $productdemotrack = $product->demotrack;
			$l1 = $product->license1;
			$l2 = $product->license2;
			$l3 = $product->license3;

			$demotrack = $product->demotrack;

			$pzip1 = $product->pzip1;
			// $pzip2 = $product->pzip2;
			// $pzip3 = $product->pzip3;

			$azip1 = $product->azip1;
			// $azip2 = $product->azip2;
			// $azip3 = $product->azip3;

			$sheet = $product->sheet;

			if(file_exists('./upload/Product/' . $productphoto)){
				unlink('./upload/Product/'.$productphoto);
			}
			if(file_exists('./upload/Product/' . $l1)){
				unlink('./upload/Product/'. $l1);
			}
			if(file_exists('./upload/Product/' . $l2)){
				unlink('./upload/Product/'.$l2);
			}
			if(file_exists('./upload/Product/' . $l3)){
				unlink('./upload/Product/'.$l3);
			}
			if(file_exists('./upload/Product/' . $sheet)){
				unlink('./upload/Product/'.$sheet);
			}


			if(!empty($demotrack)){
				$demoArr = explode(",", $demotrack);
				$totaltrack = count($demoArr);
				for($i = 0; $i < $totaltrack; $i++){
					if(file_exists('./upload/Demotrack/' . $demoArr[$i])){
						unlink('./upload/Demotrack/'. $demoArr[$i]);
					}
				} 
			}

			if(!empty($pzip1)){
				$pzip1Arr = explode(",", $pzip1);
				$totalpzip1 = count($pzip1Arr);
				for($i = 0; $i < $totalpzip1; $i++){
					if(file_exists('./upload/PreviewZip/' . $pzip1Arr[$i])){
						unlink('./upload/PreviewZip/'. $pzip1Arr[$i]);
					}
				} 
			}
			// if(!empty($pzip2)){
			// 	$pzip2Arr = explode(",", $pzip2);
			// 	$totalpzip2 = count($pzip2Arr);
			// 	for($i = 0; $i < $totalpzip2; $i++){
			// 		if(file_exists('./upload/PreviewZip/' . $pzip2Arr[$i])){
			// 			unlink('./upload/PreviewZip/'. $pzip2Arr[$i]);
			// 		}
			// 	} 
			// }
			// if(!empty($pzip3)){
			// 	$pzip3Arr = explode(",", $pzip3);
			// 	$totalpzip3 = count($pzip3Arr);
			// 	for($i = 0; $i < $totalpzip3; $i++){
			// 		if(file_exists('./upload/PreviewZip/' . $pzip3Arr[$i])){
			// 			unlink('./upload/PreviewZip/'. $pzip3Arr[$i]);
			// 		}
			// 	} 
			// }





			if(!empty($azip1)){
				$azip1Arr = explode(",", $azip1);
				$totalazip1 = count($azip1Arr);
				for($i = 0; $i < $totalazip1; $i++){
					if(file_exists('./upload/AfterZip/' . $azip1Arr[$i])){
						unlink('./upload/AfterZip/'. $azip1Arr[$i]);
					}
				} 
			}
			// if(!empty($azip2)){
			// 	$azip2Arr = explode(",", $azip2);
			// 	$totalazip2 = count($azip2Arr);
			// 	for($i = 0; $i < $totalazip2; $i++){
			// 		if(file_exists('./upload/AfterZip/' . $azip2Arr[$i])){
			// 			unlink('./upload/AfterZip/'. $azip2Arr[$i]);
			// 		}
			// 	} 
			// }
			// if(!empty($azip3)){
			// 	$azip3Arr = explode(",", $azip3);
			// 	$totalazip3 = count($azip3Arr);
			// 	for($i = 0; $i < $totalazip3; $i++){
			// 		if(file_exists('./upload/AfterZip/' . $azip3Arr[$i])){
			// 			unlink('./upload/AfterZip/'. $azip3Arr[$i]);
			// 		}
			// 	} 
			// }
		    

			// if(file_exists('./upload/Product/' . $productdemotrack)){
			// 	unlink('./upload/Product/'.$productdemotrack);
			// }
			
			$this->AdminModel->deleteProduct($id);
			redirect(base_url() . "AdminController/manageproduct");
		}


		public function manageproductdemo($productid){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('manageproductdemo', $data);
			$this->load->view('footer');
		}

		public function managepreviewzip($productid){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('managepreviewzip', $data);
			$this->load->view('footer');
		}


		public function manageafterzip($productid){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('manageafterzip', $data);
			$this->load->view('footer');
		}

		public function deleteproductdemo($productid, $demotrack){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$demotrackArr = explode(",", $data['product']->demotrack);
			if (($key = array_search($demotrack, $demotrackArr)) !== false) {
				if(file_exists('./upload/Demotrack/' . $demotrackArr[$key])){
					unlink("./upload/Demotrack/" . $demotrackArr[$key]);
					unset($demotrackArr[$key]);
				}
			}

			if(count($demotrackArr) > 0){
				$productdemotrack['demotrack'] = implode(",", $demotrackArr);
			}else{
				$productdemotrack['demotrack'] = '';
			}
			
			$this->AdminModel->updateProduct($productid, $productdemotrack);

			redirect(base_url() . "AdminController/manageproductdemo/" . $productid);
			
		}


		public function deletep1zip($productid, $pzip1){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$pzip1Arr = explode(",", $data['product']->pzip1);
			if (($key = array_search($pzip1, $pzip1Arr)) !== false) {
				if(file_exists('./upload/PreviewZip/' . $pzip1Arr[$key])){
					unlink("./upload/PreviewZip/" . $pzip1Arr[$key]);
					unset($pzip1Arr[$key]);
				}
			}

			if(count($pzip1Arr) > 0){
				$productpzip1['pzip1'] = implode(",", $pzip1Arr);
			}else{
				$productpzip1['pzip1'] = '';
			}
			
			$this->AdminModel->updateProduct($productid, $productpzip1);

			redirect(base_url() . "AdminController/managepreviewzip/" . $productid);
			
		}


		// public function deletep2zip($productid, $pzip2){
		// 	$data['product'] = $this->AdminModel->getProduct($productid);
		// 	$pzip2Arr = explode(",", $data['product']->pzip2);
		// 	if (($key = array_search($pzip2, $pzip2Arr)) !== false) {
		// 		if(file_exists('./upload/PreviewZip/' . $pzip2Arr[$key])){
		// 			unlink("./upload/PreviewZip/" . $pzip2Arr[$key]);
		// 			unset($pzip2Arr[$key]);
		// 		}
		// 	}

		// 	if(count($pzip2Arr) > 0){
		// 		$productpzip2['pzip2'] = implode(",", $pzip2Arr);
		// 	}else{
		// 		$productpzip2['pzip2'] = '';
		// 	}
			
		// 	$this->AdminModel->updateProduct($productid, $productpzip2);

		// 	redirect(base_url() . "AdminController/managepreviewzip/" . $productid);
			
		// }

		// public function deletep3zip($productid, $pzip3){
		// 	$data['product'] = $this->AdminModel->getProduct($productid);
		// 	$pzip3Arr = explode(",", $data['product']->pzip3);
		// 	if (($key = array_search($pzip3, $pzip3Arr)) !== false) {
		// 		if(file_exists('./upload/PreviewZip/' . $pzip3Arr[$key])){
		// 			unlink("./upload/PreviewZip/" . $pzip3Arr[$key]);
		// 			unset($pzip3Arr[$key]);
		// 		}
		// 	}

		// 	if(count($pzip3Arr) > 0){
		// 		$productpzip3['pzip3'] = implode(",", $pzip3Arr);
		// 	}else{
		// 		$productpzip3['pzip3'] = '';
		// 	}
			
		// 	$this->AdminModel->updateProduct($productid, $productpzip3);

		// 	redirect(base_url() . "AdminController/managepreviewzip/" . $productid);
			
		// }


		public function deletea1zip($productid, $azip1){
			$data['product'] = $this->AdminModel->getProduct($productid);
			$azip1Arr = explode(",", $data['product']->azip1);
			if (($key = array_search($azip1, $azip1Arr)) !== false) {
				if(file_exists('./upload/AfterZip/' . $azip1Arr[$key])){
					unlink("./upload/AfterZip/" . $azip1Arr[$key]);
					unset($azip1Arr[$key]);
				}
			}

			if(count($azip1Arr) > 0){
				$productazip1['azip1'] = implode(",", $azip1Arr);
			}else{
				$productazip1['azip1'] = '';
			}
			
			$this->AdminModel->updateProduct($productid, $productazip1);

			redirect(base_url() . "AdminController/manageafterzip/" . $productid);
			
		}


		// public function deletea2zip($productid, $azip2){
		// 	$data['product'] = $this->AdminModel->getProduct($productid);
		// 	$azip2Arr = explode(",", $data['product']->azip2);
		// 	if (($key = array_search($azip2, $azip2Arr)) !== false) {
		// 		if(file_exists('./upload/AfterZip/' . $azip2Arr[$key])){
		// 			unlink("./upload/AfterZip/" . $azip2Arr[$key]);
		// 			unset($azip2Arr[$key]);
		// 		}
		// 	}

		// 	if(count($azip2Arr) > 0){
		// 		$productazip2['azip2'] = implode(",", $azip2Arr);
		// 	}else{
		// 		$productazip2['azip2'] = '';
		// 	}
			
		// 	$this->AdminModel->updateProduct($productid, $productazip2);

		// 	redirect(base_url() . "AdminController/manageafterzip/" . $productid);
			
		// }


		// public function deletea3zip($productid, $azip3){
		// 	$data['product'] = $this->AdminModel->getProduct($productid);
		// 	$azip3Arr = explode(",", $data['product']->azip3);
		// 	if (($key = array_search($azip3, $azip3Arr)) !== false) {
		// 		if(file_exists('./upload/AfterZip/' . $azip3Arr[$key])){
		// 			unlink("./upload/AfterZip/" . $azip3Arr[$key]);
		// 			unset($azip3Arr[$key]);
		// 		}
		// 	}

		// 	if(count($azip3Arr) > 0){
		// 		$productazip3['azip3'] = implode(",", $azip3Arr);
		// 	}else{
		// 		$productazip3['azip3'] = '';
		// 	}
			
		// 	$this->AdminModel->updateProduct($productid, $productazip3);

		// 	redirect(base_url() . "AdminController/manageafterzip/" . $productid);
			
		// }




		public function addproductdemo($productid){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('adddemotrack', $data);
			$this->load->view('footer');
		}

		public function add_productdemo($productid){
			$data['product'] = $this->AdminModel->getProduct($productid);
			// echo $data['profile']->photos;
			if(!empty($data['product']->demotrack)){
				$demotrackArr = explode(",", $data['product']->demotrack);
			}
			
			
			if($_FILES['demotrack']['name'][0] != ""){
				$totaldemotrack = count($_FILES['demotrack']['name']);
				// echo $totalimage;
				for($i = 0; $i < $totaldemotrack; $i++){
					$demotrackex = pathinfo($_FILES['demotrack']['name'][$i], PATHINFO_EXTENSION);
					$demotrackname = time() . "" . rand() . "." . $demotrackex;
					if(move_uploaded_file($_FILES['demotrack']['tmp_name'][$i],'./upload/Demotrack/' . $demotrackname)){
						$demotrackArr[] = $demotrackname;
					}
					
			    }

			}


			$demotrack['demotrack'] = implode(",", $demotrackArr);
            
            $this->AdminModel->updateProduct($productid, $demotrack);
			redirect(base_url() . "AdminController/manageproductdemo/" . $productid);
				
		}



		public function addafterzip($productid){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('add-afterzip', $data);
			$this->load->view('footer');
		}


		public function addpreviewzip($productid){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($productid);
			$this->load->view('header');
			$this->load->view('add-previewzip', $data);
			$this->load->view('footer');
		}


		public function add_afterzip($productid){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($productid);
			// echo $data['profile']->photos;
			if(!empty($data['product']->azip1)){
				$azip1Arr = explode(",", $data['product']->azip1);
			}
			// if(!empty($data['product']->azip2)){
			// 	$azip2Arr = explode(",", $data['product']->azip2);
			// }
			// if(!empty($data['product']->azip3)){
			// 	$azip3Arr = explode(",", $data['product']->azip3);
			// }
			
			
			if($_FILES['azip1']['name'][0] != ""){
				$totalazip1 = count($_FILES['azip1']['name']);
				// echo $totalimage;
				for($i = 0; $i < $totalazip1; $i++){
					$azip1ex = pathinfo($_FILES['azip1']['name'][$i], PATHINFO_EXTENSION);
					$azip1name = time() . "" . rand() . "." . $azip1ex;
					if(move_uploaded_file($_FILES['azip1']['tmp_name'][$i],'./upload/AfterZip/' . $azip1name)){
						$azip1Arr[] = $azip1name;
					}	
			    }
			}

			// if($_FILES['azip2']['name'][0] != ""){
			// 	$totalazip2 = count($_FILES['azip2']['name']);
			// 	// echo $totalimage;
			// 	for($i = 0; $i < $totalazip2; $i++){
			// 		$azip2ex = pathinfo($_FILES['azip2']['name'][$i], PATHINFO_EXTENSION);
			// 		$azip2name = time() . "" . rand() . "." . $azip2ex;
			// 		if(move_uploaded_file($_FILES['azip2']['tmp_name'][$i],'./upload/AfterZip/' . $azip2name)){
			// 			$azip2Arr[] = $azip2name;
			// 		}
					
			//     }

			// }


			// if($_FILES['azip3']['name'][0] != ""){
			// 	$totalazip3 = count($_FILES['azip3']['name']);
			// 	// echo $totalimage;
			// 	for($i = 0; $i < $totalazip3; $i++){
			// 		$azip3ex = pathinfo($_FILES['azip3']['name'][$i], PATHINFO_EXTENSION);
			// 		$azip3name = time() . "" . rand() . "." . $azip3ex;
			// 		if(move_uploaded_file($_FILES['azip3']['tmp_name'][$i],'./upload/AfterZip/' . $azip3name)){
			// 			$azip3Arr[] = $azip3name;
			// 		}
			//     }
			// }


			$azip['azip1'] = implode(",", $azip1Arr);
			// $azip['azip2'] = implode(",", $azip2Arr);
			// $azip['azip3'] = implode(",", $azip3Arr);
            
            $this->AdminModel->updateProduct($productid, $azip);
			redirect(base_url() . "AdminController/manageafterzip/" . $productid);
		}


		public function add_previewzip($productid){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getProduct($productid);
			// echo $data['profile']->photos;
			if(!empty($data['product']->pzip1)){
				$pzip1Arr = explode(",", $data['product']->pzip1);
			}
			// if(!empty($data['product']->pzip2)){
			// 	$pzip2Arr = explode(",", $data['product']->pzip2);
			// }
			// if(!empty($data['product']->pzip3)){
			// 	$pzip3Arr = explode(",", $data['product']->pzip3);
			// }
			
			
			if($_FILES['pzip1']['name'][0] != ""){
				$totalpzip1 = count($_FILES['pzip1']['name']);
				// echo $totalimage;
				for($i = 0; $i < $totalpzip1; $i++){
					$pzip1ex = pathinfo($_FILES['pzip1']['name'][$i], PATHINFO_EXTENSION);
					$pzip1name = time() . "" . rand() . "." . $pzip1ex;
					if(move_uploaded_file($_FILES['pzip1']['tmp_name'][$i],'./upload/PreviewZip/' . $pzip1name)){
						$pzip1Arr[] = $pzip1name;
					}	
			    }
			}

			// if($_FILES['pzip2']['name'][0] != ""){
			// 	$totalpzip2 = count($_FILES['pzip2']['name']);
			// 	// echo $totalimage;
			// 	for($i = 0; $i < $totalpzip2; $i++){
			// 		$pzip2ex = pathinfo($_FILES['pzip2']['name'][$i], PATHINFO_EXTENSION);
			// 		$pzip2name = time() . "" . rand() . "." . $pzip2ex;
			// 		if(move_uploaded_file($_FILES['pzip2']['tmp_name'][$i],'./upload/PreviewZip/' . $pzip2name)){
			// 			$pzip2Arr[] = $pzip2name;
			// 		}
					
			//     }

			// }


			// if($_FILES['pzip3']['name'][0] != ""){
			// 	$totalpzip3 = count($_FILES['pzip3']['name']);
			// 	// echo $totalimage;
			// 	for($i = 0; $i < $totalpzip3; $i++){
			// 		$pzip3ex = pathinfo($_FILES['pzip3']['name'][$i], PATHINFO_EXTENSION);
			// 		$pzip3name = time() . "" . rand() . "." . $pzip3ex;
			// 		if(move_uploaded_file($_FILES['pzip3']['tmp_name'][$i],'./upload/PreviewZip/' . $pzip3name)){
			// 			$pzip3Arr[] = $pzip3name;
			// 		}
			//     }
			// }


			$pzip['pzip1'] = implode(",", $pzip1Arr);
			// $pzip['pzip2'] = implode(",", $pzip2Arr);
			// $pzip['pzip3'] = implode(",", $pzip3Arr);
            
            $this->AdminModel->updateProduct($productid, $pzip);
			redirect(base_url() . "AdminController/managepreviewzip/" . $productid);
		}


		public function uploadsheet(){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getAllProduct();
			$this->load->view('header');
            $this->load->view('uploadsheet', $data);
            $this->load->view('footer');
		}


		public function upload_sheet(){
			$url = base_url() . "AdminController/uploadsheet";
			$data['product_id'] = $this->input->post('product_id');
			$ex = pathinfo($_FILES['sheet']['name'], PATHINFO_EXTENSION);
			$sheet  = time() .  '' . rand(1,100) . "." . $ex;
			$data['sheetname'] = $sheet;
			
			$config = array(
				'upload_path' => "./upload/Sheet/",
				'allowed_types' => "xls|xlsx|csv",
				'file_name' => $sheet
				// 'max_size' => '2048000'
			);
			
			$this->load->library('upload', $config);
		

			if(!$this->upload->do_upload('sheet')){
				$error = array('error' => $this->upload->display_errors());
				echo "<script>alert('{$error['error']}');</script>";
				echo "<script>window.location.href = '{$url}';</script>";

			}else{
			
					$data1 = array('upload_data' => $this->upload->data());
					$this->AdminModel->uploadsheet($data);
					redirect(base_url() . "AdminController/managesheet");
			}
			
		}

		public function managesheet(){
			$this->isLogin();
			$data['sheet'] = $this->AdminModel->getallsheet();
			$this->load->view('header');
            $this->load->view('manage-sheet', $data);
            $this->load->view('footer');
		}

		public function deletesheetfile($id){
			$data['sheet'] = $this->AdminModel->getsheet($id);
			$sheetname = $data['sheet']->sheetname;
			
			if(file_exists('./upload/Sheet/'. $sheetname)){
				
				unlink('./upload/Sheet/'. $sheetname);
			}
			
			$this->AdminModel->deletesheetfile($id);
			redirect(base_url() . "AdminController/managesheet");
		}
       
		public function whitelist(){
			$this->isLogin();
			if($_SESSION['role'] == 1){
				redirect(base_url() . "AdminController/manageCategory");
			}
			$data['list'] = $this->AdminModel->getwhitelist();
			$this->load->view('header');
            $this->load->view('manage-whitelist', $data);
            $this->load->view('footer');
		}

		public function editwhitelist($id){
			$this->isLogin();
			if($_SESSION['role'] == 1){
				redirect(base_url() . "AdminController/manageCategory");
			}
			$data['status'] = $this->AdminModel->editwhitelist($id);
			
			$this->load->view('header');
            $this->load->view('edit-whitelist', $data);
            $this->load->view('footer');
		}

		public function edit_whitelist($id){
			$this->isLogin();
			if($_SESSION['role'] == 1){
				redirect(base_url() . "AdminController/manageCategory");
			}
			$data['status'] = $_POST['status'];
			$this->AdminModel->updatewhitelist($id, $data);
			redirect(base_url() . "AdminController/whitelist");
		}

		public function changestatus(){
		    $option = $_POST['option'];
			if($option == "approve"){
				$data['status'] = 0;
			}elseif($option == "disapprove"){
				$data['status'] = 1;
			}else{
				$data['status'] = 2;
			}
			// $data['status'] = 0;
			$id = $_POST['id'];
			$totalid = count($id);
			
			for($i = 0; $i < $totalid; $i++){
				$this->AdminModel->updatewhitelist($id[$i], $data);
			}
			echo 1;
		}

		// public function adddemotrack(){
		// 	$this->isLogin();
		// 	$data['product'] = $this->AdminModel->getAllProduct();
		// 	$this->load->view('header');
        //     $this->load->view('add-demotrack', $data);
        //     $this->load->view('footer');
		// }

		// public function managedemotrack(){
		// 	$this->isLogin();
		// 	$data['demotrack'] = $this->AdminModel->getalldemotrack();
		// 	$this->load->view('header');
        //     $this->load->view('manage-demotrack', $data);
        //     $this->load->view('footer');
		// }

		// public function add_demotrack(){
		// 	$this->isLogin();
		// 	$data['product_id'] = $this->input->post('product_id');
		// 	$demotrackArr = $_FILES['demotrack']['name'];
		// 	$totaldemo = count($demotrackArr);
		// 	for($i = 0; $i < $totaldemo; $i++){
		// 		$ex = pathinfo($_FILES['demotrack']['name'][$i], PATHINFO_EXTENSION);
		// 		$filename = time() . "" . rand(1,100) . "." . $ex;
		// 		$data['demotrack'] = $filename;
		// 		if(move_uploaded_file($_FILES['demotrack']['tmp_name'][$i], "./upload/Demotrack/" . $filename)){
		// 			$this->AdminModel->adddemotrack($data);
		// 		}
		// 	}

		// 	redirect(base_url() . "AdminController/managedemotrack");
		// }

		

		// public function deletedemotrack($id){
		// 	$data['demotrack'] = $this->AdminModel->getdemotrack($id);
		// 	$demotrack = $data['demotrack']->demotrack;
			
		// 	if(file_exists('./upload/Demotrack/'. $demotrack)){
				
		// 		unlink('./upload/Demotrack/'. $demotrack);
		// 	}
			
		// 	$this->AdminModel->deletedemotrack($id);
		// 	redirect(base_url() . "AdminController/managedemotrack");
		// }

		// public function addtrack(){
		// 	$this->isLogin();
		// 	$data['product'] = $this->AdminModel->getAllProduct();
		// 	$this->load->view('header');
        //     $this->load->view('add-track', $data);
        //     $this->load->view('footer');
		// }

		// public function add_track(){
		// 	$this->isLogin();
		// 	$data['product_id'] = $this->input->post('product_id');
		// 	$trackArr = $_FILES['track']['name'];
		// 	$totaltrack = count($trackArr);
		// 	for($i = 0; $i < $totaltrack; $i++){
		// 		$ex = pathinfo($_FILES['track']['name'][$i], PATHINFO_EXTENSION);
		// 		$filename = time() . "" . rand(1,100) . "." . $ex;
		// 		$data['trackid'] = 'TRACK' . time() . "" . rand(1,10);
		// 		$data['track'] = $filename;
		// 		if(move_uploaded_file($_FILES['track']['tmp_name'][$i], "./upload/Track/" . $filename)){
		// 			$this->AdminModel->addtrack($data);
		// 		}
		// 	}

		// 	redirect(base_url() . "AdminController/managetrack");
		// }

		// public function managetrack(){
		// 	$this->isLogin();
		// 	$data['track'] = $this->AdminModel->getalltrack();
		// 	$this->load->view('header');
        //     $this->load->view('manage-track', $data);
        //     $this->load->view('footer');
		// }

		// public function deletetrack($id){
			
		// 	$data['track'] = $this->AdminModel->gettrack($id);
		// 	$track = $data['track']->track;
		
		// 	if(file_exists('./upload/Track/'. $track)){
				
		// 		unlink('./upload/Track/'. $track);
		// 	}
			
		// 	$this->AdminModel->deletetrack($id);
		// 	redirect(base_url() . "AdminController/managetrack");
		// }


		public function manageusers(){
			$data['allusers'] = $this->AdminModel->getallusers();
			$this->load->view('header');
            $this->load->view('manage-users', $data);
            $this->load->view('footer');

		}


		public function viewclient($id){
			$data['clientorder'] = $this->AdminModel->clientorderinfo($id);
			$this->load->view('header');
            $this->load->view('manage-clientorder.php', $data);
            $this->load->view('footer');
		}
       

		public function addupcomingproduct(){
			$this->isLogin();
			$data['category'] = $this->AdminModel->getCategory();
			$this->load->view('header.php');
			$this->load->view('add-upcomingproduct', $data);
			$this->load->view('footer.php');
		}

		public function add_upcomingproduct(){
			$this->isLogin();
			$url = base_url() . "AdminController/addupcomingproduct";
			$data['title'] = $this->input->post('title');
			
			$data['categoryid'] = $this->input->post('categoryid');
		
			$data['status'] = $this->input->post('status');
		
			if(isset($_FILES['photo']['name']) && $_FILES['demotrack']['name'][0] != ""){
				$photoex = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
				$extensionArr = array('png', 'jpeg', 'jpg', 'gif'); 
				if(!in_array($photoex, $extensionArr)){
					echo "<script>alert('Only Support png, jpeg, jpg format')</script>";
					// echo $url;
					echo "<script>window.location.href = '{$url}';</script>";
					die();
				}else{
					$imgname = time() . "." . $photoex;
					if(move_uploaded_file($_FILES['photo']['tmp_name'], './upload/UpcomingProduct/' . $imgname)){

					}
					$data['photo'] = $imgname;
					$demoArr = $_FILES['demotrack']['name'];
					$totaldemotrack = count($demoArr);
					for($i = 0; $i < $totaldemotrack; $i++){
						$musicex = pathinfo($_FILES['demotrack']['name'][$i], PATHINFO_EXTENSION);
						$newname[$i] = time() . rand(1,100) . "." . $musicex;
						if(move_uploaded_file($_FILES['demotrack']['tmp_name'][$i], './upload/UpcomingProduct/' . $newname[$i])){

							$fordb[] = $newname[$i];
						} 
					}

					$data['demotrack'] = implode(",", $fordb);
				
				}
			}
			
			
            $this->AdminModel->addupcomingProduct($data);
			redirect(base_url() . "AdminController/manageupcomingproduct");
			
		}

		public function manageupcomingproduct(){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getallupcoming();
			$this->load->view('header');
            $this->load->view('manage-upcomingproduct', $data);
            $this->load->view('footer');
		}

		public function editupcomingproduct($id){
			$this->isLogin();
			$data['category'] = $this->AdminModel->getCategory();
			$data['product'] = $this->AdminModel->getupcomingproduct($id);
			$this->load->view('header');
            $this->load->view('edit-upcomingproduct', $data);
            $this->load->view('footer');
		}

		public function editupcomingdemo($id){
			$this->isLogin();
			$data['product'] = $this->AdminModel->getupcomingproduct($id);
			$this->load->view('header');
            $this->load->view('editupcomingdemo', $data);
            $this->load->view('footer');
		}

		public function edit_upcomingdemo($id){
			$this->isLogin();
			$olddemoStr = $this->input->post("olddemotrack");
			echo $olddemoStr;
			$demoArr = explode(",", $olddemoStr);
			
			$demotrack = [];
			if($_FILES['demotrack']['name'][0] != ""){
				$trackArr = $_FILES['demotrack']['name'];
			   $totaltrack = count($trackArr);
			  for($i = 0; $i < $totaltrack; $i++){
				$ex = pathinfo($_FILES['demotrack']['name'][$i], PATHINFO_EXTENSION);
				$filename = time() . '' . rand(1,100) . "." . $ex;
				// $data['demotrack'] = $filename;
				if(move_uploaded_file($_FILES['demotrack']['tmp_name'][$i], "./upload/UpcomingProduct/" . $filename)){
					array_push($demotrack, $filename);
				}
			  }

			  $totaldemo = count($demoArr);
			  for($j = 0; $j < $totaldemo; $j++){
				  if(file_exists('./upload/UpcomingProduct/' . $demoArr[$j])){
					  unlink('./upload/UpcomingProduct/' . $demoArr[$j]);
				  }
			  }
			  
			  $data['demotrack'] = implode(",", $demotrack);
			  $this->AdminModel->updateupcomingdemo($id, $data);

			}


			
			redirect(base_url() . "AdminController/manageupcomingproduct");
		}
		public function edit_upcomingproduct($id){
			$url = base_url() . "AdminController/editupcomingproduct/" . $id;
			$data['title'] =  $this->input->post('title');
			$data['categoryid'] = $this->input->post('categoryid');
			$oldphoto = $this->input->post('oldphoto');
			$data['status'] = $this->input->post('status');
			if($_FILES['photo']['name'] == ""){
				$data['photo'] = $oldphoto;
			}else{
				$photoex = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
				$extensionArr = array('png', 'jpeg', 'jpg', 'gif'); 
				if(!in_array($photoex, $extensionArr)){
					echo "<script>alert('Only Support png, jpeg, jpg format')</script>";
					echo "<script>window.location.href = '{$url}';</script>";
					die();
				}else{
					$photoname = time() . "." . $photoex;

					if(move_uploaded_file($_FILES['photo']['tmp_name'], './upload/UpcomingProduct/' . $photoname)){
						$data['photo'] = $photoname;
						unlink('./upload/UpcomingProduct/' . $oldphoto);
					}
				}
			}

		    $this->AdminModel->updateupcomingproduct($id, $data);
			redirect(base_url() . "AdminController/manageupcomingproduct");
		}
		public function deleteupcomingproduct($id){
			$this->isLogin();
            $product = $this->AdminModel->getupcomingproduct($id);
			$productphoto = $product->photo;
			$productdemotrack = $product->demotrack;
		
			$demoArr = explode(",", $productdemotrack);
			if(file_exists('./upload/UpcomingProduct/' . $productphoto)){
				unlink('./upload/UpcomingProduct/'.$productphoto);
			}
			$totalArr = count($demoArr);
            for($i = 0; $i < $totalArr; $i++){
				if(file_exists('./upload/UpcomingProduct/' . $demoArr[$i])){
					unlink('./upload/UpcomingProduct/'. $demoArr[$i]);
				}
			} 
			
			
			$this->AdminModel->deleteupcomingproduct($id);
			redirect(base_url() . "AdminController/manageupcomingproduct");
		}

		public function createlicense(){
			$this->isLogin();
			$this->load->view('header');
            $this->load->view('createlicense');
            $this->load->view('footer');
		}

		public function create_license(){
			$this->isLogin();
			$data['licenseno'] = $this->input->post('licenseno');
			$this->AdminModel->addlicense($data);
			redirect(base_url() . "AdminController/managelicense");
		}

		public function managelicense(){
			$this->isLogin();
			$data['license'] = $this->AdminModel->getalllicense();
			$this->load->view('header');
            $this->load->view('managelicense', $data);
            $this->load->view('footer');

		}

		public function editlicense($id){
			$this->isLogin();
			$data['license'] = $this->AdminModel->getlicense($id);
			
			$this->load->view('header');
            $this->load->view('editlicense', $data);
            $this->load->view('footer');
		}

		public function edit_license($id){
			$this->isLogin();
			$data['licenseno'] = $this->input->post('licenseno');
			$this->AdminModel->editlicense($id, $data);
			redirect(base_url() . "AdminController/managelicense");
		}
		
		public function deletelicense($id){
			$this->AdminModel->deletelicense($id);
			redirect(base_url() . "AdminController/managelicense");

		}

		public function createstaff(){
			$this->isLogin();
			$this->load->view('header');
            $this->load->view('add-staff');
            $this->load->view('footer');
		}

		public function add_staff(){
			$this->isLogin();
			$url = base_url() . "AdminController/createstaff";
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = $this->input->post('password');
			$data['role'] = 1;
			
			$isValid = $this->AdminModel->checkemail($data['email']);
			if(isset($isValid)){
				echo "<script>alert('Email Already Exists');</script>";
				echo "<script>window.location.href = '{$url}';</script>";
				die();

			}else{
				 $this->AdminModel->insertuser($data);
				 redirect(base_url() . "AdminController/managestaff");
			}
		}

		public function managestaff(){
			$this->isLogin();
			$id  = $_SESSION['id'];
			$data['staff'] = $this->AdminModel->getaccount($id);
			$this->load->view('header');
            $this->load->view('manage-staff', $data);
            $this->load->view('footer');
		}

		public function editstaff($id){
			$this->isLogin();
			$data['staff'] = $this->AdminModel->getstaffacc($id);
			$this->load->view('header');
			$this->load->view('edit-staff', $data);
			$this->load->view('footer');
		
		}

		public function edit_staff($id){
			$url = base_url() . "AdminController/editstaff/" . $id;
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = $this->input->post('password');
			$isValid = $this->AdminModel->checkemail($data['email']);
			
			
			if(isset($isValid)){
				if($id == $isValid->id){
					$this->AdminModel->updateStaff($id, $data);
				}else{
					echo "<script>alert('Email Already Exists');</script>";
					echo "<script>window.location.href = '{$url}';</script>";
					die();
				}
			}else{
				$this->AdminModel->updateStaff($id, $data);
			}

			redirect(base_url() . "AdminController/managestaff");

		}


		public function deletestaff($id){
			$this->AdminModel->deletestaff($id);
			redirect(base_url() . "AdminController/managestaff");
		}

		public function allwhitelist(){
			$this->isLogin();
			if($_SESSION['role'] == 1){
				redirect(base_url() . "AdminController/manageCategory");
			}
			$data['list'] = $this->AdminModel->getAllwhitelist();
			$this->load->view('header');
            $this->load->view('all-whitelist', $data);
            $this->load->view('footer');
		}

		public function manageorder(){
			$data['clientorder'] = $this->AdminModel->allorders();
			$this->load->view('header');
			$this->load->view('manage-clientorder.php', $data);
			$this->load->view('footer');
		}
	
		// -----------------------------------------------------------------------------------------
		//Blog Category
		// -----------------------------------------------------------------------------------------
		
		//Add Blog Category
		public function addbcat(){
			$this->isLogin();
			$this->load->view('header');
            $this->load->view('add-blog-category');
            $this->load->view('footer');
		}

    
		public function add_bcat(){
			$this->isLogin();
			$data['name'] = $this->input->post('name');
			$this->AdminModel->addbcat($data);
			redirect(base_url(). "AdminController/manage_bcat");
		}

		//Manage Blog Category
		public function manage_bcat(){
			$this->isLogin();
			$data['bcat'] = $this->AdminModel->getallbcat();
			$this->load->view('header');
            $this->load->view('manage-blog-cat', $data);
            $this->load->view('footer');
		}

		//Edit Blog Category 

		public function editbcat($id){
			$this->isLogin();
			$data['bcat'] = $this->AdminModel->getbcat($id);
			$this->load->view('header');
            $this->load->view('edit-bcat', $data);
            $this->load->view('footer');

		}

		public function edit_bcat($id){
			$this->isLogin();
			$data['name'] = $this->input->post('name');
			$this->AdminModel->updatebcat($id, $data);
			redirect(base_url(). "AdminController/manage_bcat");
		}



		// Delete Blog Category
		public function deletebcat($id){
			$this->isLogin();
			$this->AdminModel->deletebcat($id);
			redirect(base_url(). "AdminController/manage_bcat");
		}


		/* 
		==============================================================================================
		Blog
		===========================================================================================

		*/

	   public function addblog(){
		$this->isLogin();
		$data['bcat'] = $this->AdminModel->getallbcat();
		$this->load->view('header');
		$this->load->view('add-blog.php', $data);
		$this->load->view('footer');
	   }

	   public function add_blog(){
		   $this->isLogin();	
			$data['title'] = $this->input->post('title');
			$data['heading'] = $this->input->post('heading');
			$data['url_slug'] = $this->input->post('url_slug');
			$data['author'] = $this->input->post('author');
			$data['catid'] = $this->input->post('catid');
			$data['description'] = $this->input->post('description');
			$data['post'] = $this->input->post('post');

			if($_FILES['featuredimage']['name'] != ""){
				$photoex = pathinfo($_FILES['featuredimage']['name'],PATHINFO_EXTENSION);
				$photoname = time() .  "." . $photoex;
				// echo $photoex;
				if(move_uploaded_file($_FILES['featuredimage']['tmp_name'], './upload/Blog/' . $photoname)){
					$data['featuredimage'] = $photoname;
				}else{
					$data['featuredimage'] = '';
				}
			}else{
				$data['featuredimage'] = '';
			}

			$this->AdminModel->addblog($data);
            redirect(base_url() . "AdminController/manageblog");

	   }

	   //Manage Blog

	   public function manageblog(){
		   $this->isLogin();
		   $data['allblog'] = $this->AdminModel->getallblog();
		   $this->load->view('header');
		   $this->load->view('manage-blog.php', $data);
		   $this->load->view('footer');
	   }


	   public function editblog($id){
		   $this->isLogin();
			$data['blog'] = $this->AdminModel->getblog($id);
			$data['bcat'] = $this->AdminModel->getallbcat();
			$this->load->view('header');
			$this->load->view('edit-blog.php', $data);
			$this->load->view('footer');
	   }


	   public function edit_blog($id){
			$data['title'] = $this->input->post('title');
			$data['heading'] = $this->input->post('heading');
			$data['url_slug'] = $this->input->post('url_slug');
			$data['author'] = $this->input->post('author');
			$data['catid'] = $this->input->post('catid');
			$data['description'] = $this->input->post('description');
			$data['post'] = $this->input->post('post');
			$oldimage = $this->input->post('oldfeaturedimage');

			if($_FILES['featuredimage']['name'] != ""){
				$photoex = pathinfo($_FILES['featuredimage']['name'],PATHINFO_EXTENSION);
				$photoname = time() .  "." . $photoex;
				// echo $photoex;
				if(move_uploaded_file($_FILES['featuredimage']['tmp_name'], './upload/Blog/' . $photoname)){
					$data['featuredimage'] = $photoname;
					if(file_exists('./upload/Blog/' . $oldimage)){
						unlink('./upload/Blog/' . $oldimage);
					}
				}else{
					$data['featuredimage'] = $oldimage;
				}
			}else{
				$data['featuredimage'] = $oldimage;
			}

			$this->AdminModel->updateblog($id, $data);
			redirect(base_url() . "AdminController/manageblog");
	   }

	   //Delete Blog

	   public function deleteblog($id){
		   $this->isLogin();
		   $data['blog'] = $this->AdminModel->getblog($id);
		//    echo $data['blog']->featuredimage;
		   if(file_exists('./upload/Blog/' . $data['blog']->featuredimage)){
			   unlink('./upload/Blog/' . $data['blog']->featuredimage);
		   }
		   $this->AdminModel->deleteblog($id);

		   redirect(base_url() . "AdminController/manageblog");

	   }

	}

?>

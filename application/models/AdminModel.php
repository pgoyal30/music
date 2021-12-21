<?php

    class AdminModel extends CI_Model{


		public function checklogin($email, $password){
			$query = $this->db->get_where('admin', ['email' => $email, 'password' => $password]);
			return $query->row();
		}

		public function checkemail($email){
		
			$query = $this->db->get_where('admin', ['email' => $email]);
			return $query->row();
		}

		public function insertuser($data){
			return $this->db->insert('admin', $data);
		}
        
        public function createCategory($data){
            return $this->db->insert('category', $data);
        }

        public function getCategory(){
            $query = $this->db->get('category');
            return $query->result();
        }

        public function editCategory($id){
           $query =  $this->db->get_where('category', ['id' => $id]);
           return $query->row();
        }

		public function updateCategory($id, $data){

			return $this->db->update('category', $data, ['id' => $id]);
		}

		public function deleteCategory($id){
			return $this->db->delete('category', ['id' => $id]);
		}


		public function addProduct($data){
            return $this->db->insert('product', $data);
        }


		public function getAllProduct(){
			$this->db->select('*');
		    $this->db->from('product');
			$query=$this->db->get();
			return $query->result();
        }

		public function getProduct($id){
            $query = $this->db->where('id', $id);
			$this->db->select('*');
		    $this->db->from('product');
			$query=$this->db->get();
            return $query->row();
        }


		public function deleteProduct($id){
			return $this->db->delete('product', ['id' => $id]);
		}


		public function updateProduct($id,$data){
            return $this->db->update('product', $data, ['id' => $id]);
        }


        public function getwhitelist(){

			// $this->db->order_by('wid', 'DESC');
			// return $this->db->get('whitelist')->result();

			$this->db->order_by('whitelist.wid', 'DESC');
			$this->db->where('whitelist.status !=', 0);
			$this->db->select('*, track.tid AS trackuid');
			$this->db->from('whitelist');
			$this->db->join('users', 'users.id = whitelist.user_id', 'LEFT');
			$this->db->join('track', 'track.tid = whitelist.trackid', 'LEFT');
			return $this->db->get()->result();
		} 

		public function getAllwhitelist(){
			$this->db->order_by('whitelist.wid', 'DESC');
			$this->db->select('*');
			$this->db->from('whitelist');
			$this->db->join('users', 'users.id = whitelist.user_id', 'LEFT');
			return $this->db->get()->result();
		}

		public function editwhitelist($id){
			
			return $this->db->get_where('whitelist', ['wid' => $id])->row();
		} 
		public function updatewhitelist($id,$data){
            return $this->db->update('whitelist', $data, ['wid' => $id]);
        }

		public function uploadsheet($data){
			return $this->db->insert('sheet', $data);
		}

		public function getallsheet(){
			$this->db->order_by('sid', 'DESC');
			return $this->db->get('sheet')->result();
		}

		public function getsheet($id){
			return $this->db->get_where('sheet', ['sid' => $id])->row();
		}

		public function deletesheetfile($id){
			return $this->db->delete('sheet', ['sid' => $id]);
		}

		public function adddemotrack($data){
			return $this->db->insert('demotrack', $data);
		}

		public function getalldemotrack(){
			return $this->db->get('demotrack')->result();
		}

		public function getdemotrack($id){
			return $this->db->get_where('demotrack', ['did' => $id])->row();
		}

		public function deletedemotrack($id){
			return $this->db->delete('demotrack', ['did' => $id]);
		}



		public function addtrack($data){
			return $this->db->insert('track', $data);
		}

		public function getalltrack(){
			return $this->db->get('track')->result();
		}

		public function gettrack($id){
			return $this->db->get_where('track', ['tid' => $id])->row();
		}

		public function deletetrack($id){
			return $this->db->delete('track', ['tid' => $id]);
		}

		public function getallusers(){
			return $this->db->get('users')->result();
		}

		public function clientorderinfo($id){
			$this->db->order_by('orders.id', 'DESC');
			$this->db->where('orders.user_id', $id); 
			$this->db->select('orders.id, orders.user_id, users.name, orders.payment_status, orders.order_status, product.id AS pid, product.title');
			$this->db->from('orders');
			$this->db->join('product', 'product.id = orders.product_id', 'LEFT');
			$this->db->join('users', 'users.id = orders.user_id', 'LEFT');
			return $this->db->get()->result();
		}

		
		public function addupcomingProduct($data){
            return $this->db->insert('upcomingproduct', $data);
        }


		public function getallupcoming(){
			$this->db->select('*');
		    $this->db->from('upcomingproduct');
			$query=$this->db->get();
			return $query->result();
        }

		public function getupcomingproduct($id){
            $query = $this->db->where('id', $id);
			$this->db->select('*');
		    $this->db->from('upcomingproduct');
			$query=$this->db->get();
            return $query->row();
        }


		public function deleteupcomingproduct($id){
			return $this->db->delete('upcomingproduct', ['id' => $id]);
		}

		public function addlicense($data){
			return $this->db->insert('license', $data);
		}

		public function getalllicense(){
			return $this->db->get('license')->result();
		}

		public function getlicense($id){
			return $this->db->get_where('license', ['lid' => $id])->row();
		}

		public function editlicense($id, $data){
			return $this->db->update('license', $data, ['lid' => $id]);
		}
		public function deletelicense($id){
			return $this->db->delete('license', ['lid' => $id]);
		}

		public function updateupcomingproduct($id, $data){
			return $this->db->update('upcomingproduct', $data, ['id' => $id]);
		}

		public function updateupcomingdemo($id, $data){
			return $this->db->update('upcomingproduct', $data, ['id' => $id]);
		}

		public function getaccount($id){
			return $this->db->get_where('admin', ['id !=' => $id])->result();
		}

		public function getstaffacc($id){
			return $this->db->get_where('admin', ['id' => $id])->row();
		}

		public function updatestaff($id, $data){
			return $this->db->update('admin', $data, ['id' => $id]);
		}

		public function deletestaff($id){ return $this->db->delete('admin', ['id' => $id]); }

		public function allorders(){
			$this->db->order_by('orders.id', 'DESC');
			$this->db->select('orders.id, orders.user_id, users.name, orders.payment_status, orders.order_status, product.id AS pid, product.title');
			$this->db->from('orders');
			$this->db->join('product', 'product.id = orders.product_id', 'LEFT');
			$this->db->join('users', 'users.id = orders.user_id', 'LEFT');
			return $this->db->get()->result();
		}

		public function addbcat($data){
			return $this->db->insert('blogcategory',$data);
		}

		public function getallbcat(){
			return $this->db->get('blogcategory')->result();
		}

		public function getbcat($id){
			return $this->db->get_where('blogcategory', ['id' => $id])->row();
		}
		public function updatebcat($id, $data){
			return $this->db->update('blogcategory', $data, ['id' => $id]);
		}

		public function deletebcat($id){
			return $this->db->delete('blogcategory', ['id' => $id]);
		}


		public function addblog($data){
			return $this->db->insert('blog', $data);
		}

		public function getblog($id){
			return $this->db->get_where('blog', ['id' => $id])->row();
		}
		public function getallblog(){
			return $this->db->get('blog')->result();
		}

		public function updateblog($id, $data){
			return $this->db->update('blog', $data, ['id' => $id]);
		}

		public function deleteblog($id){
			return $this->db->delete('blog', ['id' => $id]);
		}


		
    }


?>

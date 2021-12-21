<?php

    class StaffModel extends CI_Model{

		public function checklogin($email, $password){
			$query = $this->db->get_where('staff', ['email' => $email, 'password' => $password]);
			return $query->row();
		}
        
		public function checkemail($email){
		
			$query = $this->db->get_where('staff', ['email' => $email]);
			return $query->row();
		}

		public function insertuser($data){
			return $this->db->insert('staff', $data);
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


     
    }


?>

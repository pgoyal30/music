<?php

	class WebsiteModel extends CI_Model{


		public function getalltrack(){
			$this->db->order_by('product.id', 'DESC');
			$this->db->where('product.status', '0');
			$this->db->select('*');
		    $this->db->from('product');
			$query=$this->db->get();
			return  $query->result();	
		}
		public function latesttrack(){
			$this->db->order_by('product.id', 'DESC');
			$this->db->limit(3);
			$this->db->where('product.status', '0');
			$this->db->select('*');
		    $this->db->from('product');
			$query=$this->db->get();
			return  $query->result();	
		}
		public function getdemotrack(){
			$this->db->order_by('did', 'DESC');
			$this->db->limit(6);
			$this->db->select('*, demotrack.demotrack AS trackname ');
		    $this->db->from('demotrack');
			$this->db->join('product', 'product.id = demotrack.product_id', 'left');
			$query=$this->db->get();
			return  $query->result();	
		}

		public function demotrack($id){
			return $this->db->get_where('demotrack', ['product_id' => $id] )->result();
		}

		public function gettrack($id){
			$query =  $this->db->get_where('product', ['id' => $id]);
           return $query->row();
		}


		public function checklogin($email, $password){
			$query = $this->db->get_where('users', ['email' => $email, 'password' => $password]);
			return $query->row();
		}


		public function checkemail($email){
		
			$query = $this->db->get_where('users', ['email' => $email]);
			return $query->row();
		}

		public function insertuser($data){
			return $this->db->insert('users', $data);
		}

		public function getuser($id){
			$query = $this->db->get_where('users', ['id' => $id]);
			return $query->row();
		}

		public function updatePassword($id, $data){
			return $this->db->update('users', $data, ['id' => $id]);
		}


		public function getallorder($id){
			$this->db->order_by('orders.id', 'DESC');
			$this->db->where('user_id', $id);
			$this->db->where('payment_status', "completed");
			$this->db->select('product.id, product.title, orders.id, orders.payment_status, orders.order_status, orders.added_on');
		    $this->db->from('orders');
		    $this->db->join('product', 'product.id = orders.product_id', 'left');
			$query=$this->db->get();
			return $query->result();
		}


		public function getallusertrack($id){
			$this->db->where('user_id', $id);
			$this->db->select('*');
			$this->db->from('track');
			$this->db->join('orders', 'orders.product_id = track.product_id', 'left');
			$query=$this->db->get();
			return $query->result();
		
	}
		
		public function addlink($data){
			return $this->db->insert('whitelist', $data);
		}

		public function getallwhitelist($id){
			// $query = $this->db->get_where('whitelist', ['user_id' => $id]);
			// return $query->result();
			$this->db->where('whitelist.user_id', $id);
			$this->db->select('*, track.trackid AS trackuid');
			$this->db->from('whitelist');
			$this->db->join('track', 'whitelist.trackid = track.tid', 'left');
			$query=$this->db->get();
			return $query->result();
		}
	}



?>

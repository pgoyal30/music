<?php

	class UserModel extends CI_Model{

		public function checkemail($email){
		
			$query = $this->db->get_where('users', ['email' => $email]);
			return $query->row();
		}

		public function insertuser($data){
			return $this->db->insert('users', $data);
		}

		public function checklogin($email, $password){
			$query = $this->db->get_where('users', ['email' => $email, 'password' => $password]);
			return $query->row();
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

	
		public function getalltrack($id){
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
			$query = $this->db->get_where('whitelist', ['user_id' => $id]);
			return $query->result();
		}
		
	}

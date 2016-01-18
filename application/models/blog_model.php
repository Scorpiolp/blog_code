<?php
	class Blog_model extends CI_Model{
		//get all the articles
		public function getAll(){
			$res=$this->db->get('zkcblogtest');
			return $res->result();
		}
		
		public function insert($data){
		//insert one article 	
			$bool=$this->db->insert('zkcblogtest',$data);
			return $bool;
		}
		
		public function search($id){
			$sql='select * from zkcblogtest where id = ?';
			$res=$this->db->query($sql,array($id));
			return $res->result();
		}
		
		public function edit($data,$id){
			$bool=$this->db->update('zkcblogtest',$data,array('id'=>$id));
			return $bool;
		}
		
		public function deletedata($id){
			$bool=$this->db->delete('zkcblogtest',array('id'=>$id));
			return $bool;
		}
		
	}
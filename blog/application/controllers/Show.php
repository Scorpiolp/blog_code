<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	public function index()
	{	
		$this->load->database();
		$this->load->model('Blog_model');
		$id = $_GET['id'];
//		echo $id;
//		$sql='select * from zkcblogtest where id = ?';
//		$res=$this->db->query($sql,array($id));
//		$list = $res->result();
		$list = $this->Blog_model->search($id);
		$data['list']=$list;
		$this->load->view('header');
		$this->load->view('show_detail',$data);
		$this->load->view('footer');
		//$this->load->vars($id);
		//$this->load->view('show_detail',$id);
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{	/*		
		$this->load->database();
		$res=$this->db->get('test');
		foreach($res->result() as $item){
			echo $item->id;
			echo '<br>';
		}
		*/
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Blog_model');
		//$vool=$this->Blog_model->insert($data);
		//echo $vool;
		
		//$bool=$this->db->insert('zkcblogtest',$data1);
		//echo $bool;
		
		$list=$this->Blog_model->getAll();
		
		$data['list']=$list;
		$this->load->vars($data);
		$this->load->view('header');
		$this->load->view('show_blog');
		$this->load->view('footer');
	}
}
?>
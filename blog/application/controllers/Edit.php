<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function modify(){	
	/*
		$this->load->database();
		$today=date("Y-m-d");
		$data=array(
			'Articlename'=>'aaaaa',
			'Authorname'=>'assd',
			'Date'=>$today,
			'Text'=>'new text2'
		);
		
		$this->load->model('Blog_model');
		//$vool=$this->Blog_model->insert($data);
		//echo $vool;
		
		//$bool=$this->db->insert('zkcblogtest',$data1);
		//echo $bool;
		
		$list=$this->Blog_model->getAll();
		
		$data['list']=$list;
		$this->load->vars($data);
		$this->load->view('show_blog');
	*/
	//	echo 'index success1';
	
		$this->load->database();
		$this->load->model('Blog_model');
		$id = $_GET['id'];
		$list = $this->Blog_model->search($id);
		$data['list']=$list;
		$this->load->view('header');
		$this->load->view('edit_detail',$data);
		$this->load->view('footer');
	}
	
	public function save(){
		//echo "<p>" . 'save success';		
		//echo $_POST["PassageName"];
		
		$this->load->database();
		$this->load->model('blog_model');
		$today=date("Y-m-d");
		$data=array(
			'Articlename'=>$_POST["PassageName"],
			'Authorname'=>$_POST["AuthorName"],
			'Date'=>$today,
			'Text'=>$_POST['Text']
		);		
		$id = $_GET['id'];
		$bool=$this->blog_model->edit($data,$id);
		//echo $bool;
		$this->load->view('header');
		$this->load->view('edit_success');
		$this->load->view('footer');
	}
	
	public function deletearticle(){
		$this->load->database();
		$this->load->model('blog_model');
		$id = $_GET['id'];
		$vool=$this->blog_model->deletedata($id);
		//echo $vool;
		$this->load->view('header');
		$this->load->view('delete_success');
		$this->load->view('footer');
	}
	
	public function create(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('PassageName', 'Passage Name', 'required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('AuthorName', 'Author Name', 'required|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('Text', 'Text', 'required|max_length[200]');
		$this->load->view('header');
		$this->load->view('create_form');
		$this->load->view('footer');
	}
	
	public function publish(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('PassageName', 'Passage Name', 'required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('AuthorName', 'Author Name', 'required|min_length[3]|max_length[10]');
		$this->form_validation->set_rules('Text', 'Text', 'required|max_length[200]');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('header');
            $this->load->view('create_form');
			$this->load->view('footer');
        }
		else {
			$this->load->database();
			$this->load->model('blog_model');
			$today=date("Y-m-d");
			$data=array(
				'Articlename'=>$_POST["PassageName"],
				'Authorname'=>$_POST["AuthorName"],
				'Date'=>$today,
				'Text'=>$_POST['Text']
			);
			$bool=$this->blog_model->insert($data);
			//echo $bool;
			$this->load->view('header');
			$this->load->view('create_success');
			$this->load->view('footer');
		}
	}
	
}
?>
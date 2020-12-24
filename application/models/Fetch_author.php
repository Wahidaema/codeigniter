<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_author extends CI_Model {


	


	public function fetch_main($limit,$offset)
		
	  
	{

		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		$author=   $this->session->userdata('username');
		return $this->db->get_where('maincourse',array('postby'=>$author))->result();;
	
		
	}
	public function editmaincourse($id)
	{
		return $this->db->get_where('maincourse',array('id'=>$id))->row();
	}
	function count_maincourse()
	{
		return $this->db->get('maincourse')->num_rows();
	}
	public function viewmaincourse($id)
	{
		return $this->db->get_where('maincourse',array('id'=>$id))->row();
	}

	

	public function fetch_user()
	{
		
		$this->db->order_by('id DESC');
		$author =  $this->session->userdata('username');
		return $this->db->get_where('author',array('username'=>$author))->row();
	
	
	}
	
	public function fetch_authora()
		
	  
	{

		$id=$this->session->userdata('username');
		return $this->db->get_where('author',array('username'=>$id))->row();
	
		
	
		
	}
	public function viewauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
		
	}

	public function editauthor($id)
	{
		return $this->db->get_where('author',array('username'=>$id))->row();
	
		
	}
	function count_author()
	{
		return $this->db->get('author')->num_rows();
	
		
	}

	
	public function editaboutpage($id)
	{
		return $this->db->get_where('aboutpage',array('id'=>$id))->row();
	
		
	}


	public function fetch_login()
	{
		return $this->db->get('login')->result();
	
		
	}

	
	
    
}

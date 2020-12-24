<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch extends CI_Model {


    public function fetch_hdr($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('header')->result();
	}
	public function edithdr($id)
	{
		return $this->db->get_where('header',array('id'=>$id))->row();
		
	}
	function count_hdr()
	{
		return $this->db->get('header')->num_rows();
	}
	public function viewhdr($id)
	{
		return $this->db->get_where('header',array('id'=>$id))->row();
	}




	public function fetch_aboutsingle($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('aboutme')->result();
	}
	public function editaboutsingle($id)
	{
		return $this->db->get_where('aboutme',array('id'=>$id))->row();
	}
	function count_aboutsingle()
	{
		return $this->db->get('aboutme')->num_rows();
	}
	public function viewaboutsingle($id)
	{
		return $this->db->get_where('aboutme',array('id'=>$id))->row();
	}



	public function fetch_aboutus($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('aboutus')->result();
	}
	public function editaboutus($id)
	{
		return $this->db->get_where('aboutus',array('id'=>$id))->row();
	}
	function count_aboutus()
	{
		return $this->db->get('aboutus')->num_rows();
	}
	public function viewaboutus($id)
	{
		return $this->db->get_where('aboutus',array('id'=>$id))->row();
	}



	public function fetch_contact($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('contactus')->result();
	}
	public function editcontact($id)
	{
		return $this->db->get_where('contactus',array('id'=>$id))->row();
	}
    function count_contact()
	{
		return $this->db->get('contactus')->num_rows();
	}
	public function viewcontact($id)
	{
		return $this->db->get_where('contactus',array('id'=>$id))->row();
	}



	public function fetch_team($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('teamsection')->result();
	}
	public function editteam($id)
	{
		return $this->db->get_where('teamsection',array('id'=>$id))->row();
	}
	function count_team()
	{
		return $this->db->get('teamsection')->num_rows();
	}
	public function viewteam($id)
	{
		return $this->db->get_where('teamsection',array('id'=>$id))->row();
	}




	public function fetch_post($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
	}
	public function editpost($id)
	{
		return $this->db->get_where('maincourse',array('id'=>$id))->row();
	}
	function count_post()
	{
		return $this->db->get('maincourse')->num_rows();
	}
	public function viewpost($id)
	{
		return $this->db->get_where('maincourse',array('id'=>$id))->row();
	}


	




	public function fetch_recipe($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('recipeindex')->result();
	}
	public function editrecipe($id)
	{
		return $this->db->get_where('recipeindex',array('id'=>$id))->row();
	}
	function count_recipe()
	{
		return $this->db->get('recipeindex')->num_rows();
	}
	public function viewrecipe($id)
	{
		return $this->db->get_where('recipeindex',array('id'=>$id))->row();
	}





	public function fetch_main($limit, $offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
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




	public function fetch_dessert($limit,$offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('dessertsection')->result();
	}
	public function editdessert($id)
	{
		return $this->db->get_where('dessertsection',array('id'=>$id))->row();
	}
	function count_dessert()
	{
		return $this->db->get('dessertsection')->num_rows();
	}
	public function viewdessert($id)
	{
		return $this->db->get_where('dessertsection',array('id'=>$id))->row();
	}




	public function fetch_related($limit,$offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('relatedposts')->result();
	}
	public function editrelated($id)
	{
		return $this->db->get_where('relatedposts',array('id'=>$id))->row();
	}
	function count_related()
	{
		return $this->db->get('relatedposts')->num_rows();
	}
	public function viewrelated($id)
	{
		return $this->db->get_where('relatedposts',array('id'=>$id))->row();
	}




	public function fetch_recipefooter($limit,$offset)
	{
		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('anotherpage')->result();
	}
	public function editrecipefooter($id)
	{
		return $this->db->get_where('anotherpage',array('id'=>$id))->row();
	}
	function count_recipefooter()
	{
		return $this->db->get('anotherpage')->num_rows();
	}
	public function viewrecipefooter($id)
	{
		return $this->db->get_where('anotherpage',array('id'=>$id))->row();
	}
	public function fetch_message()
	{
		
		$this->db->order_by('id DESC');
		return $this->db->get('ctmessage')->result();
	
	}
	
	public function viewmessage($id)
	{
		return $this->db->get_where('ctmessage',array('id'=>$id))->row();
	
		
	}
	function count_message()
	{
		return $this->db->get('ctmessage')->num_rows();
	
		
	}
	public function fetch_author($limit,$offset)
		
	  
	{

		$this->db->limit($limit);
		$this->db->offset($offset);
		$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
		
	}
	public function viewauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
		
	}

	public function editauthor($id)
	{
		return $this->db->get_where('author',array('id'=>$id))->row();
	
		
	}
	function count_author()
	{
		return $this->db->get('author')->num_rows();
	
		
	}
	public function fetch_login()
	{
		return $this->db->get('login')->result();
	
		
	}
}


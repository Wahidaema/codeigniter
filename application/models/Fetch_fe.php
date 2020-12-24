<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fetch_fe extends CI_Model {


    public function fetch_fe_hdr()
	{
		$this->db->order_by('id DESC');
		return $this->db->get('header')->result();
	}




	public function fetch_fe_aboutsingle()
	{
		$this->db->limit(3);
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('aboutme')->result();
	}
	



	public function fetch_fe_aboutus()
	{
		$this->db->limit(4);
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('aboutus')->result();
	}




	public function fetch_fe_contact()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('contactus')->result();
	}




	public function fetch_fe_team()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('teamsection')->result();
	}





	public function fetch_fe_post()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
	}



	




	
	

	public function fetch_fe_recipe()
	{
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
	
		
	}


	public function view_viewpage1 ($id)
	{
		return $this->db->get_where('maincourse',array('id'=>$id))->row();
		
	
		
	}
/**dessertrecipe */

	public function fetch_fe_dessertrecipe()
	{
		$this->db->order_by('id DESC');
		return $this->db->get('dessertsection')->result();
	
		
	}


	public function view_viewpage2 ($id)
	{
		return $this->db->get_where('dessertsection',array('id'=>$id))->row();
		
	
		
	}
/**relatedpost */
public function fetch_fe_relatedpage()
{
	$this->db->order_by('id DESC');
	return $this->db->get('relatedposts')->result();

	
}


public function view_viewpage3 ()
{
	return $this->db->get_where('relatedposts',array('id'=>$id))->row();
	

	
}

	public function fetch_fe_main()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
	}





	public function fetch_fe_dessert()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('dessertsection')->result();
	}





	public function fetch_fe_related()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('relatedposts')->result();
	}
	



	public function fetch_fe_recipefooter()
	{
		$this->db->limit();
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('anotherpage')->result();
	}
	public function fetch_fe_recipe_recent()
	{
		$this->db->limit(6);
		$this->db->offset(0);
		$this->db->order_by('id DESC');
		return $this->db->get('maincourse')->result();
	
		
	}
	public function fetch_fe_popular_pst()
	{
		$this->db->limit(6);
		$this->db->order_by('like_post DESC');
		return $this->db->get('maincourse')->result();
	
		
	}
	public function fetch_message()
	{
	
		$this->db->order_by('id DESC');
		return $this->db->get('ctmessage')->result();
	
	}
	public function fetch_author()
	{
		
		$this->db->order_by('id DESC');
		return $this->db->get('author')->result();
	
	}


	
}

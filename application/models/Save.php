<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Model {

	public function save_header()
	{
		$data=array();
		$data['heading']=$this->input->post('heading',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		$data['logotext']=$this->input->post('logo-text',true);

        if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->insert('header',$data);
	}
	public function updatehdr($id)
	{
		$data['heading']=$this->input->post('heading',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		$data['logotext']=$this->input->post('logo-text',true);
		
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('header',$data);
	}
	public function deletehdr($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('header');
	}




	public function save_aboutsingle()
	{
		$data=array();
		$data['authorname']=$this->input->post('author-name',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);

		if(isset($_FILES['profile']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('profile')){
				$uploadprof=$this->upload->data();
				$data['profile']=$uploadprof['file_name'];
		    }
		}
		$this->db->insert('aboutme',$data);
	}
	public function updateaboutsingle($id)
	{
		$data['authorname']=$this->input->post('author-name',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
       
		if(isset($_FILES['profile']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('profile')){
				$uploadprof=$this->upload->data();
				$data['profile']=$uploadprof['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('aboutme',$data);
	}
	public function deleteaboutsingle($id)
	{
	    $this->db->where(array('id'=>$id));
		$this->db->delete('aboutme');
	}





	public function save_aboutus()
	{
		$data=array();
		$data['heading']=$this->input->post('heading',true);
		$data['title']=$this->input->post('title',true);
		$data['content']=$this->input->post('content',true);
        if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('aboutus',$data);
	}
	public function updateaboutus($id)
	{
		$data['heading']=$this->input->post('heading',true);
		$data['title']=$this->input->post('title',true);
		$data['content']=$this->input->post('content',true);
		$data['status']="0";
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('aboutus',$data);
	}
	public function deleteaboutus($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('aboutus');
	}



	public function save_addmaincourse_ah()
	
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->session->userdata('username');
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('maincourse',$data);
	}

	public function save_post()
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('maincourse',$data);;
	}
	public function updatepost($id)
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		
		$this->db->where(array('id'=>$id));
		$this->db->update('maincourse',$data);
	}
	public function deletepost($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('maincourse');
	}





	public function save_contact()
	{
		$data=array();
		$data['heading']=$this->input->post('heading',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['message']=$this->input->post('message',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
	    if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->insert('contactus',$data);
	}
	public function updatecontact($id)
	{
		$data['heading']=$this->input->post('heading',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['message']=$this->input->post('message',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
	
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('contactus',$data);
	}
	public function deletecontact($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('contactus');
	}




	public function save_dessert()
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('dessertsection',$data);
	}
	public function updatedessert($id)
	{
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		
		$this->db->where(array('id'=>$id));
		$this->db->update('dessertsection',$data);
	}
	public function deletedessert($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('dessertsection');
	}





	public function save_main()
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('maincourse',$data);
	}
	public function updatemain($id)
	{
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
	
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$data['like_post']="0";
		$this->db->where(array('id'=>$id));
		$this->db->update('maincourse',$data);
	}
	public function deletemain($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('maincourse');
	}




	public function save_recipefooter()
	{
		$data=array();
		$data['content']=$this->input->post('content',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->insert('anotherpage',$data);
	}
	public function updaterecipefooter($id)
	{
		$data['content']=$this->input->post('content',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['paragraph']=$this->input->post('paragraph',true);
		
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('anotherpage',$data);
	}
	public function deleterecipefooter($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('anotherpage');
	}




	public function save_recipeindex()
	{
		$data=array();
		$data['heading']=$this->input->post('heading',true);
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$this->db->insert('recipeindex',$data);
	}
	public function updaterecipeindex($id)
	{
		$data['heading']=$this->input->post('heading',true);
		$data['status']="0";
		if(isset($_FILES['background']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('background')){
				$uploadbg=$this->upload->data();
				$data['background']=$uploadbg['file_name'];
		    }
		}
		$data['like_post']="0";
		$this->db->where(array('id'=>$id));
		$this->db->update('recipeindex',$data);
	}
	public function deleterecipeindex($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('recipeindex');
	}




	public function save_related()
	{
		$data=array();
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$this->db->insert('relatedposts',$data);
	}
	public function updaterelatedpost($id)
	{
		$data['recipetitle']=$this->input->post('recipe-title',true);
		$data['postby']=$this->input->post('post-by',true);
		$data['date']=$this->input->post('input',true);
		$data['content']=$this->input->post('content',true);
		$data['buttoncaption']=$this->input->post('button-caption',true);
	
		if(isset($_FILES['image']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('image')){
				$uploadimg=$this->upload->data();
				$data['image']=$uploadimg['file_name'];
		    }
		}
		$data['like_post']="0";
		$this->db->where(array('id'=>$id));
		$this->db->update('relatedposts',$data);
	}
	public function deleterelatedpost($id)
	{
        $this->db->where(array('id'=>$id));
		$this->db->delete('relatedposts');
	}





    public function save_team()
	{
		$data=array();
		$data['name']=$this->input->post('name',true);
		$data['position']=$this->input->post('title',true);
		$data['content']=$this->input->post('content',true);
		if(isset($_FILES['profile']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('profile')){
				$uploadprof=$this->upload->data();
				$data['profile']=$uploadprof['file_name'];
		    }
		}
		$this->db->insert('teamsection',$data);
	}
	public function updateteamsection($id)
	{
		$data['name']=$this->input->post('name',true);
		$data['position']=$this->input->post('title',true);
		$data['content']=$this->input->post('content',true);
		$data['status']="0";
		if(isset($_FILES['profile']['name'])){
            $this->load->library('upload');
		    $config['upload_path']          = APPPATH.'../asset/uploads/';
		    $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		    $config['file_name']        = date('YmdHms').'_'.rand(1,9999999);
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('profile')){
				$uploadprof=$this->upload->data();
				$data['profile']=$uploadprof['file_name'];
		    }
		}
		$this->db->where(array('id'=>$id));
		$this->db->update('teamsection',$data);
	}
	public function deleteteamsection($id)
	{
		$this->db->where(array('id'=>$id));
		$this->db->delete('teamsection');
	}





	public function approve_author($id)
{
	$data['status'] ='1';
	$this->db->where(array('id'=>$id));
	$this->db->update('author', $data);

}
	public function save_message()
	{
		
		$data =array();
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		
		$data['message']=$this->input->post('message',true);
	
		$this->db->insert('ctmessage',$data);
			
		
	}
    public function deletemessage($id)
	{
		
		
		$this->db->where(array('id'=>$id));
		$this->db->delete('ctmessage');
			
		
	}




	public function likerecipe($id,$like)
{
	
	$data['like_post']=$like+1;

	$this->db->where(array('id'=>$id));
	$this->db->update('maincourse',$data);
		
	
}
public function save_author()
{
	
	
	$data =array();
	$data['username']=$this->input->post('username',true);
	$data['email']=$this->input->post('email',true);
	$data['password']= md5($this->input->post('password',true));
	$data['status']="0";
	$this->db->insert('author',$data);
		
	
}
public function save_addauthor()
{
	
	$data =array();
		$data['username']=$this->input->post('username',true);
		$data['name']=$this->input->post('name',true);
		$data['email']=$this->input->post('email',true);
		$data['password']=$this->input->post('password',true);
	    $data['status']="0";
		$this->db->insert('author',$data);
		
	
}
public function updateauthor($id)
{
	
	
	$data['username']=$this->input->post('username',true);
	$data['email']=$this->input->post('email',true);
	$data['password']=$this->input->post('password',true);
	$this->db->where(array('id'=>$id));
	$this->db->update('author',$data);
		
	
}
public function deleteauthor($id)
{
	
	
	$this->db->where(array('id'=>$id));
	$this->db->delete('author');
		
	
}

}


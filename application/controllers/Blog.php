<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('fetch_fe');
		$data['fetchhdr']=$this->fetch_fe->fetch_fe_hdr();
		$data['recipe_recent']=$this->fetch_fe->fetch_fe_recipe_recent();
		$data['popularpost']=$this->fetch_fe->fetch_fe_popular_pst();
		$this->load->view('theme/index',$data);
	}
	public function aboutsingle()
	{
		$this->load->view('theme/aboutsingle');
	}
	public function aboutus()
	{
		$this->load->view('theme/aboutus');
	}
	public function contact()
	{
		$this->load->view('theme/contact');
	}
	public function homepage()
	{
		$this->load->view('theme/homepage');
	}

	public function signup()
	{
		$this->load->view('theme/signup');
	}


	public function recipe()
	{
		$this->load->model('fetch_fe');
		$data['recipe']=$this->fetch_fe->fetch_fe_recipe();
		$data['popularpost']=$this->fetch_fe->fetch_fe_popular_pst();
		$this->load->view('theme/recipe', $data);
	}
	public function viewviewpage1($id)
	{  
		$this->load->model('fetch_fe');
		$data['viewviewpage1']=$this->fetch_fe->view_viewpage1($id);
	
		$this->load->view('theme/viewpage1',$data);
	}
	

	public function dessertrecipe()
	{
		$this->load->model('fetch_fe');
		$data['dessertrecipe']=$this->fetch_fe->fetch_fe_dessertrecipe();
		$this->load->view('theme/dessertrecipe', $data);
	}
	public function viewviewpage2($id)
	{  
		$this->load->model('fetch_fe');
		$data['viewviewpage2']=$this->fetch_fe->view_viewpage2($id);
	
		$this->load->view('theme/viewpage2',$data);
	}
	
	public function relatedpage()
	{
		$this->load->model('fetch_fe');
		$data['relatedpage']=$this->fetch_fe->fetch_fe_relatedpage();
		$this->load->view('theme/relatedpage', $data);
	}
	public function viewviewpage3($id)
	{  
		$this->load->model('fetch_fe');
		$data['viewviewpage3']=$this->fetch_fe->view_viewpage3($id);
	
		$this->load->view('theme/viewpage3',$data);
	}

	public function admin()
	{
		$this->load->view('theme/admin/admin');
	}
	public function aboutsinglepage()
	{
		$this->load->view('theme/admin/aboutsinglepage');
	}
	public function aboutuspage()
	{
		$this->load->view('theme/admin/aboutuspage');
	}
	public function addpost()
	{
		$this->load->view('theme/admin/addpost');
	}
	public function contactpage()
	{
		$this->load->model('fetch_fe');
		$data['fetchmessage']=$this->fetch_fe->fetch_message();
		$this->load->view('theme/admin/contactpage');
	}
	public function dessert()
	{
		$this->load->view('theme/admin/dessert');
	}
	public function editpost()
	{
		$this->load->view('theme/admin/editpost');
	}
	public function maincourse()
	{
		$this->load->view('theme/admin/maincourse');
	}
	public function recipefooter()
	{
		$this->load->view('theme/admin/recipefooter');
	}
	public function recipeindex()
	{
		$this->load->view('theme/admin/recipeindex');
	}
	public function relatedpost()
	{
		$this->load->view('theme/admin/relatedpost');
	}
	public function teamsection()
	{
		$this->load->view('theme/admin/teamsection');
	}
	public function savemesg()
	{
		$this->load->model('save');
		$this->save->save_message();
		redirect('http://localhost/codeigniter/contact');
		
	
	}




	public function like_recipe($id,$like)
	{  
		$this->load->model('save');
		$this->save->likerecipe($id,$like);
	
		redirect('http://localhost/codeigniter/blog/viewviewpage1/'.$id);
	}
	public function saveauthor()
	{
		$this->load->model('save');
		$this->save->save_author();
		redirect('http://localhost/codeigniter/loginauthor');
	
	}

	public function singup()
	{
		$this->load->model('fetch_fe');
		$data['fetchheader']=$this->fetch_fe->fetch_fe_header();
		$this->load->view('theme/singup',$data);
		
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
	public function __construct(){
		parent::__construct();
	if(!$this->session->userdata('username')){
			redirect('loginauthor');
	}
	}
	

	public function index($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/codeigniter/user/index';
		$this->load->model('fetch_author');
		$config['total_rows'] =$this->fetch_author->count_maincourse();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchmain']=$this->fetch_author->fetch_main($config['per_page'],$offset);
		$data['fetchauthor']=$this->fetch_author->fetch_user();; 
		$this->load->view('theme/author/maincourse',$data);
	}

	


	
	public function saveaddmaincourse()
	{
		
		$this->load->model('save');
		$this->save->save_addmaincourse_ah();
		redirect('http://localhost/codeigniter/user');
		
	}

	/**edit post */
	public function editmaincourse($id)
	{
		$this->load->model('fetch_author');
		$data['editmaincourse']=$this->fetch_author->editmaincourse($id);
		$this->load->view('theme/Author/edit_maincourse',$data);
	}
	/**update post */
	public function updatepost($id)
	{  
		$this->load->model('save');
		$this->save->updatepost($id);
		redirect('http://localhost/codeigniter/user');
	}
	/**view post */
	public function viewmaincourse($id)
	{  
		$this->load->model('fetchauthor');
		$data['viewmaincourse']=$this->fetchauthor->viewmaincourse($id);
	
		$this->load->view('theme/Author/view_maincourse',$data);
	}

/**delet post */
        public function deletemaincourse($id)
    {

	$this->load->model('save');
	$this->save->deletepost($id);
	redirect('http://localhost/codeigniter/user');
	
	}


	//**author */

	public function author()
	{   
		
		$this->load->model('fetch_author');
		$data['fetchauthor']=$this->fetch_author->fetch_authora(); 
		$this->load->view('theme/Author/author',$data);
	}




	//**editauthor */
	public function editauthor($id)
	{
		$this->load->model('fetch');
		$data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/Author/edit_author',$data);
	}
	//** */
	 
	//**delet author */
	public function deleteauthor($id)
    {

	$this->load->model('save');
	$this->save->deleteauthor($id);
	redirect('http://localhost/codeigniter/user/author');
	
    }
 
//** */
/**update author */
public function updateauthor($id)
{  
	$this->load->model('save');
	$this->save->updateauthor($id);
	redirect('http://localhost/codeigniter/user/author');
}

//** */
//**view author */
public function viewauthor($id)
{  
	$this->load->model('fetch');
	$data['viewauthor']=$this->fetch->viewauthor($id);

	$this->load->view('theme/Author/view_author',$data);
}
//**end view author */


	


	public function addpost()
	{
		$this->load->view('theme/author/addmaincourse');
	}


	//**add_author  */
	public function addauthor()
	{
		$this->load->view('theme/Author/addauthor');
	}
	//** */
	
	




	

	//**author */
	public function saveaddauthor()
	{
		
		$this->load->model('save');
		$this->save->save_addauthor();
		redirect('http://localhost/codeigniter/author');
		
	}


	//**end author/
	public function saveaboutpage()
	{
		
		$this->load->model('save');
		$this->save->save_aboutpage();
		redirect('http://localhost/codeigniter/aboutpage');
		
	}


	/**log out */
	public function logoutauthor()
		{
			
			$this->session->unset_userdata('username', 'email');
			redirect('loginauthor');
		
	    }




	}
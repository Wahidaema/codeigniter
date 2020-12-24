<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('login');
		}
	}

	public function index($offset=0)
	{
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/index/');
		$this->load->model('fetch');
        $config['total_rows'] = $this->fetch->count_hdr();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchhdr']=$this->fetch->fetch_hdr($config['per_page'],$offset);
		$this->load->view('theme/admin/admin',$data);
	}
	public function addheader()
	{
		$this->load->view('theme/admin/addheader');
	}
	public function edithdr($id)
	{
		$this->load->model('fetch');
		$data['edithdr']=$this->fetch->edithdr($id);
		$this->load->view('theme/admin/editheader',$data);
	}
	public function updateheader($id)
	{
		$this->load->model('save');
		$this->save->updatehdr($id);
		redirect('http://localhost/codeigniter/admin');
	}
	public function deleteheader($id)
	{
		$this->load->model('save');
		$this->save->deletehdr($id);
		redirect('http://localhost/codeigniter/admin');
	}

	public function viewhdr($id)
	{   
		$this->load->model('fetch');
		$data['viewhdr']=$this->fetch->viewhdr($id);
		$this->load->view('theme/admin/viewheader',$data);
	}





	public function post($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = 'First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
		$config['base_url'] =site_url('admin/post/');
		$this->load->model('fetch');
        $config['total_rows'] = $this->fetch->count_post();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchpost']=$this->fetch->fetch_post($config['per_page'],$offset);
		$this->load->view('theme/admin/post',$data);
	}
	public function addpost()
	{
		$this->load->view('theme/admin/addpost');
	}
	public function editpost($id)
	{
		$this->load->model('fetch');
		$data['editpost']=$this->fetch->editpost($id);
		$this->load->view('theme/admin/editpost',$data);
	}
	public function updatepost($id)
	{
		$this->load->model('save');
		$this->save->updatepost($id);
		redirect('http://localhost/codeigniter/post');
	}
	public function deletepost($id)
	{
		$this->load->model('save');
		$this->save->deletepost($id);
		redirect('http://localhost/codeigniter/post');
	}
	public function viewpost($id)
	{   
		$this->load->model('fetch');
		$data['viewpost']=$this->fetch->viewpost($id);
		$this->load->view('theme/admin/viewpost',$data);
	}






	public function aboutsinglepage($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/aboutsinglepage/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_aboutsingle();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchaboutsingle']=$this->fetch->fetch_aboutsingle($config['per_page'],$offset);
		$this->load->view('theme/admin/aboutsinglepage',$data);
	}
	public function addaboutsinglepage()
	{
		$this->load->view('theme/admin/addaboutsinglepage');
	}
	public function editaboutsingle($id)
	{
		$this->load->model('fetch');
		$data['editaboutsingle']=$this->fetch->editaboutsingle($id);
		$this->load->view('theme/admin/editaboutsinglepage',$data);
	}
	public function updateaboutsinglepage($id)
	{
		$this->load->model('save');
		$this->save->updateaboutsingle($id);
		redirect('http://localhost/codeigniter/aboutsinglepage');
	}
	public function deleteaboutsinglepage($id)
	{
		$this->load->model('save');
		$this->save->deleteaboutsingle($id);
		redirect('http://localhost/codeigniter/aboutsinglepage');
	}
	public function viewaboutsingle($id)
	{   
		$this->load->model('fetch');
		$data['viewaboutsingle']=$this->fetch->viewaboutsingle($id);
		$this->load->view('theme/admin/viewaboutsinglepage',$data);
	}





	public function aboutuspage($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/aboutuspage/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_aboutus();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchaboutus']=$this->fetch->fetch_aboutus($config['per_page'],$offset);
		$this->load->view('theme/admin/aboutuspage',$data);
	}
	public function addaboutuspage()
	{
		$this->load->view('theme/admin/addaboutuspage');
	}
	public function editaboutus($id)
	{   
		$this->load->model('fetch');
		$data['editaboutus']=$this->fetch->editaboutus($id);
		$this->load->view('theme/admin/editaboutuspage',$data);
	}
	public function updateaboutuspage($id)
	{   
		$this->load->model('save');
		$this->save->updateaboutus($id);
		redirect('http://localhost/codeigniter/aboutuspage');
	}
	public function deleteaboutuspage($id)
	{   
		$this->load->model('save');
		$this->save->deleteaboutus($id);
		redirect('http://localhost/codeigniter/aboutuspage');
	}
	public function viewaboutus($id)
	{   
		$this->load->model('fetch');
		$data['viewaboutus']=$this->fetch->viewaboutus($id);
		$this->load->view('theme/admin/viewaboutuspage',$data);
	}




	public function contactpage($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/contactpage/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_contact();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchcontact']=$this->fetch->fetch_contact($config['per_page'],$offset);
		$this->load->view('theme/admin/contactpage',$data);
	}
	public function addcontactpage()
	{
		$this->load->view('theme/admin/addcontactpage');
	}
	public function editcontact($id)
	{   
		$this->load->model('fetch');
		$data['editcontact']=$this->fetch->editcontact($id);
		$this->load->view('theme/admin/editcontactpage',$data);
	}
	public function updatecontactpage($id)
	{   
		$this->load->model('save');
		$this->save->updatecontact($id);
		redirect('http://localhost/codeigniter/contactpage');
	}
	public function deletecontactpage($id)
	{   
		$this->load->model('save');
		$this->save->deletecontact($id);
		redirect('http://localhost/codeigniter/contactpage');
	}
	public function viewcontact($id)
	{   
		$this->load->model('fetch');
		$data['viewcontact']=$this->fetch->viewcontact($id);
		$this->load->view('theme/admin/viewcontactpage',$data);
	}
	  



	public function dessert($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = 'First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
		$config['base_url'] =site_url('admin/dessert/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_dessert();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchdessert']=$this->fetch->fetch_dessert($config['per_page'],$offset);
		$this->load->view('theme/admin/dessert',$data);
	}
	public function adddessert()
	{
		$this->load->view('theme/admin/adddessert');
	}
	public function editdessert($id)
	{   
		$this->load->model('fetch');
		$data['editdessert']=$this->fetch->editdessert($id);
		$this->load->view('theme/admin/editdessert',$data);
	}
	public function updatedessert($id)
	{   
		$this->load->model('save');
		$this->save->updatedessert($id);
		redirect('http://localhost/codeigniter/dessert');
	}
	public function deletedessert($id)
	{   
		$this->load->model('save');
		$this->save->deletedessert($id);
		redirect('http://localhost/codeigniter/dessert');
	}
	public function viewdessert($id)
	{   
		$this->load->model('fetch');
		$data['viewdessert']=$this->fetch->viewdessert($id);
		$this->load->view('theme/admin/viewdessert',$data);
	}





	public function maincourse($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = 'First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
		$config['base_url'] =site_url('admin/maincourse/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_maincourse();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchmain']=$this->fetch->fetch_main($config['per_page'],$offset);
		$this->load->view('theme/admin/maincourse',$data);
	}
	public function addmaincourse()
	{
		$this->load->view('theme/admin/addmaincourse');
	}
	public function editmaincourse($id)
	{   
		$this->load->model('fetch');
		$data['editmaincourse']=$this->fetch->editmaincourse($id);
		$this->load->view('theme/admin/editmaincourse',$data);
	}
	public function updatemain($id)
	{   
		$this->load->model('save');
		$this->save->updatemain($id);
		redirect('http://localhost/codeigniter/maincourse');
	}
	public function deletemain($id)
	{   
		$this->load->model('save');
		$this->save->deletemain($id);
		redirect('http://localhost/codeigniter/maincourse');
	}
	public function viewmaincourse($id)
	{   
		$this->load->model('fetch');
		$data['viewmaincourse']=$this->fetch->viewmaincourse($id);
		$this->load->view('theme/admin/viewmaincourse',$data);
	}





	public function recipefooter($offset=0)
	{
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/recipefooter/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_recipefooter();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchrecipefooter']=$this->fetch->fetch_recipefooter($config['per_page'],$offset);
		$this->load->view('theme/admin/recipefooter',$data);
	}
	public function addrecipefooter()
	{
		$this->load->view('theme/admin/addrecipefooter');
	}
	public function editrecipefooter($id)
	{   
		$this->load->model('fetch');
		$data['editrecipefooter']=$this->fetch->editrecipefooter($id);
		$this->load->view('theme/admin/editrecipefooter',$data);
	}
	public function updaterecipefooter($id)
	{   
		$this->load->model('save');
		$this->save->updaterecipefooter($id);
		redirect('http://localhost/codeigniter/recipefooter');
	}
	public function deleterecipefooter($id)
	{   
		$this->load->model('save');
		$this->save->deleterecipefooter($id);
		redirect('http://localhost/codeigniter/recipefooter');
	}
	public function viewrecipefooter($id)
	{   
		$this->load->model('fetch');
		$data['viewrecipefooter']=$this->fetch->viewrecipefooter($id);
		$this->load->view('theme/admin/viewrecipefooter',$data);
	}





	public function recipeindex($offset=0)
	{
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/recipeindex/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_recipe();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchrecipe']=$this->fetch->fetch_recipe($config['per_page'],$offset);
		$this->load->view('theme/admin/recipeindex',$data);
	}
	public function addrecipeindex()
	{
		$this->load->view('theme/admin/addrecipeindex');
	}
	public function editrecipe($id)
	{   
		$this->load->model('fetch');
		$data['editrecipe']=$this->fetch->editrecipe($id);
		$this->load->view('theme/admin/editrecipeindex',$data);
	}
	public function updaterecipeindex($id)
	{   
		$this->load->model('save');
		$this->save->updaterecipeindex($id);
		redirect('http://localhost/codeigniter/recipeindex');
	}
	public function deleterecipeindex($id)
	{   
		$this->load->model('save');
		$this->save->deleterecipeindex($id);
		redirect('http://localhost/codeigniter/recipeindex');
	}
	public function viewrecipe($id)
	{   
		$this->load->model('fetch');
		$data['viewrecipe']=$this->fetch->viewrecipe($id);
		$this->load->view('theme/admin/viewrecipeindex',$data);
	}
	








	public function teamsection($offset=0)
	{
		$this->load->library('pagination');
		$config['base_url'] =site_url('admin/teamsection/');
		$this->load->model('fetch');
		$config['total_rows'] = $this->fetch->count_team();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchteam']=$this->fetch->fetch_team($config['per_page'],$offset);
		$this->load->view('theme/admin/teamsection',$data);
	}
	public function addteamsection()
	{
		$this->load->view('theme/admin/addteamsection');
	}
	public function editteam($id)
	{   
		$this->load->model('fetch');
		$data['editteam']=$this->fetch->editteam($id);
		$this->load->view('theme/admin/editteamsection',$data);
	}
	public function updateteamsection($id)
	{   
		$this->load->model('save');
		$this->save->updateteamsection($id);
		redirect('http://localhost/codeigniter/teamsection');
	}
	public function deleteteamsection($id)
	{   
		$this->load->model('save');
		$this->save->deleteteamsection($id);
		redirect('http://localhost/codeigniter/teamsection');
	}
	public function viewteam($id)
	{   
		$this->load->model('fetch');
		$data['viewteam']=$this->fetch->viewteam($id);
		$this->load->view('theme/admin/viewteamsection',$data);
	}




	public function savehdr()
	{
		$this->load->model('save');
		$this->save->save_header();
		redirect('http://localhost/codeigniter/admin');
	
	}
	public function saveaboutsingle()
	{
		$this->load->model('save');
		$this->save->save_aboutsingle();
		redirect('http://localhost/codeigniter/aboutsinglepage');
	
	}
	public function saveaboutus()
	{
		$this->load->model('save');
		$this->save->save_aboutus();
		redirect('http://localhost/codeigniter/aboutuspage');
	
	}
	public function savepost()
	{
		$this->load->model('save');
		$this->save->save_post();
		redirect('http://localhost/codeigniter/addpost');
	
	}
	public function savecontact()
	{
		$this->load->model('save');
		$this->save->save_contact();
		redirect('http://localhost/codeigniter/contactpage');
	
	}
	public function savedessert()
	{
		$this->load->model('save');
		$this->save->save_dessert();
		redirect('http://localhost/codeigniter/dessert');
	
	}
	public function savemain()
	{
		$this->load->model('save');
		$this->save->save_main();
		redirect('http://localhost/codeigniter/maincourse');
	
	}
	public function saverecipefooter()
	{
		$this->load->model('save');
		$this->save->save_recipefooter();
		redirect('http://localhost/codeigniter/recipefooter');
	
	}
	public function saverecipeindex()
	{
		$this->load->model('save');
		$this->save->save_recipeindex();
		redirect('http://localhost/codeigniter/recipeindex');
	
	}
	public function saverelated()
	{
		$this->load->model('save');
		$this->save->save_related();
		redirect('http://localhost/codeigniter/relatedpost');
	
	}
    public function saveteam()
	{
		$this->load->model('save');
		$this->save->save_team();
		redirect('http://localhost/codeigniter/teamsection');
	
	} 

	public function message($offset=0)
	{
		$this->load->library('pagination');
		$config['full_tag_open'] = '<ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = 'First';
		$config['last_link'] = 'last';
		$config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
		$config['base_url'] =site_url('admin/message/');
		$this->load->model('fetch');
        $config['total_rows'] = $this->fetch->count_message();
        $config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['fetchmessage']=$this->fetch->fetch_message($config['per_page'],$offset);
		$this->load->view('theme/admin/message',$data);
	}
	public function deletemessage($id)
	{   
		$this->load->model('save');
		$this->save->deletemessage($id);
		redirect('http://localhost/codeigniter/message');
	}

	public function viewmessage($id)
	{   
		$this->load->model('fetch');
		$data['viewmessage']=$this->fetch->viewmessage($id);
		$this->load->view('theme/admin/viewmessage',$data);
	}


	public function author($offset=0)
	{   
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/codeigniter/author/';
		$this->load->model('fetch');
		$config['total_rows'] =$this->fetch->count_author();
        $config['per_page'] = 6;
		$this->pagination->initialize($config);
		$data['fetchauthor']=$this->fetch->fetch_author($config['per_page'],$offset); 
		$this->load->view('theme/admin/author',$data);
	}




	//**editauthor */
	public function editauthor($id)
	{
		$this->load->model('fetch');
		$data['editauthor']=$this->fetch->editauthor($id);
		$this->load->view('theme/admin/edit_author',$data);
	}
	//** */
	 
	//**delet author */
	public function deleteauthor($id)
    {

	$this->load->model('save');
	$this->save->deleteauthor($id);
	redirect('http://localhost/codeigniter/author');
	
    }
 
//** */
/**update author */
public function updateauthor($id)
{  
	$this->load->model('save');
	$this->save->updateauthor($id);
	redirect('http://localhost/codeigniter/author');
}

//** */
//**view author */
public function viewauthor($id)
{  
	$this->load->model('fetch');
	$data['viewauthor']=$this->fetch->viewauthor($id);

	$this->load->view('theme/admin/view_author',$data);
}
	//**add_author  */
	public function addauthor()
	{
		$this->load->view('theme/admin/addauthor');
	}

	//**author */

	public function approveauthor($id)
	{
		
		$this->load->model('save');
		$this->save->approve_author($id);
		redirect('http://localhost/codeigniter/author');
		
	}
	
	public function saveaddauthor()
	{
		
		$this->load->model('save');
		$this->save->save_addauthor();
		redirect('http://localhost/codeigniter/author');
		
	}



	public function logout()
	{
		$this->session->unset_userdata('user','1');
		redirect('admin');
	
		
	}
	

	
	
}

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {




	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                // $this->load->library('session');
        $this->load->helper('url','form');

        $this->load->model('StudyModel');

               //   $user_type=$this->session->userdata('user_type');

               // if($user_type !='AD')
               //  {
               //      redirect('/login/');
               //  }

 
            
}

	public function index()



	{

    
		$data['view_name']='about/index';
		$this->load->view('site', $data);
	}


  public function register()



  {

    
    $data['view_name']='user/register_form';
    $this->load->view('site', $data);
  }


  public function login()



  {

    
    $data['view_name']='user/login';
    $this->load->view('site', $data);
  }


  public function Notice()



  {

    
    $data['view_name']='about/notice';
    $this->load->view('site', $data);
  }


  public function Contact()
  {

    $data['view_name']='about/contact';
    $this->load->view('site', $data);
  }

 



}
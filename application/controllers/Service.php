 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {




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






public function CountryList()



  {

    $data['country']=$this->StudyModel->getCountries();
    $data['view_name']='country/index';
    $this->load->view('site', $data);
  }


public function InstituteList()



  {

    $data['institute']=$this->StudyModel->getInstitute();
    $data['view_name']='university/index';
    $this->load->view('site', $data);
  }





}
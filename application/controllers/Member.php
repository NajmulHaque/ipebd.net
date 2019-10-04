<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {




	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();


                $this->load->library('session');
                 $this->load->helper('url','form');

                $this->load->model('MemberModel');

$this->session->userdata('user_id');

               // if($user_type !='AD')
               //  {
               //      redirect('/login/');
               //  }

             
}
    public function index(){
    //get from session if you've set userid on login, like
   
   



    $data['view_name']='memberAccount/main';
        $this->load->view('structure', $data);
         
}


 public function myaccount(){
    //get from session if you've set userid on login, like
   
     $user_id = $this->session->userdata("user_id");
     
    $data["account"] = $this->MemberModel->memberDetails($user_id);



    $data['view_name']='memberAccount/my_account';
        $this->load->view('structure', $data);
         
}



 public function remove($user_id=0)
        {
         
            $this->MemberModel->removeMember($user_id);
            redirect('/Welcome/');
        }


}
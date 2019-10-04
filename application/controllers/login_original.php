<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {




	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->library('session');
                 $this->load->helper('url','form');

                $this->load->model('MemberModel');

               //   $user_type=$this->session->userdata('user_type');

               // if($user_type !='AD')
               //  {
               //      redirect('/login/');
               //  }

 
            
}

	public function index()
	{
		$data['view_name']='login/login_form';
		$this->load->view('landing', $data);
	}

   public function email_check($user_email)
        {

                if ($this->MemberModel->invalidEmail($user_email))
                {
                        $this->form_validation->set_message('email_check', 'The {field} You provided is wrong');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

	public function auth()
	{
		$this->load->model('MemberModel');
		
		//validation start

               

                $this->form_validation->set_rules('email', 'Email', 'required|callback_email_check');
                $this->form_validation->set_rules('password', 'Password', 'required');

                $this->form_validation->set_error_delimiters('<div style="color:red; font-size:.9em;background-color:#eae678;padding:4px; border-radius:5px;margin-bottom:3px;">', '</div>');

                if ($this->form_validation->run() == FALSE)
                {
                       $data['view_name']='login/login_form';
						$this->load->view('structure', $data);
                }
        else
        {
        	$member=$this->MemberModel->authenticateMember();
         if($member)
		{
			$newdata = array(
				        'email'     => $member['email'],
				        'is_logged_in' => TRUE,
				        'user_id'=>$member['user_id'],
				        'user_type'=>$member['user_type'],
				);

			$this->session->set_userdata($newdata);
			if($member['user_type']=='AD')
			{
				redirect('/Test/');
			}
			// else if($member['member_type']=='SP')
			// {
			// 	redirect('/Sepecialist/');
			// }
			else
				redirect('/Login/');
			

		}
		else
		{
			redirect('/Login/');
		}
                }



		//end of validaton
		

	}
	public function logout()
	{
		
		$this->session->sess_destroy();

		redirect('/login/');
	}


	 public function d(){
    //get from session if you've set userid on login, like
   
    $user_id = $this->session->userdata("user_id");
    $data["account"] = $this->MemberModel->memberDetails($user_id);



    $data['view_name']='memberAccount/my_account';
        $this->load->view('structure', $data);
         
}

}


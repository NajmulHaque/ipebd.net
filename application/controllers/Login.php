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





// ========================== User login Starts 



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


   public function pass_check($user_pass)
        {

                if ($this->MemberModel->invalidPass($user_pass))
                {
                        $this->form_validation->set_message('pass_check', 'The {field} You provided is wrong');
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
                $this->form_validation->set_rules('password', 'Password', 'required|callback_pass_check');

                $this->form_validation->set_error_delimiters('<div style="color:red; font-size:.9em;background-color:#eae678;padding:4px; border-radius:5px;margin-bottom:3px;">', '</div>');

                if ($this->form_validation->run() == FALSE)
                {
                       $data['view_name']='login/login_form';
						$this->load->view('landing', $data);
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









// ========================== User login ends 




// Password changePass
      public function ChangePassword()
  {
    
    $user_id = $this->session->userdata("user_id");
    $data["user_info"] = $this->MemberModel->CheckAllUser($user_id);
    $data['view_name']='login/password_main_change_form';
    $this->load->view('landing', $data);
  }



public function UpdateMainPassword()
  {

    $user_id = $this->session->userdata("user_id");


$this->form_validation->set_rules('password', 'Password', 'trim|required');
$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

if ($this->form_validation->run() == FALSE)
                {
                       $data["user_info"] = $this->MemberModel->CheckAllUser($user_id);
    $data['view_name']='login/password_main_change_form';
    $this->load->view('landing', $data);
                }
        else
        {




     if($this->MemberModel->changeMPass($user_id))
                {
                    

                  // $data['msg']='Password Updated Sucessfully!!.';

                  echo "Login sucessfull";
                  
                  
                }
                else
                {
                        $data['view_name']='failure_view';

                         $this->load->view('landing', $data);
                }

            }
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


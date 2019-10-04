<?php

class Forget extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->load->library('session');
              

            $this->load->model('MemberModel');
      }

// ==================================== Send temporary pass word to email start

 public function index()
      {
       
// echo "Hello" ; die;

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');
 
       if ($this->form_validation->run() == FALSE)
      {
            
             $data['view_name']='forgot/email_check';
             $this->load->view('landing', $data);
       }
       else
      {

            $email= $this->input->post('email');

$this->load->helper('string');
$rs= random_string('alnum', 12);

$data = array(
               'rs' => $rs
            );
$this->db->where('email', $email);
$this->db->update('user', $data);

//now we will send an email

  $config['protocol'] = 'smtp';
              $config['smtp_host'] = 'mail.alivigroup.com';
             $config['smtp_port'] = 25;
              $config['smtp_user'] = 'mralam@alivigroup.com';
              $config['smtp_pass'] = 'l$d4)&V$D4Hw';
               $config['charset']    = 'utf-8';
  
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not  
         $this->email->initialize($config);
       
          
              $this->load->library('email', $config);

$this->email->from('mralam@alivigroup.com', 'Tanvir');
$this->email->to($email);

$this->email->subject('Get your forgotten Password');

$this->email->message('You have requested the new password, Here is you new password: &nbsp; &nbsp; <h3 style="color: red;"> ' .$rs . 

' </h3> Please click below link to login with your temporary password.  

<p> <a href="http://test.alivigroup.com/User/Forgot/TeamPass" target="_blank"> Click Here </a> </p> '


  );

$this->email->send();
// echo "Please check your email address.";

 
       $data['view_name']='forgot/success_email';
      $this->load->view('landing', $data);

}
 }

public function email_check($str)
      {
$query = $this->db->get_where('user', array('email' => $str), 1);
 
      if ($query->num_rows()== 1)
      {
             return true;
            }
            else
            {    
             $this->form_validation->set_message('email_check', 'This Email does not exist.');
       return false;

      }
   }

// ========================================== Send temporary password to email ends
 


// ============================= Login with temporary password start




public function TempPass()
  {
    $data['view_name']='forgot/temporary_password';
    $this->load->view('landing', $data);
  }



//this email_check2 is for forget pass (login with temp pass)  
public function email_check2($user_email) 
        {

                if ($this->MemberModel->invalidEmail2($user_email))
                {
                        $this->form_validation->set_message('email_check', 'The {field} You provided is wrong');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }



   public function auth2()  //this auth2 is for forget pass (login with temp pass)
  {
    $this->load->model('MemberModel');
    
    //validation start

               

                $this->form_validation->set_rules('email', 'Email', 'required|callback_email_check2');
                $this->form_validation->set_rules('rs', 'rs', 'required');

                $this->form_validation->set_error_delimiters('<div style="color:red; font-size:.9em;background-color:#eae678;padding:4px; border-radius:5px;margin-bottom:3px;">', '</div>');

                if ($this->form_validation->run() == FALSE)
                {
                      echo validation_errors();
                }
        else
        {
          $member=$this->MemberModel->authenticateMember2(); //this authenticateMember2 is for forget pass (login with temp pass)
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
        redirect('/User/Forget/ChangeTempPass/');

                  
      }
      // else if($member['member_type']=='SP')
      // {
      //  redirect('/Sepecialist/');
      // }
      else
       echo "wrong1";
      

    }
    else
    {
      echo "wrong2";
    }
                }



    //end of validaton
    

  }



// =========================== Change temporary Password Start

  public function ChangeTempPass()
  {
    
    $user_id = $this->session->userdata("user_id");
    $data["user_info"] = $this->MemberModel->CheckUser($user_id);
    $data['view_name']='login/password_change_form';
    $this->load->view('landing', $data);
  }



public function UpdatePassword()
  {

    $user_id = $this->session->userdata("user_id");
     if($this->MemberModel->changePass($user_id))
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


// =========================== Change temporary Password  End






}


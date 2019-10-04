<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {




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

    
		$data['view_name']='front/main_page';
		$this->load->view('site', $data);
	}




  // public function CountryList()



  // {

  //   $data['country']=$this->StudyModel->getCountries();
  //   $data['view_name']='country/index';
  //   $this->load->view('site', $data);
  // }



  // public function allCountries()



  // {

  //   $data['country']=$this->StudyModel->getCountries();
  //   $data['view_name']='homepage';
  //   $this->load->view('landing', $data);
  // }



  public function addCountry()
 {

   

    $data['msg']="Welcome!!";
    $data['view_name']='country/add_Country';
    $this->load->view('landing', $data);
  }





     public function saveCountry()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 1024;
                $config['encrypt_name']         =TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        echo var_dump($error ); die;
                }
                else
                {
                
                    $file_data = array('upload_data' => $this->upload->data());

                if($this->StudyModel->saveCountry($file_data))
                {

                    $data['msg']="Added Sucessfully, add more!!";
                    $data['view_name']='country/add_Country';
                    $this->load->view('landing', $data);
                }
                else
                {
                       echo "Wrong";
                }
            }

        }
        


                


 


  public function University_list($country_code='0')



  {

                $data['uni_list']=$this->StudyModel->getUniList($country_code);
                $data['uni_list1']=$this->StudyModel->getUniList1($country_code);

                $data['view_name']='country/all_uni_list';

                $this->load->view('site', $data);


  }

  public function University_Details($uni_id='0')



  {

                $data['uni_details']=$this->StudyModel->getUniDetails($uni_id);

                $data['view_name']='country/uni_details_page';

                $this->load->view('site', $data);

                // echo var_dump($data['uni_details'] ); die;


  }
  

  public function addUniversity()
 {

    $data['msg']="Welcome";
    $data['country2']=$this->StudyModel->getCountries2();
    $data['view_name']='country/add_university_form';
    $this->load->view('landing', $data);
  }


     public function saveUniversity()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png|gif|jpeg';
                $config['max_size']             = 2024;
                $config['encrypt_name']         =TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        echo var_dump($error ); die;
                }
                else
                {
                
                    $file_data = array('upload_data' => $this->upload->data());

                if($this->StudyModel->saveUniversity($file_data))
                {
                    
                     $data['msg']="University added successfully. Thank You";
                    $data['country2']=$this->StudyModel->getCountries2();
                    $data['view_name']='country/add_university_form';
                    $this->load->view('landing', $data);
                }
                else
                {
                       echo "Wrong";
                }
            }

        }
      



  public function appoinment()
 {

   

  
    $data['view_name']='about/appoinment';
    $this->load->view('site', $data);
  }





}
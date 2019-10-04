 

 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp extends CI_Controller {
	 public function __construct()
        {
                parent::__construct();
                
                 $this->load->helper('url','form');

                $this->load->model('TempModel');



                // $this->load->model('');

	}

	public function save()
	{
		  $this->load->model('TempModel');

              if($this->TempModel->TempModel_data()){
              	  $data['view_name']='success_view';
              	  $this->load->view('site',$data);
              }
              else{
              	$data['view_name']='faiiure_view';
              	$this->load->view('site',$data);
              }


	}


   public function faq()
  {

    
    $data['view_name']='Temp/FAQ';
    $this->load->view('site', $data);
  }



	public function contact()
	{
		  $this->load->model('TempModel');

              if($this->TempModel->contact_form_data()){
              	  $data['view_name']='success_view';
              	  $this->load->view('site',$data);
              }
              else{
              	$data['view_name']='faiiure_view';
              	$this->load->view('site',$data);
              }


	}



	public function register()
	{
		  $this->load->model('TempModel');

              if($this->TempModel->register_data()){
              	  $data['view_name']='success_view';
              	  $this->load->view('site',$data);
              }
              else{
              	$data['view_name']='faiiure_view';
              	$this->load->view('site',$data);
              }


	}


    public function news_event()

  {

    $data['event']=$this->TempModel->getnews_events();
    $data['view_name']='Temp/news_event';
    $this->load->view('site', $data);
  }


   public function testimonial()

  {

    $data['test']=$this->TempModel->get_testimonial();
    $data['view_name']='Temp/testimonial';
    $this->load->view('site', $data);
  }   



  public function notice()

  {

    $data['notice']=$this->TempModel->get_notice();
    $data['view_name']='Temp/notice';
    $this->load->view('site', $data);
  }
  

  public function newsletter()

  {

    $data['news']=$this->TempModel->get_newsletter();
    $data['view_name']='Temp/newsletter';
    $this->load->view('site', $data);
  }



}


?>

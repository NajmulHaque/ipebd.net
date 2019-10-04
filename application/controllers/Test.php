<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {




	 public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->library('session');
                 $this->load->helper('url','form');

                $this->load->model('MemberModel');

                 $user_type=$this->session->userdata('user_type');

               if($user_type !='AD')
                {
                    redirect('/login/');
                }

// if($this->session->userdata("user_type") != 'AD') {
//         redirect("login");  

//     }

                

        }

public function index()
    {
        $data['view_name']='test/homepage';
        $this->load->view('structure', $data);
    }


	public function Add()
	{
		$data['view_name']='test/add_deposit';
		$this->load->view('structure', $data);
	}

public function save()
	{
		 if($this->MemberModel->adddeposit())
                {
                    $data['view_name']='success_view';

                    $this->load->view('structure', $data);
                }
                else
                {
                        $data['view_name']='failure_view';

                         $this->load->view('structure', $data);
                }
	}


public function d_list()
        {
                
                $data['deposit_list']=$this->MemberModel->getdeposites();

                $data['view_name']='test/deposit_list_view';

                $this->load->view('structure', $data);
        }



public function filter()
        {
                $keyword    =   $this->input->post('keyword');
                $data['deposit_list']=$this->MemberModel->getfilterdeposites($keyword);

                $data['view_name']='test/deposit_list_view';

                $this->load->view('structure', $data);
        }
public function filterex()
        {
                $keyword    =   $this->input->post('keyword');
                $data['expense_list']=$this->MemberModel->getfilterexpense($keyword);

                $data['view_name']='test/expense_list';

                $this->load->view('structure', $data);
        }


public function Addexpense()
    {
        $data['view_name']='test/add_expense';
        $this->load->view('structure', $data);
    }

public function saveEx()
    {
         if($this->MemberModel->addexpense())
                {
                    $data['view_name']='success_view';

                    $this->load->view('structure', $data);
                }
                else
                {
                        $data['view_name']='failure_view';

                         $this->load->view('structure', $data);
                }
    }


public function e_list()
        {
                
                $data['expense_list']=$this->MemberModel->getexpenselist();

                $data['view_name']='test/expense_list';

                $this->load->view('structure', $data);
        }





public function pr()
        {
                
                $data['expens_list']=$this->MemberModel->getprofit();

                $data['view_name']='test/profit_loss';

                $this->load->view('structure', $data);
        }





















public function ebl()
    {
        $data['balance']=$this->MemberModel->get_ebl_balance();
        $data['view_name']='test/ebl_home';
        $this->load->view('structure', $data);
    }


public function Add_ebl()
    {
        $data['view_name']='test/ebl/ebl_add_deposit';
        $this->load->view('structure', $data);
    }




public function add_ebl_ex()
    {
        $data['view_name']='test/ebl/ebl_add_expense';
        $this->load->view('structure', $data);
    }



public function save_ebl_deposit()
    {
         if($this->MemberModel->ebl_adddeposit())
                {
                    $data['view_name']='success_view';

                    $this->load->view('structure', $data);
                }
                else
                {
                        $data['view_name']='failure_view';

                         $this->load->view('structure', $data);
                }
    }





public function save_ebl_expense()
    {
         if($this->MemberModel->ebl_addexpense())
                {
                    $data['view_name']='success_view';

                    $this->load->view('structure', $data);
                }
                else
                {
                        $data['view_name']='failure_view';

                         $this->load->view('structure', $data);
                }
    }









public function ebl_d_list()
        {
                
                $data['ebl_list']=$this->MemberModel->get_ebl_depositlist();

                $data['view_name']='test/ebl/ebl_deposit_list';

                $this->load->view('structure', $data);
        }




public function ebl_e_list()
        {
                
                $data['ebl_list']=$this->MemberModel->get_ebl_expenselist();

                $data['view_name']='test/ebl/ebl_expense_list';

                $this->load->view('structure', $data);
        }










}


<?php
class StudyModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }



        public function getCountries()
        {
                return $this->db->select('*')
                                ->from('countries')
                                ->order_by("country_name", "asc")
                              
                               
                                
                                ->get()->result_array();
        }



        public function getInstitute()
        {
                return $this->db->select('*')
                                ->from('university')
                                ->order_by("uni_name", "asc")
                              
                               
                                
                                ->get()->result_array();
        }

public function getCountries2()
        {
                return $this->db->select('*')
                                ->from('countries')
                              
                               
                                
                                ->get()->result_array();
        }

 public function saveCountry($file_data)
        {
                $data=array(


                        

                        'country_name'=>$_POST['country_name'],
                        'programs'=>$_POST['programs'],
                        'job'=>$_POST['job'],
                        'ielts'=>$_POST['ielts'],
                        'visa_rate'=>$_POST['visa_rate'],
                        'bank_loan'=>$_POST['bank_loan'],
                        'est_livingcost'=>$_POST['est_livingcost'],
                        'country_des'=>$_POST['country_des'],


                        'country_banner'=>$file_data['upload_data']['file_name'],
                        

                        );

                return $this->db->insert('countries', $data);
        }


 public function saveUniversity($file_data)
        {
        		$intake = $this->input->post('intake');
        		$prg = $this->input->post('programs');
                $data=array(
                   


                        'uni_name'=>$_POST['uni_name'],
                        'tution'=>$_POST['tution'],
                        'currency'=>$_POST['currency'],
                        'founded'=>$_POST['founded'],
                        'uni_location'=>$_POST['uni_location'],
                        'uni_desc'=>$_POST['uni_desc'],
                        'uni_weblink'=>$_POST['uni_weblink'],
                        'country_code'=>$_POST['country_code'],
                        'uni_banner'=>$file_data['upload_data']['file_name'],
                        'uni_type'=>$_POST['uni_type'],
                        'intake' => implode(",", $intake),
                        'programs' => implode(",", $prg),
                        

                        );

                return $this->db->insert('university', $data);
        }

// public function getUniList($country_code=0)
//         {
//                 $sql="SELECT un.*, cr.country_name FROM university AS un JOIN countries AS cr ON cr.country_code = un.country_code, WHERE country_code , $country_code";

//            return $this->db->query($sql)->result_array();
//         }

public function getUniList($country_code=0)
        {
                return $this->db->select('university.*, countries.country_code')
                                ->from('countries')
                                ->join('university', 'university.country_code = countries.country_code')
                                ->where('countries.country_code', $country_code)
                                ->get()->result_array();
        }

public function getUniList1($country_code=0)
        {
                return $this->db->select('university.*, countries.*')
                                ->from('countries')
                                ->join('university', 'university.country_code = countries.country_code')
                                ->where('countries.country_code', $country_code)
                                ->get()->row_array();
        }



   

public function getUniDetails($uni_id=0)
        {
                return $this->db->select('university.*, countries.country_name')
                                ->from('countries')
                                ->join('university', 'university.country_code = countries.country_code')
                                ->where('university.uni_id', $uni_id)
                                ->get()->row_array();
        }

   }     





   // $this->db->select("trn_employee.EMPLOYEE_ID,trn_employee.FIRST_NAME,trn_employee.LAST_NAME,trn_employee.EMAIL,trn_address.ADDRESS_LINE,trn_address.CITY");
//   $this->db->from('trn_employee');
//   $this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
//   $query = $this->db->get();
//   return $query->result();

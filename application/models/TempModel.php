

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TempModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function TempModel_data()

        {
               $data=array(
               	        'name'=> $_POST['name'],
                       'email'=> $_POST['email'],
                       'phone'=> $_POST['phone'],
                       'country'=> $_POST['country'],
                       'program'=> $_POST['program'],
                       'appointment_date'=> $_POST['appointment_date'],
                );
               return $this->db->insert('appointment_text', $data);

        }



        public function contact_form_data()
        {
               $data=array(
                        'name'=> $_POST['name'],
                       'email'=> $_POST['email'],
                       'telephone'=> $_POST['telephone'],
                       'message'=> $_POST['message'],
                );
               return $this->db->insert('contact_text', $data);

        }


        public function register_data()
        {
               $data=array(
                        'first_name'=> $_POST['first_name'],
                        'last_name'=> $_POST['last_name'],
                       'email'=> $_POST['email'],
                       'phone'=> $_POST['phone'],
                       'password'=> $_POST['password'],
                );
               return $this->db->insert('registration', $data);

        } 



      public function getnews_events()
        {
                return $this->db->select('*')
                                ->from('event')
                                ->order_by("event_date", "asc")
                              
                               
                                
                                ->get()->result_array();
        }      




        public function get_testimonial()
        {
                return $this->db->select('*')
                                ->from('testimonial')
                                ->order_by("name", "asc")
                              
                               
                                
                                ->get()->result_array();
        }        



        public function get_notice()
        {
                return $this->db->select('*')
                                ->from('notice')
                                ->order_by("notice_id", "asc")
                              
                               
                                
                                ->get()->result_array();
        }        



        public function get_newsletter()
        {
                return $this->db->select('*')
                                ->from('newsletter')
                                ->order_by("newsletter_id", "asc")
                              
                               
                                
                                ->get()->result_array();
        }


}
?> 
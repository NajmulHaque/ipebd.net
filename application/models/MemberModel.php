<?php
class MemberModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function invalidEmail($user_email)
        {
            $member_info=$this->db->select('*')
                     ->from('user')
                     ->where('email', $user_email)
                     ->get()->row_array();
            if($member_info)
                {return FALSE;}
            else{
                return TRUE;
            }
        }
 public function invalidPass($user_pass)
        {
            $member_info=$this->db->select('*')
                     ->from('user')
                     ->where('password', $user_pass)
                     ->get()->row_array();
            if($member_info)
                {return FALSE;}
            else{
                return TRUE;
            }
        }

        
// ============================  call back email / password verification for login ends
 public function invalidEmail2($user_email)
        {
            $member_info=$this->db->select('*')
                     ->from('user')
                     ->where('email', $user_email)
                     ->get()->row_array();
            if($member_info)
                {return FALSE;}
            else{
                return TRUE;
            }
        }


        public function authenticateMember2()
        {
            $post=$this->input->post();

            return $this->db->select('*')
                     ->from('user')
                     ->where('email', $post['email'])
                     ->where('rs', $post['rs'])
                     ->get()->row_array();
        }
       


// ================================= original
public function authenticateMember()
        {
            $post=$this->input->post();

            return $this->db->select('*')
                     ->from('user')
                     ->where('email', $post['email'])
                     ->where('password', $post['password'])
                     ->get()->row_array();
        }
       

// ======================================

        // public function removeMember($member_id)
        // {
        //     return $this->db->where('member_id', $member_id)
        //                     ->delete('members');
        // }
        public function updateMember($member_id=0){

                $data=array(
                        'last_name'=>$_POST['last_name'],

                        'first_name'=>$_POST['first_name'],

                        'mobile'=>$_POST['mobile'],

                        'address'=>$_POST['address'],

                        'email'=>$_POST['email'],


                        );


        return      $this->db->where('member_id', $member_id)
                         ->update('members', $data);
        }

        public function getMembers($member_id=0)
        {
            return 
            $this->db->select('m.*, pd.height, pd.weight, pd.blood_group, 
                pd.medical_history,ar.*')
                ->from('members AS m')
                ->join('patient_detail AS pd', 'm.member_id=pd.member_id')
                ->join('area_location AS ar','pd.area_id=ar.area_id','left')
                ->where('m.member_id', $member_id)
                ->get()->row_array();

        }
        public function registerMember($file_data)
        {
                $data=array(
                        'last_name'=>$_POST['last_name'],

                        'first_name'=>$_POST['first_name'],

                        'mobile'=>$_POST['mobile'],

                        'address'=>$_POST['address'],

                        'email'=>$_POST['email'],

                        'password'=>$_POST['password'],

                        'photo_file'=>$file_data['upload_data']['file_name'],
                        'photo_files'=>$file_data['upload_data']['file_name'],

                        );

                return $this->db->insert('members', $data);
        }



public function adddeposit()  //this section is for md test profit loss application
        {
                $data = array(
                'name' => $this->input->post('name'),
                'comments' => $this->input->post('comments'),
                
                'date' => $this->input->post('date'),
                 'deposit' => $this->input->post('deposit'),
                 'cetagory' => $this->input->post('cetagory'),
                 'ref' => $this->input->post('ref'),
                
                
            );

                return $this->db->insert('trans', $data);
        }





        public function getdeposites()
        {
                return $this->db->select('*')
                                ->from('trans')
                                ->limit('5')
                               
                                
                                ->get()->result_array();
        }
public function  getfilterdeposites($keyword)
        {
                return $this->db->select('*')
                                ->from('trans')
                                ->where('name', $keyword)
                                ->or_where('cetagory', $keyword)
                                ->get()->result_array();
        }

public function  getfilterexpense($keyword)
        {
                return $this->db->select('*')
                                ->from('expense')
                                ->where('from', $keyword)
                                ->or_where('cetagory', $keyword)
                                ->get()->result_array();
        }




public function addexpense()  //this section is for md bhai's application
        {
                $data = array(
                'name' => $this->input->post('name'),
                'comments' => $this->input->post('comments'),
                
                'date' => $this->input->post('date'),
                 'expense' => $this->input->post('expense'),
                 'cetagory' => $this->input->post('cetagory'),
                 'ref' => ''
                
                
            );

                return $this->db->insert('trans', $data);
        }





        public function getexpenselist()
        {
                return $this->db->select('*')
                                ->from('trans')
                                
                                ->get()->result_array();
        }

 public function getprofit()
        {
                    return $this->db->select('e.*')
                                ->select('d.*')
                                ->from('deposit AS d ,expense AS e')
                                ->group_by('d.id')
                               
                                
                                ->get()->result_array();

        }




// ***************************************************************************

        public function ebl_adddeposit()  //this section is for md test profit loss application
        {
                $data = array(
                'name' => $this->input->post('name'),
                'comments' => $this->input->post('comments'),
                
                'date' => $this->input->post('date'),
                 'ebl_d_amount' => $this->input->post('ebl_d_amount'),
                 'ref' => $this->input->post('ref'),


                
                
            );

                return $this->db->insert('ebl', $data);
        }



public function ebl_addexpense()  //this section is for md test profit loss application
        {
                $data = array(
                'name' => $this->input->post('name'),
                'comments' => $this->input->post('comments'),
                
                'date' => $this->input->post('date'),
                 'ebl_e_amount' => $this->input->post('ebl_e_amount'),
                 'ref' => $this->input->post('ref'),


                
                
            );

                return $this->db->insert('ebl', $data);
        }



        public function get_ebl_depositlist()
        {
                return $this->db->select('*')
                                ->from('ebl')
                                ->where('ebl_d_amount IS NOT NULL')
                                ->get()->result_array();
        }




public function get_ebl_expenselist()
        {
                return $this->db->select('*')
                                ->from('ebl')
                                ->where('ebl_e_amount IS NOT NULL')
                                
                                ->get()->result_array();
        }

public function get_ebl_balance()
        {
               return $this->db->select('*')
                                ->from('ebl')
                                
                                ->get()->result_array();
        }







// ********************************************


public function memberDetails( $user_id)
        {
               return $this->db->select('*')
                                ->from('user')
                                ->where('user_id' , $user_id)
                                
                                ->get()->result_array();
        }

public function CheckUser( $user_id)
        {
               return $this->db->select('*')
                                ->from('user')
                                ->where('user_id' , $user_id)
                                
                                ->get()->row_array();
        }


public function CheckAllUser( $user_id)
        {
               return $this->db->select('*')
                                ->from('user')
                                ->where('user_id' , $user_id)
                                
                                ->get()->row_array();
        }



public function changePass($user_id)  //this section is for md test profit loss application
        {
                 $data=array(
                        'password'=>$_POST['password'],
                        'rs'=>'',
 
                        );


        return      $this->db->where('user_id', $user_id)
                            ->update('user', $data); 
        }


public function changeMPass($user_id)  //this section is for md test profit loss application
        {
                 $data=array(
                        'password'=>$_POST['password'],
                        'name'=>$_POST['name'],
                        'email'=>$_POST['email'],
 
                        );


        return      $this->db->where('user_id', $user_id)
                            ->update('user', $data); 
        }



// public function removeMember($user_id=0)
//         {
//             return $this->db->where('user_id', $user_id)
//                             ->delete('user');
//         }

// $this->db->select("trn_employee.EMPLOYEE_ID,trn_employee.FIRST_NAME,trn_employee.LAST_NAME,trn_employee.EMAIL,trn_address.ADDRESS_LINE,trn_address.CITY");
//   $this->db->from('trn_employee');
//   $this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
//   $query = $this->db->get();
//   return $query->result();



/*
        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

*/
}
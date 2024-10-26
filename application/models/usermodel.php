<?php

class UserModel extends CI_Model{

    public function getUsers(){

       // $this->load->database();
      //  $q=$this->db->query("SELECT * FROM userlist");

      //  return $q->result();
       // $result = $q->$result();
       // $result = $q->$result_array();

      //  return $result;

      //  echo "<pre>";
     //   print_r($result);

                                    /* $this->load->database();
                                       $this->db->where('user_id', 1);
                                       $this->db->get("userlist");
                                       select * from uerlist where user_id = 1;

     
     
                                     */


        return [
         ['firstname'=>'First User','lastname'=>'First Name'],
         ['firstname'=> 'Second User','lastname'=>'Second Name'],
         ['firstname'=> 'Third User','lastname'=>'Thirds Name'],


       ];   


    }





}
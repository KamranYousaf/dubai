<?php
 
class loginmodel extends CI_Model{

    public function isvalidate($username,$password){
        // $q=$this->db->query("select * from users where uname=$username and pword=$password");

        $q=$this->db->where(['uname'=>$username ,'pword'=>$password])
                    // ->from('users');
                    ->get('users');


        // echo"<pre>";
        // print_r($q->result());
        // print_r($q->row()->id);

        if($q->num_rows()){

           $row= $q->row();

            return $row->id;

        }else{
            return false;

            }

    }

    public function articlesList(){
       
    }


}




<?php

class Users extends CI_Controller{

    public function index(){

       // echo " user index ";

       $this->load->model('usermodel');
       $data['users']=$this->usermodel->getUsers();

       $this->load->view('users_list',$data);


      // print_r($users);




    }
    










}
<?php




class Blog extends CI_Controller{

    public function index(){

      //  echo " blog controller ka index function";

     // $this->load->model('Abc');
     // $this->abc->test();

     $this->load->model('authenticatefromfacebook','face');
     //$data=$this->authenticatefromfacebook->getData();

     $data=$this->face->getData();
     print_r($data);

      $this->load->view('blog_index');



    }

    public function add(){

        echo " controller function add";


    }





}
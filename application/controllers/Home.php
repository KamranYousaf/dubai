<?php 
class Home extends MY_Controller{


    public function index(){
        $this->load->model('articlesmodel','articles');
        $articles = $this->articles->allarticles();
        $this->load->view('public/home_page',compact('articles'));
        // print_r($articles);
        // exit;
        // $this->load->view('public/home_page',['articles'=>$articles]);



    }



}




 
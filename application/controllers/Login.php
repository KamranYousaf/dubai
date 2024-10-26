<?php
class Login extends MY_Controller{


    public function index(){

        // echo "LOgin page";
        if($this->session->userdata('user_id'))
        return redirect('admin/welcome');
           $this->load->view('admin/login');

    }
    public function admin_login(){
       
        $this->form_validation->set_rules('uname','User Name','required|alpha');
        $this->form_validation->set_rules('pass','Password','required|max_length[12]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run()){

        // echo "valid everything";
        $name=$this->input->post('uname');
        $pass=$this->input->post('pass');
        // echo "usrname".$name."</br>"."password is".$pass;
        // exit;
        $this->load->model('loginmodel');

        $login_id=$this->loginmodel->isvalidate($name,$pass);

        //   echo $id;
        //  exit;

            if($login_id){

                //logic correct
                //   echo "detailed match";
                //  $this->load->library('session');
                 $this->session->set_userdata('user_id',$login_id);
                //   $this->load->view('admin/dashboard');
                return redirect('admin/welcome');   

             }else{
               // logic failed
            //    echo "username and password not matched";
                    $this->session->set_flashdata('login_failed','Invalid username / password');
                    return redirect('login');

             }
       
         } else{
        // echo "not valid";
        // echo validation_errors();

        $this->load->view('admin/login');

       }//else

    }

    
    

}

<?php

class Admin extends MY_Controller{

    public function welcome(){
        // $this->load->view('admin/dashboard');
        // echo "welcome ";
        // exit;
        // $this->load->library('session');
        // echo $id;
        // exit;
        // $user_id=$this->session->userdata('user_id');
        //  if(! $this->session->userdata('user_id'));

        //  echo $user_id;
        // exit;
        //   return redirect('Login');



        if ($this->session->userdata('user_id')) {
            // return true;
           
        $this->load->model('articlesmodel','ar');
        $articles=$this->ar->articles_list();
        $this->load->view('admin/dashboard',['articles'=>$articles]);
        } else {
        redirect('login');
                }

    }

    public function addarticle(){
        $this->load->view('admin/add_article');

    }
    public function storearticle(){
       $config['upload_path'] = './upload/';
       $config['allowed_types'] = 'jpg|png';
       
       $this->load->library('upload',$config);
    //    $this->upload->do_upload();

        $this->form_validation->set_rules('title','Article Title','required');
        $this->form_validation->set_rules('body','Article body','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run()&&($this->upload->do_upload('userfile'))){

        // $this->upload->do_upload();
        $post=$this->input->post();
       
        $data=$this->upload->data();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
        $post['image_path']=$image_path;
        // echo $image_path;
        // exit;
        
        $this->load->model('articlesmodel','articles');
        
            if($this->articles->addarticle($post)){

                // echo "inserted success";
                $this->session->set_flashdata('feedback','Articles Added successfully..');
                $this->session->set_flashdata('feedback_class','alert-success');


            }else{
               
                // echo"failed to insert";
                $this->session->set_flashdata('feedback','Articles failed to add, try again');
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('admin/welcome');           
       
        } else{
        $upload_error=$this->upload->display_errors();
        // print_r($upload_error);
        // print_r(compact('upload_error'));

        // return redirect('admin/addarticle',compact('upload_error'));
        $this->load->view('admin/add_article',compact('upload_error'));

        
       }//else



    }
    public function editarticle($article_id){
        // echo $article_id;
        $this->load->model('articlesmodel','articles');
        $article=$this->articles->findarticle($article_id);
        // print_r($articles);
        $this->load->view('admin/edit_article',['article'=>$article]);
    }

    public function updatearticle($article_id){
        // $post=$this->input->post();
        // // print_r($post);
        // $this->load->model('articlesmodel','articles');
        // $this->articles->updatearticle();





        $this->form_validation->set_rules('title','Article Title','required');
        $this->form_validation->set_rules('body','Article body','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run()){

       
        $post=$this->input->post();
        
        $this->load->model('articlesmodel','articles');

            if($this->articles->updatearticle($article_id,$post)){

                // echo "inserted success";
                $this->session->set_flashdata('feedback','Articles updated successfully..');
                $this->session->set_flashdata('feedback_class','alert-success');


            }else{
               
                // echo"failed to insert";
                $this->session->set_flashdata('feedback','Articles failed to update, try again');
                $this->session->set_flashdata('feedback_class','alert-danger');
            }
            return redirect('admin/welcome');           
       
        } else{
        
        // return redirect('admin/editarticle');
        $this->load->view('admin/edit_article');

        
       }//else

    }
    public function delarticle(){
        // print_r($this->input->post());
        $article_id = $this->input->post('article_id');
        $this->load->model('articlesmodel','articles');


        if($this->articles->deletearticle($article_id)){

            // echo "inserted success";
            $this->session->set_flashdata('feedback','Articles deleted successfully..');
            $this->session->set_flashdata('feedback_class','alert-success');


        }else{
           
            // echo"failed to insert";
            $this->session->set_flashdata('feedback','Articles failed to delete, try again');
            $this->session->set_flashdata('feedback_class','alert-danger');
        }
        return redirect('admin/welcome');



    }


    public function logout(){
        $this->session->unset_userdata('user_id');
        return redirect('login');


    }

    public function register(){
        //  echo "welcome signup";
        $this->load->view('admin/register');
    }

    public function sendemail(){

         echo "testing admin controller";
        //  exit;
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('uname','User Name','required|alpha');
        $this->form_validation->set_rules('pass','Password','required|max_length[12]');
        $this->form_validation->set_rules('fname','Firstname','required|alpha');
        $this->form_validation->set_rules('lname','Lastname','required|alpha');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');

        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

       if($this->form_validation->run()){

        //  echo "valid everything";
        //  exit;
        $this->load->library('email');

        $this->email->from(set_value('email'),set_value('fname'));
        $this->email->to("ali@gmail.com");
        $this->email->subject("Registrating Greetings..");


        $this->email->message("Thanks you for Registration");
        $this->email->set_newline("\r\n");
        $this->email->send();
        

       

            if(!$this->email->send()){
                show_error($this->email->print_debugger());

             }else{
                echo "Your e-mail has been sent";
               
             }
       }
       else{
        // echo "not valid";
        // echo validation_errors();

        $this->load->view('admin/register');

       }//else

    }
    public function __construct(){
        parent::__construct();
        if(! $this->session->userdata('user_id')){

             
             redirect('login');

        }

        // // echo id;
        // // exit;

            

        // if ($this->session->userdata('user_id')) {
        //     // return true;
        //     //   return redirect('admin/welcome');
           

        //  } else {
        // return redirect('login');
        // }
        //   return redirect('login');
    }
    

}





<?php 
class Articlesmodel extends CI_Model{

    public function articles_list(){

        $user_id=$this->session->userdata('user_id');
        // echo $id;
        $query= $this->db->select(['title','id'])
                        //   ->select('id')
                         ->from('articles')
                    //   ->where(['user_id'=>$user_id])
                         ->where('user_id',$user_id)
                         ->get();

                //  print_r($query->result());
                //  exit;

                //  print_r($query->result());
                //  print_r($q->row());
                //  exit;
                return $query->result();


    }
    public function addarticle($array){
        // $t=$array['title'];
        // $this->db->insert('articles',['artcle_title'=>$t]);

        return $this->db->insert('articles',$array);

    }

    public function findarticle($article_id){
        $q=$this->db->select(['id','title','body'])
                 ->where('id',$article_id) 
                 ->get('articles');
                 
         return $q->row();        
    }
    public function updatearticle($article_id, array $article){
        return $this->db
                         ->where('id',$article_id)
                         ->update('articles',$article);


    }

    public function deletearticle($article_id){
        return $this->db->delete('articles',['id'=>$article_id]);


    }
    public function allarticles(){
        $query= $this->db->select(['body','title','id','image_path','created_at'])
                        //   
                         ->from('articles')
                         ->get();

                return $query->result();


    }



}
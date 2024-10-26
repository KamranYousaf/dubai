<?php include('header.php'); ?>


<div class=container style="margin-top:50px">
  <div class="row">
    <div class="col-lg-12 col-lg-offset-3"> 
  <!-- <a href="addarticle" class="btn btn-lg btn-primary">Add Articles</a> -->
  <?php echo anchor('admin/addarticle','Add Articles',['class'=>'btn btn-lg btn-primary float-right']) ?>
    </div>
  </div> 

  <?php if($feedback=$this->session->flashdata('feedback')):
            $feedback_class=$this->session->flashdata('feedback_class');
    
    ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible <?php echo $feedback_class ?>">
          <?php echo $feedback; ?>
        </div>

      </div>

    <!-- </div> -->

  <?php endif; ?>

  
  




</div>

<!-- <?php print_r($articles);?> -->

<div class="container" style ="margin-top:50px">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Article Body</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <!-- <?php// if(count($articles)) { ?> -->
    <?php if(count($articles)): ?>
  <?php foreach ($articles as $art): ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $art->title; ?></td>
      <!-- <td><a href="#" class="btn btn-primary">Edit</a></td> -->
       <!-- <?php //echo anchor("admin/editarticle/".$article->id); ?> -->
       <td><?php echo anchor("admin/editarticle/{$art->id}",'EDIT',['class'=>'btn btn-primary']); ?></td>
       <td><?php echo form_open('admin/delarticle'),
                      form_hidden('article_id',$art->id),
                      form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']);
                      form_close();
         ?>     
        </td>
      <!-- <td><a href="#" class="btn btn-danger">Delete</a></td> -->
    </tr>

  <?php endforeach; ?>
  <?php else: ?>
      <tr>
        <td colspan="3">Not Data Available</td>

      </tr> 
     <!-- <?php// }?>  -->
  <?php endif; ?>   
    
    
  </tbody>
</table>  
  <!-- </div>  -->
<?php include('footer.php'); ?>
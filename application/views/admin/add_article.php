<?php include('header.php'); ?>


<div class="container" style="margin-top: 20px">
  <h1>Add Article</h1>
  <?php echo form_open_multipart('admin/storearticle');?>
  <?php echo form_hidden('user_id',$this->session->userdata('user_id'));  ?>
  <!-- keyboard say control u kar kay hiiden id check ki ja sakti ha -->
   <?php echo form_hidden('created_at', date('Y-m-d')); ?>
  
  
  <div class="row">
     <div class="col-lg-6"> 
       <div class="form-group">
        <label for="Title">Article Title</label>

    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" -->
     <!-- placeholder="Enter article title"> -->
    <?php echo form_input(['class'=>'form-control','name'=>'title',
                            'placeholder'=>'Enter Article Title','value'=>set_value('title')]); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php echo form_error('title'); ?>
      </div>


  </div>
      
    <!-- ------------------------------------------------------------ -->
    <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="Article body">Article Body</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_textarea(['class'=>'form-control','name'=>'body',
    'placeholder'=>'Enter Article body','value'=>set_value('body')]); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php echo form_error('body'); ?>
      </div> 
  </div>
  <!--------------------------------------------------------------------------- -->

  <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="body">Select Image</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_upload(['name'=>'userfile']); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php if(isset($upload_error)){ echo $upload_error; } ?>
      </div> 
  </div>
  <!--------------------------------------------------------------------------- -->


  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <?php echo form_submit(['class'=>'btn btn-primary','value'=>'submit','type','submit']); ?>
  <?php echo form_reset(['class'=>'btn btn-primary','value'=>'Reset','type','reset']); ?>
  
<!-- </form> -->
</div>


<!-- <?php //echo validation_errors();?> -->


<?php include('footer.php');  ?>
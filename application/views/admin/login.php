<?php include('header.php'); ?>




<div class="container" style="margin-top: 20px">
  <h1>Login Form</h1>
<!-- <form action="base_url('admin/index');"> -->
  <!-- <?php// echo form_open('admin/index');?> -->
  <?php echo form_open('login/admin_login');?>

  <?php if($errors=$this->session->flashdata('login_failed')): ?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-danger">
          <?php echo $errors; ?>
        </div>

      </div>

    </div>

  <?php endif; ?>  

  <div class="row">
     <div class="col-lg-6"> 
       <div class="form-group">
        <label for="Username">Username</label>

    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" -->
     <!-- placeholder="Enter email"> -->
    <?php echo form_input(['class'=>'form-control','name'=>'uname',
                            'placeholder'=>'Enter Username','value'=>set_value('uname')]); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <?php echo form_error('uname'); ?>
      </div>


  </div>
      
    <!-- ------------------------------------------------------------ -->
    <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_password(['class'=>'form-control','name'=>'pass','type'=>'password',
    'placeholder'=>'Enter password','value'=>set_value('pass')]); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php echo form_error('pass'); ?>
      </div> 
  </div>
  
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <?php echo form_submit(['class'=>'btn btn-primary','value'=>'submit','type','submit']); ?>
  <?php echo form_reset(['class'=>'btn btn-primary','value'=>'Reset','type','reset']); ?>
  <?php echo anchor('admin/register','Sign up?','class="link-class"') ?>
<!-- </form> -->
</div>


<!-- <?php// echo validation_errors();?> -->


<?php include('footer.php');  ?>
<?php include('header.php'); ?>



<!--<div class="login-card"><img src="<?php echo base_url();?>assests/images/admin.png" class="profile-img-card">
<div container>
<p class="profile-name-card"> </p>
<form  method="post" action="<?php echo base_url();?>Login/get" class="form-signin"><span class="reauth-email" > </span>
    <input class="form-control" type="email" required placeholder="Email address" autofocus name="email">
    <input class="form-control" type="password" required placeholder="Password" name="password">
    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>   
</form>    
</div>  -->


<div class="container" style="margin-top: 20px">
  <h1>Register Form</h1>
<!-- <form action="base_url('admin/index');"> -->
  <?php echo form_open('admin/sendemail');?>

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
  <!----------------------------------------------------------------- -->

  <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="exampleInputPassword1">Firstname</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_input(['class'=>'form-control','name'=>'fname',
    'placeholder'=>'Enter Firstname','value'=>set_value('fname')]); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php echo form_error('fname'); ?>
      </div> 
  </div>
  <!----------------------------------------------------------------- -->

  <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="exampleInputPassword1">Lastname</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_input(['class'=>'form-control','name'=>'lname',
    'placeholder'=>'Enter Lastname','value'=>set_value('lname')]); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php echo form_error('lname'); ?>
      </div> 
  </div>
  <!----------------------------------------------------------------- -->

  <div class="row">
     <div class="col-lg-6"> 
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
    <?php echo form_input(['class'=>'form-control','name'=>'email',
    'placeholder'=>'Enter Email','value'=>set_value('email')]); ?>
      </div>

    </div> 
    <div class="col-lg-6" style="margin-top:40px">
        <?php echo form_error('email'); ?>
      </div> 
  </div>
  <!----------------------------------------------------------------- -->


  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  <?php echo form_submit(['class'=>'btn btn-primary','value'=>'submit','type','submit']); ?>
  <?php echo form_reset(['class'=>'btn btn-primary','value'=>'Reset','type','reset']); ?>
  <!-- <?php// echo anchor('admin/register/','Sign up?','class="link-class"') ?> -->
<!-- </form> -->
</div>


<!-- <?php// echo validation_errors();?> -->


<?php include('footer.php');  ?>
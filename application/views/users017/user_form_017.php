<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php  $this->load->view('cats017/head'); ?>
<?php  $this->load->view('cats017/navbar'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATSHOP 017</title>
</head>
<body>
    <div class="container"><br>
    <h3 style="color:white">USERS FORM</h3>
    <?php
    $username = '';
    $usertype = ''; 
    $fullname = '';
    if(isset($user)){
      $username=$user->username_017;
      $usertype=$user->usertype_017;
      $fullname=$user->fullname_017;
    }
    ?>
    <div id="box" class="container">
      <div style="color:red"><?php echo validation_errors() ?></div>
    <form action="" method="post">
    <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username_017" value="<?=set_value('username_017',$username)?>" id="" required>
  </div>
  <div class="input-group">
  <div class="input-group-prepend">
  <label style="color:white" for="exampleFormControlInput1">Usertype</label>&nbsp;&nbsp;
    <div class="input-group-text">
    <input type="radio"  name="usertype_017" value="Manager" <?=set_radio('usertype_017','Manager', $usertype=='Manager'?TRUE:FALSE)?> aria-label="Radio button for following text input" required>&nbsp; Manager
    </div>
    <div class="input-group-text">
    <input type="radio" name="usertype_017" value="Cashier" <?=set_radio('usertype_017','Cashier', $usertype=='Cashier'?TRUE:FALSE)?> aria-label="Radio button for following text input" required>&nbsp; Cashier
    </div>
  </div>
</div>
  <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Fullname</label>
    <input type="text" class="form-control" name="fullname_017" value="<?=set_value('fullname_017',$fullname)?>" id="" required>
  </div>
  <div class="form-group text-right">
  <input type="submit" value="SAVE" name="submit" class="btn btn-success">
  <button type="reset" class="btn btn-danger">RESET</button>
  <a href="<?=site_url('users017')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
</div>
    </form>
</div>
</body>
</html>
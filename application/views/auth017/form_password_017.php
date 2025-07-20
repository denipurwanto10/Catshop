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
    <h3 style="color:white">CHANGE PASSWORD</h3>
    <hr>
    <div id="box" class="container">
    <?=$this->session->flashdata('msg')?>
    <div style="color:red"><?php echo validation_errors() ?></div>
    <form action="" method="post">
    <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Old Password</label>
    <input type="password" class="form-control" name="oldpassword" required>
  </div>
  <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">New Password</label>
    <input type="password" class="form-control" name="newpassword" required>
  </div>
  <div class="form-group text-right">
  <input type="submit" value="SAVE" name="change" class="btn btn-success">
  <button type="reset" class="btn btn-danger">RESET</button>
  <a href="<?=base_url()?>"><input type="button" value="BACK TO HOME" class="btn btn-primary"></a>
</div>
    </form>
</div>
</body>
</html>
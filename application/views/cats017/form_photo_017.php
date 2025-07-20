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
    <h3 style="color:white">CHANGE PHOTO</h3>
    <hr>
    <div id="box" class="container">
    <?=$this->session->flashdata('msg')?>
    <div style="color:red"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Current Photo</label><br>
    <img src="<?=base_url('uploads/cats/'.$cat->photo_017)?>" style="border-radius:50%;" width="128" height="128"/>
  </div>
  <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">New Photo</label>

  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div><br><br>
  <div class="form-group text-right">
  <input type="submit" value="UPLOAD" name="upload" class="btn btn-success">

  <a href="<?=site_url('cats017')?>"><input type="button" value="BACK TO HOME" class="btn btn-primary"></a>
</div>
    </form>
</div>
</body>
</html>
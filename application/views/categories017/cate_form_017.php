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
    <h3 style="color:white">CATEGORIES FORM</h3>
    <hr>
    <?php
    $name = '';
    $description = ''; 
    if(isset($cate)){
      $name=$cate->cate_name_017;
      $description=$cate->description_017;
    }
    ?>
    <div id="box" class="container">
    <div style="color:red"><?php echo validation_errors() ?></div>
    <form action="" method="post">
    <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Categories Name</label>
    <input type="text" class="form-control" name="cate_name_017" value="<?=set_value('cate_name_017',$name)?>" id="" required>
  </div>
  <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description_017"  rows="3" required><?=$description?></textarea>
  </div>
  <div class="form-group text-right">
  <input type="submit" value="SAVE" name="submit" class="btn btn-success">
  <button type="reset" class="btn btn-danger">RESET</button>
  <a href="<?=site_url('categories017')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
</div>
    </form>
</div>
</body>
</html>
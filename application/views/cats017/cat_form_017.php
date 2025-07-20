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
    <h3 style="color:white">CATS FORM</h3>
    <?php
    $name = '';
    $type = ''; 
    $gender = ''; 
    $age = '';
    $price='';
    if(isset($cat)){
      $name=$cat->name_017;
      $type=$cat->type_017;
      $gender=$cat->gender_017;
      $age=$cat->age_017;
      $price=$cat->price_017;
    }
    ?>
    <div id="box" class="container">
      <div style="color:red"><?php echo validation_errors() ?></div>
    <form action="" method="post">
    <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name_017" value="<?=set_value('name_017',$name)?>" id="" required>
  </div>
  <div class="input-group mb-3">
  <select  class="custom-select" id="inputGroupSelect02" name="type_017" required>
  <option value="">Choose Type</option>
  <?php foreach($cate as $categories) { ?>
    <option value="<?=$categories->cate_name_017?>" <?=set_select('type_017',$categories->cate_name_017,$type==$categories->cate_name_017?TRUE:FALSE)?>><?=$categories->cate_name_017?></option>
    <?php } ?>
  </select>
</div>
<div class="input-group">
  <div class="input-group-prepend">
  <label style="color:white" for="exampleFormControlInput1">Gender</label>&nbsp;&nbsp;
    <div class="input-group-text">
    <input type="radio"  name="gender_017" value="Male" <?=set_radio('gender_017','Male', $gender=='Male'?TRUE:FALSE)?> aria-label="Radio button for following text input" required>&nbsp; Male
    </div>
    <div class="input-group-text">
    <input type="radio" name="gender_017" value="Female" <?=set_radio('gender_017','Female', $gender=='Female'?TRUE:FALSE)?> aria-label="Radio button for following text input" required>&nbsp; Female
    </div>
  </div>
</div>
<div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Age</label>
    <input type="number" class="form-control" name="age_017" value="<?=set_value('age_017',$age)?>" id="" required>
  </div>
  <div class="form-group">
    <label style="color:white" for="exampleInputEmail1">Price ($)</label>
    <input type="number" class="form-control" name="price_017" value="<?=set_value('price_017',$price)?>" id="" required>
  </div>
  <div class="form-group text-right">
  <input type="submit" value="SAVE" name="submit" class="btn btn-success">
  <button type="reset" class="btn btn-danger">RESET</button>
  <a href="<?=site_url('cats017')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
</div>
    </form>
</div>
</body>
</html>
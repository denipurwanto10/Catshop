<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php  $this->load->view('cats017/head'); ?>
<?php  $this->load->view('cats017/navbar'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .card-box {
            display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  flex: 1 0 100%;
}
    </style>
    <div class="container"><br><br><br><br><br><br>
    <div class="card-box">
    <a style="text-decoration:none;" href="<?=site_url('cats017')?>">
    <div class="card-deck">
    <div class="card bg-primary text-white">
	<div class="card-body">
    <img src="<?php echo base_url(); ?>assets/img/kitty.png" class="card-img-top" width="75px" height="75px"><br>
    <p>Manage Cats</p>
	</div>
</div></a>
<a style="text-decoration:none;" href="<?=site_url('categories017')?>">
<div class="card bg-danger text-white">
	<div class="card-body">
    <img src="<?php echo base_url(); ?>assets/img/menu.png" class="card-img-top" width="75px" height="75px"><br>
    <p style="font-size:15px">Manage Category</p>
	</div>
</div></a>
<?php if($this->session->userdata('usertype') == 'Manager'){ ?>
<a style="text-decoration:none;" href="<?=site_url('users017')?>">
<div class="card bg-success text-white">
	<div class="card-body">
    <img src="<?php echo base_url(); ?>assets/img/man.png" class="card-img-top" width="75px" height="75px"><br>
    <p style="font-size:15px">Manage Users</p>
	</div>
</div></a>
<a style="text-decoration:none;" href="<?=site_url('cats017/sales')?>">
<div class="card bg-warning text-white">
	<div class="card-body">
    <img src="<?php echo base_url(); ?>assets/img/report.png" class="card-img-top" width="75px" height="75px"><br>
    <p style="font-size:15px">Sales Report</p>
	</div>
</div></a><?php } ?>
</div>
</div><br><br>
<div class="fixed-bottom">
<?php  $this->load->view('cats017/footer'); ?>
</div>
    
</body>
</html>
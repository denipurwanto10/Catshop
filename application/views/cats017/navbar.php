<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php  $this->load->view('cats017/head'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?=base_url()?>" style="font-weight:bold">Cats Shop 017 &nbsp;<img src="<?php echo base_url(); ?>assets/img/cat.png" width="30px" height="30px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a style="color:white" class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" style="border-radius:50%;" width="40" height="40"/>
        <?=$this->session->userdata('fullname')?>, <?=$this->session->userdata('usertype')?>
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink ">
        <a class="nav-link" href="<?=site_url('auth017/changephoto')?>">Change Photo</span></a>
        <a class="nav-link" href="<?=site_url('auth017/changepass')?>">Change Password</span></a>
        <a class="nav-link" href="<?=site_url('auth017/logout')?>">Logout</span></a>
        </div>
      </li>
      </ul>
  </div>
  </div>
</nav>
<style>
  .nama{
    margin-top:7px;
  }
</style>
</body>
</html>
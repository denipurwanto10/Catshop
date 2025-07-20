<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php  $this->load->view('cats017/head'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
</head>

<body><br><br><br><br>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
						<div class="card-body p-5 bg-dark">
							<h3 style="color:white" class="fs-4 card-title fw-bold mb-4">CatShop 017</h3>
                            <?=$this->session->flashdata('msg')?>
                            <div style="color:red;"><?=validation_errors()?></div>
							<form action="" method="post">
								<div class="mb-3">
									<label style="color:white" for="email">Username</label>
									<input id="email" type="text" class="form-control" name="username" value="" required autofocus>
								</div>
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label style="color:white" for="password">Password</label>
									</div>
									<input type="password" id="pass" class="form-control" name="password" required>
								</div>
                                <div class="form-check-inline">
  <label style="color:white" class="form-check-label">
    <input type="checkbox" onclick="show()" class="form-check-input" value="">Show Password
  </label>
</div><br><br>
                                <input id="button2" type="submit" name="login" value="LOGIN" class="btn btn-primary">
                                <input id="button" type="reset" name="reset" value="RESET" class="btn btn-danger">
							</form>
						</div>
					</div>
				</div>
		</div>
	</section>
    <style>
        #button{
            width: 49%;
        }
        #button2{
            width: 49%;
        }
    </style>
    <script>
    function show(){
    var x = document.getElementById("pass");
    if(x.type === "password"){
        x.type = "text" ;
    } else {
        x.type = "password" ;
    }
}
    </script>

</body>
</html>
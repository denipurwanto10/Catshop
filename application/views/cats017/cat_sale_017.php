<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
    <div class="container"><br>
    <h3 style="color:white">CATS SALE FORM</h3><br>
    <form action="" method="post">
        <table class="table table-striped table-bordered table-dark">
            <tr>
                <td>Cat Id</td>
                <td>: <?=$cat->id_017?></td>
            </tr>
            <tr>
                <td>Cat Name</td>
                <td>: <?=$cat->name_017?></td>
            </tr>
            <tr>
                <td>Cat Type</td>
                <td>: <?=$cat->type_017?></td>
            </tr>
            <tr>
                <td>Cat Price</td>
                <td>: $ <?=$cat->price_017?></td>
            </tr>
            </table>
            </div>
            <div  class="container">
            <div class="form-group">
                <label style="color:white" for="exampleInputEmail1">Customer Name</label>
                <input type="text" class="form-control" name="customer_name_017" id="" required>
            </div>
            <div class="form-group">
                <label style="color:white" for="exampleInputEmail1">Customer Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="customer_address_017" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label style="color:white" for="exampleInputEmail1">Customer Phone</label>
                <input type="number" class="form-control" name="customer_phone_017" id="" required>
            </div>
            <div class="form-group text-right">
                <input type="submit" value="SALE" name="submit" class="btn btn-success">
                <button type="reset" class="btn btn-danger">RESET</button>
                <a href="<?=site_url('cats017')?>"><input type="button" value="CANCEL" class="btn btn-primary"></a>
            </div>
    </form>
    </div>
    
</body>
</html>
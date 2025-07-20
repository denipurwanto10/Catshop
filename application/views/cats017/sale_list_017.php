<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php  $this->load->view('cats017/head'); ?>
<?php  $this->load->view('cats017/navbar'); ?>
<div class="container"><br>
    <h3 style="color:white">SALES LIST</h3><br>
    <div class="btn-group rounded float-right" role="group" aria-label="Basic example">
  <button type="button" id="tombol2" class="btn btn-success btn-sm "><img src="<?php echo base_url(); ?>assets/img/show.png"  width="25px" height="25px"></button>
  <button type="button" id="tombol" class="btn btn-danger btn-sm"><img src="<?php echo base_url(); ?>assets/img/hidden.png"  width="25px" height="25px"></button>
</div><br><br>
    <table id="tabel" class="table table-striped table-bordered table-dark">
        <thead class="thead-dark">
        <tr style="text-align:center;">
            <th>Sale ID</th>
            <th>Sale Data</th>
            <th>Cat Name</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
        </tr>
        </thead>
        </tbody>
        <?php foreach ($sales as $sale){ ?>
        <tr style="text-align:center;">
            <td><?=$sale->sale_id_017?></td>
            <td><?=tgl($sale->sale_date_017)?></td>
            <td><?=$sale->name_017?></td>
            <td><?=$sale->customer_name_017?></td>
            <td><?=$sale->customer_address_017?></td>
            <td><?=$sale->customer_phone_017?></td>
        </tr><?php } ?></tbody>
    </table>
    <a class="btn btn-info btn-sm" href="<?=base_url()?>"><img src="<?php echo base_url(); ?>assets/img/back.png" width="30px" height="30px"></a>
</div><br>
<?php  $this->load->view('cats017/footer'); ?>
<script>
  $(document).ready(function(){
    $("#tombol").click(function() {
    $('#tabel').fadeOut('slow');
  });
});
$(document).ready(function(){
    $("#tombol2").click(function() {
    $('#tabel').fadeIn('slow');
  });
});
</script>
</body>
</html>
<?php  $this->load->view('cats017/head'); ?>
<?php  $this->load->view('cats017/navbar'); ?>
<style>
.pagination {
	display: flex;
  justify-content: center;
	padding: 1em 0;
  color:white;
}

.pagination a,
.pagination strong {
	border: 1px solid silver;
	border-radius: 8px;
	color: black;
  width: 40px;
  background-color: white;
	padding: 0.5em;
	margin-right: 0.5em;
	text-decoration: none;
}

.pagination a:hover,
.pagination strong {
	border: 1px solid #008cba;
	background-color: #008cba;
	color: white;
}
</style>
<div class="container"><br>
    <h3 style="color:white">USERS LIST</h3><br>
    <?=$this->session->flashdata('msg')?>
    <a class="btn btn-primary btn-sm" href="<?=site_url('users017/add')?>"><img src="<?php echo base_url(); ?>assets/img/add.png" width="30px" height="30px"></a><div class="btn-group rounded float-right" role="group" aria-label="Basic example">
  <button type="button" id="tombol2" class="btn btn-success btn-sm "><img src="<?php echo base_url(); ?>assets/img/show.png"  width="25px" height="25px"></button>
  <button type="button" id="tombol" class="btn btn-danger btn-sm"><img src="<?php echo base_url(); ?>assets/img/hidden.png"  width="25px" height="25px"></button>
</div><br><br>
    <table id="tabel" class="table table-striped table-bordered table-dark">
        <thead class="thead-dark">
        <tr style="text-align:center;">
            <th>No</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan='3'>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user){ ?>
        <tr style="text-align:center;">
            <td><?=$i++?></td>
            <td><?=$user->username_017?></td>
            <td><?=$user->usertype_017?></td>
            <td><?=$user->fullname_017?></td>
            <td><a style="color:white" class="btn btn-warning btn-sm" href="<?=site_url('users017/edit/'.$user->userid_017)?>"><img src="<?php echo base_url(); ?>assets/img/edit.png" width="20px" height="20px"></a></td>
            <td><a class="btn btn-danger btn-sm" href="<?=site_url('users017/delete/'.$user->userid_017)?>" onclick="return confirm('Are you sure?')"><img src="<?php echo base_url(); ?>assets/img/delete.png" width="20px" height="20px"></a></td>
            <td><a class="btn btn-secondary btn-sm" href="<?=site_url('users017/resetpass/'.$user->userid_017)?>" onclick="return confirm('Are you sure?')"><img src="<?php echo base_url(); ?>assets/img/reset.png" width="25px" height="25px"></a></td>
        </tr><?php } ?></tbody>
    </table>
    <center><p><?=$this->pagination->create_links();?></p></center>
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
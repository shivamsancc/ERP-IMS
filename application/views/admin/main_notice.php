<title>Notice Board</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
	<div class="col-md-12  Dash-main">
		<h1 style="text-align: center; color: black">Notice Board</h1><hr class="Notice-line">
		<div class="col-md-12 ">
		<p class=""><?= $idd['title']; ?></p>
	<div class="form-control notive_body" readonly="readonly" style="background-color:#ffff;height: auto; min-height:286px;" >
<<<<<<< HEAD
		<img src="<?= base_url('assets/') ?>images/citet-logo.jpg" class="img-responsive" />
=======
		<img src="http://www.citet.org/wp-content/uploads/2015/04/citet-logo.jpg" class="img-responsive" />
>>>>>>> f5ef33748fde3e2dc2fd8186271b66838292bc89
		Notice BY: <?= $idd['createdby']; ?><br>Notice Date: <?= $idd['create_date']; ?><hr class="Notice-line">
		<?=	$idd['message'];?><hr class="Notice-line">
		<img src="<?= base_url('assets/') ?>images/citet-logo.jpg" class="img-responsive" />
	</div>
	<div class="col-md-11 ">
		</div>
	</div>
	
</div>
<!-------------------------------Main Content End Here----------------------------->	

</div>
<?php include'include/footer.php'; ?>

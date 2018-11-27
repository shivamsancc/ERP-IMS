<title>Send Messege on Phone </title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
	<div class="col-md-12  Dash-main">
		<h1 style="text-align: center; color: black">Send Messege on Phone</h1><hr class="Notice-line">
		<div ng-app="">
		<div class="col-md-12">
			<div class="col-md-6">
				<div ng-app="">
 
				<form method="post" action="<?= base_url('main/smsapi'); ?>">
					<label>Phone Nubmers:</label><textarea class="form-control " name="mobile_numbers" placeholder="Put Your Phone Numbers Here" ></textarea><br>
					<label>Messege:</label><textarea class="form-control send_messege_box" name="messege_body" type="text" ng-model="name" placeholder="Put Your Messege Here....." ></textarea><br>
					<div style="margin-left: 170px;">
						<button type="submit" class="btn btn-success">Send</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>

				</div>
			</div>
			<div class="col-md-6" >
				<img style="border-radius: 33px; height: 450px; float: right;margin-right:136px;" src="<?= base_url('assets/') ?>images/phone.png">
				<div class="messege-block">
    				<textarea class="form-control send_messege_mobile" readonly="readonly" type="text" ng-bind="name" ></textarea>
  				</div>
			</div>
		</div>
	</div>
	</div>
<!-------------------------------Main Content End Here----------------------------->	

</div>
<?php include'include/footer.php'; ?>

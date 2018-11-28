<title>Send E-mail</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
		<div class="col-md-12  Dash-main">
		
	<h1 style="text-align: center; color: black">Send E-mail</h1><hr class="Notice-line"> 	
<!-------------------------------Main Content---------------------------------->			
<form class="form-content">
	Enter Your Recipient's Mail Address	<input class="form-control" type="email" placeholder="admin@example.com"><br>OR
	Recipient<select class="form-control"	>
		<option value="none" default="defalut">Select</option>
		<option value="student">Students</option>
		<option value="centers">Centers/Teacheres</option>
		<option></option>
	</select>Mail 
	<div class="controls">
		<textarea name="description" class="form-control ckeditor" required="required"></textarea>
	</div><br>
	<button type="submit" class="btn btn-primary"><i class="fa fa-envelope"> Submit</i></button>&nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-envelope"> Reset</i></button>
</form>
	

<!-------------------------------Main Content End Here----------------------------->	
</div>
</div>
<?php include'include/footer.php'; ?>

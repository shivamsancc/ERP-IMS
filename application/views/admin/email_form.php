<title>Notice Board</title>
<?php include'include/header.php'; ?>
<!--<?php include'include/head.php'; ?>-->
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>	<div class="col-md-12  Dash-main">
<!-------------------------------Main Content---------------------------------->			

		<head>    
    <title> Send Email Codeigniter </title>
</head>
<body>
<?php
echo $this->session->flashdata('email_sent');
echo form_open('mail_Controller/send_mail');
?>
<input type = "email" name = "email" required />
<input type = "submit" value = "SEND MAIL">
<?php
echo form_close();
?>
</body>
</html>

<!-------------------------------Main Content End Here----------------------------->	
	</div>
	
</div>
</div>
<?php include'include/footer.php'; ?>

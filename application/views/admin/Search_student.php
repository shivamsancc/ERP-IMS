<title>Search Student</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
<div class="col-md-12  Dash-main">
		<form action="/action_page.php">
		  <div class="form-group">
			    <label for="email"> Notice Title:</label>
		    	<input type="email" required="required" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		  	  <label for="pwd">Notice Publisher:</label>
		      <input type="text" readonly="readonly" value="SHIVAM ANAND" class="form-control" id="pwd">
		  </div>
		  <div class="form-group ">
		  	  <label for="pwd">Notice :</label>
		      <textarea  type="text" required="required" class=" ckeditor form-control" id="pwd"></textarea> 
		  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<!-------------------------------Main Content End Here----------------------------->	

</div>

<?php include'include/footer.php'; ?>
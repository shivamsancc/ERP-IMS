<title>Add Notice in ERP</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
<div class="col-md-12  Dash-main">
		<form  method="post" action="<?= base_url('main/dash_add_notice'); ?>">
		  <div class="form-group">
			    <label for="email"> Notice Title:</label>
		    	<input type="Text" required="required" name="notice_title" class="form-control" id="email">
		  </div>
		  <div class="form-group">
		  	  <label for="pwd">Notice Publisher:</label>
		      <input type="text" readonly="readonly" name="Shivam_Anand" value="SHIVAM ANAND" class="form-control" id="pwd">
		  </div>
		  <!--<div class="form-group ">
		  	  <label for="pwd">Notice :</label>
		      <textarea  type="text" required="required" class="form-control ckeditor " id="pwd"></textarea> 
		  </div>-->
		  <div class="control-group">
                  <label class="control-label">Description</label>
                  <div class="controls">
				 <textarea name="description" class="form-control ckeditor" required="required"></textarea>
				 
                  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

<!-------------------------------Main Content End Here----------------------------->	

</div>

<?php include'include/footer.php'; ?>

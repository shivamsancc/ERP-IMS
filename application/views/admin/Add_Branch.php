<title>Add Branch Manager</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
	<div class="col-md-12  Dash-main">
	<h1 style="text-align: center; color: black">Add Branch </h1>
	<form method="post" action="<?= base_url('Branch/add_branch'); ?>" enctype="multipart/form-data"> 
		<div>
			
			<div class="col-md-6" ><label>Branch Name: </label><input type="text" required="required"   placeholder="Branch Head Name" class="form-control" name="bname"></div>
		
			<div class="col-md-6" >	<label>Center Address: </label><input type="text"  placeholder="Center Address:" class="form-control" required="required" name="address"></div>
			<div class="col-md-6" >	<label>Location: </label><input type="text"  placeholder="Location: " class="form-control" required="required" name="location"></div>
			<div class="col-md-6" >	<label>Lankmark: </label><input type="text"   placeholder="Lankmark" class="form-control"required="required" name="Lankmark"></div>
			<div class="col-md-6" ><label>State: </label><input type="text"   placeholder="State" class="form-control"required="required" name="State"></div>
			<div class="col-md-6" ><label>District: </label><input type="text"   placeholder="District" class="form-control"required="required" name="District">
			</div>
			<div class="col-md-6" ><label>City: </label><input type="text"   placeholder="City" class="form-control"required="required" name="City">
			</div>
			<div class="col-md-6" ><label>Pincode: </label><input type="text"   placeholder="Pincode" class="form-control"required="required" name="Pincode">
			</div>
			<div class="col-md-6" ><label>Couse Types: </label><br>
			<input type="checkbox"  name="Certificate" value="Certificate"> Certificate
			<input type="checkbox" name="Diploma" value="Diploma">Diploma
			<input type="checkbox" name="Advance" value="Advance" >Advance
			<input type="checkbox" name="Degree" value="Degree" > Degree
			</div>
			<div class="col-md-6" ><label>Space: </label><input type="text" class="form-control"required="required"  name="Space" placeholder="Space in Sq.foot" ></div>
			<div class="col-md-6" ><label>No of Colleges Near By: </label><input type="text" class="form-control"required="required"  name="collegen" placeholder="1-10" ></div>
			<div class="col-md-6" ><label>No of Schools Near By: </label><input type="text" class="form-control"required="required"  name="schooln" placeholder="1-10" ></div>
			<div class="col-md-6" ><label>No of HighSchool Near By: </label><input type="text" class="form-control"required="required"  name="highschooln" placeholder="1-10" ></div>
			<div class="col-md-6" ><label>No of Faculty : </label><input type="text" class="form-control"required="required"  name="facultyn" placeholder="1-10" ></div>

			<div class="col-md-4" style=" item-aling:center; margin-left: %;" ></div>
			<div class="col-md-4" style="margin-top:12px; item-aling:center;" >	
			<label> </label><input class="btn btn-primary" type="submit" value="Submit" name="submit" >
			<label> </label><input class="btn btn-danger" type="Reset" placeholder="Reset" Value="Reset">	</div>	

			<div class="col-md-4" style=" item-aling:center; margin-left: %;" ></div>
		</form>	

</div>
<!-------------------------------Main Content End Here----------------------------->	

</div>
<?php include'include/footer.php'; ?>
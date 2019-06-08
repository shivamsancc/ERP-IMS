<title>Add Student</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
	<div class="col-md-12  Dash-main">
	<h1 style="text-align: center; color: black">Add Student</h1><hr class="Notice-line">
	<div class="add-form">
		<form method="post" action="<?= base_url('Student/add_student'); ?>" enctype="multipart/form-data"> 
		<div>
			<div class="col-md-6 " >	<label>Photo: </label>
				<img src="<?= base_url('assets/') ?>images/profile-img.jpg" class="img-responsive" /><br>
				<input type="file" placeholder="Student's Photo	"  class="btn btn-primary" name="img">
			</div>
			<div class="col-md-6" ><label>Student Name: </label><input type="text" required="required"   placeholder="Student's Name" class="form-control" name="name"></div>
		
			<div class="col-md-6" >	<label>Father's Name: </label><input type="text"  placeholder="Father's Name" class="form-control" required="required" name="fname"></div>
			<div class="col-md-6" >	<label>Mother's Name: </label><input type="text"  placeholder="Mother's Name" class="form-control" required="required" name="mname"></div>
			<div class="col-md-6" >	<label>Date of Birth: </label><input type="date"  placeholder="Date of Birth" class="form-control"required="required" name="dob"></div>
			<div class="col-md-6" >	<label>Gender: </label>
			<select placeholder="Gender" class="form-control" id="sel1" required="required" name="gender">
			<option value="none" default="default">Select</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="others">Other</option>
			</select>
			<br>
			</div>
			<div class="col-md-6" >	<label>Marital Status: </label>
			<select  placeholder="Gender" required="required"  class="form-control" id="sel1" name="mstatus">
			<option value="none" default="default">Select</option>
			<option value="single">Single</option>
			<option value="Married">Married</option>
			<option value="Divorced">Divorced</option>
			<option value="Widowed">Widowed</option> 
			</select></div>
			<div class="col-md-6" >	<label>Category: </label>
			<select required="required"   placeholder="Category" class="form-control" id="sel1" name="cat">
			<option value="none" default="default">Select</option>
			<option value="GENERAL"">GENERAL</option>
			<option value="OBC">OBC</option>
			<option value="SC/ST">SC/ST</option>
			<option value="Physically Challenged">Physically Challenged</option> 
			</select></div>
			<div class="col-md-6" >	<label>Permanent Address: </label><textarea required="required"  class="form-control" name="paddress"></textarea></div>
			<div class="col-md-6" >	<label>Correspondence  Address: </label><textarea required="required" name="caddress"  class="form-control"></textarea></div>
			<div class="col-md-6" >	<label>  Nationallity: </label><input class="form-control" required="required"  type="text" placeholder="INDIAN" readonly="readonly" value="INDIAN" name="Nationallity"></div>
			<div class="col-md-6" >	<label> E-mail: </label><input class="form-control" required="required"  type="E-mail" placeholder="info@example.com" name="email"></div>
			<div class="col-md-6" >	<label> Mobile: </label><input class="form-control" type="phone"required="required"  placeholder="Mobile" name="mobile"></div>
			<div class="col-md-6" >	<label> Alternative Mobile: </label><input class="form-control"required="required"  type="phone" placeholder="Mobile" name="amobile"></div>
			<div class="col-md-6" >	<label> Admission Date: </label><input class="form-control"required="required"  type="Date" placeholder="mobile" name="doa"></div>
			<div class="col-md-6" >	<label> Couse: </label><input class="form-control" type="textarea"required="required"  placeholder="Course" name="course"></div>

			<div class="col-md-4" style=" item-aling:center; margin-left: %;" ></div>
			<div class="col-md-4" style="margin-top:12px; item-aling:center;" >	
			<label> </label><input class="btn btn-primary" type="submit" value="Submit" name="submit" >
			<label> </label><input class="btn btn-danger" type="Reset" placeholder="Reset" Value="reset">	</div>	

			<div class="col-md-4" style=" item-aling:center; margin-left: %;" ></div>
		</form>		
	</div>	
</div>
<!-------------------------------Main Content End Here----------------------------->	

</div>
<?php include'include/footer.php'; ?>

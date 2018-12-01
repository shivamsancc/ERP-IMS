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
		<form>
		<div>
			<div class="col-md-6" ><label>Student Name: </label><input type="text"  placeholder="Student's Name" class="form-control" name=""></div>
			<div class="col-md-6 " >	<label>Photo: </label>
				<img src="<?= base_url('assets/') ?>images/profile-img.jpg" class="img-responsive" /><br>
				<input type="file" placeholder="Student's Photo	"  class="btn btn-primary" name="">
			</div>



			
			<div class="col-md-6" >	<label>Father's Name: </label><input type="text"  placeholder="Father's Name" class="form-control" name=""></div>
			<div class="col-md-6" >	<label>Mother's Name: </label><input type="text"  placeholder="Mother's Name" class="form-control" name=""></div>
			<div class="col-md-6" >	<label>Date of Birth: </label><input type="date"  placeholder="Date of Birth" class="form-control" name=""></div>
			<div class="col-md-6" >	<label>Gender: </label><select placeholder="Gender" class="form-control" id="sel1" name=""><option>Select</option><option>Male</option><option>Female</option><option>Other</option> </select><br></div>
			<div class="col-md-6" >	<label>Marital Status: </label><select  placeholder="Gender" class="form-control" id="sel1" name=""><option>Select</option><option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option> </select></div>
			<div class="col-md-6" >	<label>Category: </label><select  placeholder="Category" class="form-control" id="sel1" name=""><option>Select</option><option>GENERAL</option><option>OBC</option><option>SC/ST</option><option>Physically Challenged</option> </select></div>
			<div class="col-md-6" >	<label>Permanent Address: </label><textarea class="form-control"></textarea></div>
			<div class="col-md-6" >	<label>Correspondence  Address: </label><textarea class="form-control"></textarea></div>
			<div class="col-md-6" >	<label>  Nationallity: </label><input class="form-control" type="text" placeholder="INDIAN" readonly="readonly" name="Nationallity"></div>
			<div class="col-md-6" >	<label> E-mail: </label><input class="form-control" type="E-mail" placeholder="info@example.com" name="Nationallity"></div>
			<div class="col-md-6" >	<label> Mobile: </label><input class="form-control" type="phone" placeholder="mobile" name="Nationallity"></div>
			<div class="col-md-6" >	<label> Alternative Mobile: </label><input class="form-control" type="phone" placeholder="mobile" name="Nationallity"></div>
			<div class="col-md-6" >	<label> Admission Date: </label><input class="form-control" type="Date" placeholder="mobile" name="Nationallity"></div>
			<div class="col-md-6" >	<label> Couse: </label><input class="form-control" type="textarea" placeholder="mobile" name="Nationallity"></div>
			<div class="col-md-6" style="margin-top:12px; item-aling:center; margin-left: 41%;" >	<label> </label><input class="btn btn-primary" type="submit" value="Submit" ></div>
			<div class="col-md-6" style=" item-aling:center; margin-left: %;" >	<label> </label><input class="btn btn-danger" type="Reset" placeholder="Reset" Value="reset"></div>		

		</form>		
	</div>	
</div>
<!-------------------------------Main Content End Here----------------------------->	

</div>
<?php include'include/footer.php'; ?>

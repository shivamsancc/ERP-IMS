<title>Add Branch Manager</title>
<?php include'include/header.php'; ?>
<?php include'include/head.php'; ?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
 
<div class="col-md-12">
	<div class="">
			<?php include'include/sidebar.php'; ?>
	</div>
<!-------------------------------Main Content---------------------------------->			
	<div class="col-md-12  Dash-main">
	<h1 style="text-align: center; color: black">Add Branch Manger</h1>
	<form method="post" action="<?= base_url('Branch/add_branchmanager'); ?>" enctype="multipart/form-data"> 
		<div>
			<div class="col-md-6 " >	<label>Photo: </label>
				<img src="<?= base_url('assets/') ?>images/profile-img.jpg" class="img-responsive" /><br>
				<input type="file" placeholder="Student's Photo	"  class="btn btn-primary" name="img">
			</div>
			<div class="col-md-6" ><label>Branch Head Name: </label><input type="text" required="required"   placeholder="Branch Head Name" class="form-control" name="name"></div>
		
			<div class="col-md-6" >	<label>Father's Name: </label><input type="text"  placeholder="Father's Name" class="form-control" required="required" name="fname"></div>
			<div class="col-md-6" >	<label>Mother's Name: </label><input type="text"  placeholder="Mother's Name" class="form-control" required="required" name="mname"></div>
			<div class="col-md-6" >	<label>Date of Birth: </label><input type="date" data-date-format="DD MMMM YYYY"  placeholder="Date of Birth" class="form-control"required="required" name="dob"></div>
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
			<div class="col-md-6" >	<label> Qualification :-</label><input class="form-control"required="required"  type="text" placeholder="Qualification" name="qualification"></div>
			<div class="col-md-6" >	<label> Qualification Proof : </label><input class="form-control btn btn-primary" type="file"required="required"  placeholder="Course" name="qualificationf"></div>
			<div class="col-md-6" >	<label> Occupation : </label><input class="form-control" type="text"required="required"  placeholder="Occupation" name="Occupation"></div>
			<div class="col-md-6" >	<label> Adhaar No.: </label><input class="form-control" type="text"required="required"  placeholder="Adhaar No." name="Adhaarn"></div>
			<div class="col-md-6" >	<label> Adhaar Proof : </label><input class="form-control btn btn-primary" type="file"required="required"  placeholder="Course" name="Adhaarf"></div>
			<div class="col-md-6" >	<label> Signature  : </label><input class="form-control btn btn-primary" type="file"required="required"  placeholder="Course" name="Signature"></div>
			<div class="col-md-6" >	<label> Username : </label><input class="form-control" type="text"required="required"  placeholder="Username" name="Username"></div>
			<div class="col-md-6" >	<label> Password  : </label><input class="form-control" type="password"required="required"  placeholder="Password" name="Password"></div>
			<div class="col-md-6" >	<label>Select Branch: </label>
			<select  placeholder="Gender" required="required"  class="form-control" id="sel1" name="center">
			<option value="none" default="default">Select</option>
			<option value="single">Single</option>
			<option value="Married">Married</option>
			<option value="Divorced">Divorced</option>
			<option value="Widowed">Widowed</option> 
			</select></div>
			<div class="col-md-6" >	<label> Status  : </label>
			<select  placeholder="Gender" required="required"  class="form-control" id="sel1" name="status">
			<option value="" default="default">Select</option>
			<option value="Active">Active</option>
			<option value="Deactive">Deactive</option>
			</select>





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
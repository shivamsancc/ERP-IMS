<div class="container-fluid  admin-head">
	
	<!--Logo Section-->
	<div class="" style="width: 340px; float: left;">
		<a href="<?= base_url('dashboard'); ?>"><img  src="<?= base_url('assets/') ?>images/img-logo2.png" class="img-responsive head-logo" style="position: absolute;
    width: 251px;
    z-index: 9; left: 37px;"></a>
	</div>
	<!--Logo Section-->


	<!--Notice Section-->
		<div class="col-md-11 notice">
			
			<marquee onMouseOver="this.stop()" onMouseOut="this.start()" ><img class="marquee-icon" src="<?= base_url('assets/') ?>images/nuclear.svg"> 
			<?php foreach($marquee as $mar) { ?>
			
			<a class="Notice" href="<?php base_url();?>Main/main_notice/<?= $mar['id']; ?>"><?= $mar['title']; ?></a>
			
			<?php } ?>
			</marquee>
			
		</div>

	<!--Notice Section-->


	<!--User Section-->
			<div class="col-md-1">
					<div>
						
					</div>




					<div class="dropdown">
    <button type="button" style="background-color: #74b2de;border: none;" class=" dropdown-toggle" data-toggle="dropdown">
      <a href="#"><i class="  logout-icon fa fa-gear fa-spin "></i></a>
    </button></i>
    <div class="dropdown-menu logout">
      <a class="dropdown-item fa fa-user" href="#">  Profile</a><br>
      <a class="dropdown-item fa fa-key" href="#">  Change Password</a><br>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item fa fa-power-off" href="#">  Logout</a>
    </div>
  </div>
			</div>
	<!--User Section-->
</div>

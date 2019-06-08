
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

		<div class="col-md-12 row admin-footer">
			<div class="col-md-6 Right">
				<p>&copy; 2008-<?php echo date("d-M-Y");?> All Rights Reserved For <a href="http://www.imgglobalinfotech.com/"><img src="<?= base_url('assets/') ?>images/imgglobalinfotech.png"  class=" footer-logo"></a> </p>
			</div>

			<div class="col-md-6 ">
				<ul class="list-inline support">
					<li><a href="tel:+91-8578068253"><i class="fa fa-phone"></i></a></li>
					<li><a href="mailto:shivamanandiet@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=+918578068253&text=Hi!  i have some Problem with CITET ERP. "><i class="fa fa-whatsapp"></i></a></li>
				</ul>
			</div>
		</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>

</html>

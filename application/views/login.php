<?php
$root = "http://".$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
			<link rel="shortcut icon" href="https://www.citet.org/wp-content/uploads/2018/06/cropped-citet-logo-32x32.png">
			<meta http-equiv=Content-type content="text/html; charset=utf-8">
			<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Welcome to CITET ERP Intitute Management System </title>
<!--  CSS -->
	<style type="text/css">
		.box {
   position: relative;
   top: 0;
   opacity: 1;
   float: left;
   padding: 60px 50px 40px 50px;
   width: 100%;
   background: #fff;
   border-radius: 10px;
   transform: scale(1);
   -webkit-transform: scale(1);
   -ms-transform: scale(1);
   z-index: 5;
}

.box.back {
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   top: -20px;
   opacity: .8;
   z-index: -1;
}

.box:before {
   content: "";
   width: 100%;
   height: 30px;
   border-radius: 10px;
   position: absolute;
   top: -10px;
   background: rgba(255, 255, 255, .6);
   left: 0;
   transform: scale(.95);
   -webkit-transform: scale(.95);
   -ms-transform: scale(.95);
   z-index: -1;
}

.overbox .title {
   color: #fff;
}

.overbox .title:before {
   background: #fff;
}

.title {
   width: 100%;
   float: left;
   line-height: 46px;
   font-size: 34px;
   font-weight: 700;
   letter-spacing: 2px;
   color: #23ADE6;
   position: relative;
}

.title:before {
   content: "";
   width: 5px;
   height: 100%;
   position: absolute;
   top: 0;
   left: -50px;
   background: #E2A021;
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button .button.login button i.fa,
.material-button .shape:before,
.material-button .shape:after,
.button.login button {
   transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 300ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 300ms cubic-bezier(.4, 0, .2, 1);
}

.material-button,
.alt-2,
.material-button .shape,
.alt-2 .shape,
.box {
   transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -webkit-transition: 400ms cubic-bezier(.4, 0, .2, 1);
   -ms-transition: 400ms cubic-bezier(.4, 0, .2, 1);
}

.input,
.input label,
.input input,
.input .spin,
.button,
.button button {
   width: 100%;
   float: left;
}

.input,
.button {
   margin-top: 30px;
   height: 70px;
}

.input,
.input input,
.button,
.button button {
   position: relative;
}

.input input {
   height: 60px;
   top: 10px;
   border: none;
   background: transparent;
}

.input input,
.input label,
.button button {
   font-family: 'Roboto', sans-serif;
   font-size: 24px;
   color: rgba(0, 0, 0, 0.8);
   font-weight: 300;
}

.input:before,
.input .spin {
   width: 100%;
   height: 1px;
   position: absolute;
   bottom: 0;
   left: 0;
}

.input:before {
   content: "";
   background: rgba(0, 0, 0, 0.1);
   z-index: 3;
}

.input .spin {
   background: #ED2553;
   z-index: 4;
   width: 0;
}

.overbox .input .spin {
   background: rgba(255, 255, 255, 1);
}

.overbox .input:before {
   background: rgba(255, 255, 255, 0.5);
}

.input label {
   position: absolute;
   top: 10px;
   left: 0;
   z-index: 2;
   cursor: pointer;
   line-height: 60px;
}

.button.login {
   width: 60%;
   left: 20%;
}

.button.login button,
.button button {
   width: 100%;
   line-height: 64px;
   left: 0%;
   background-color: transparent;
   border: 3px solid rgba(0, 0, 0, 0.1);
   font-weight: 900;
   font-size: 18px;
   color: rgba(0, 0, 0, 0.2);
}

.button.login {
   margin-top: 30px;
}

.button {
   margin-top: 20px;
}

.button button {
   background-color: #fff;
   color: #ED2553;
   border: none;
}

.button.login button.active {
   border: 3px solid transparent;
   color: #fff !important;
}

.button.login button.active span {
   opacity: 0;
   transform: scale(0);
   -webkit-transform: scale(0);
   -ms-transform: scale(0);
}

.button.login button.active i.fa {
   opacity: 1;
   transform: scale(1) rotate(-0deg);
   -webkit-transform: scale(1) rotate(-0deg);
   -ms-transform: scale(1) rotate(-0deg);
}

.button.login button i.fa {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   line-height: 60px;
   transform: scale(0) rotate(-45deg);
   -webkit-transform: scale(0) rotate(-45deg);
   -ms-transform: scale(0) rotate(-45deg);
}

.button.login button:hover {
   color: #FFFF;
   border-color: #E19D19;
   background-color: #538EC9;
}

.button {
   margin: 40px 0;
   overflow: hidden;
   z-index: 2;
}

.button button {
   cursor: pointer;
   position: relative;
   z-index: 2;
}

.pass-forgot {
   width: 100%;
   float: left;
   text-align: center;
   color: rgba(0, 0, 0, 0.4);
   font-size: 18px;
}

.click-efect {
   position: absolute;
   top: 0;
   left: 0;
   background: #ED2553;
   border-radius: 50%;
}

.overbox {
   width: 100%;
   height: 100%;
   position: absolute;
   top: 0;
   left: 0;
   overflow: inherit;
   border-radius: 10px;
   padding: 60px 50px 40px 50px;
}

.overbox .title,
.overbox .button,
.overbox .input {
   z-index: 111;
   position: relative;
   color: #fff !important;
   display: none;
}

.overbox .title {
   width: 80%;
}

.overbox .input {
   margin-top: 20px;
}

.overbox .input input,
.overbox .input label {
   color: #fff;
}

.overbox .material-button,
.overbox .material-button .shape,
.overbox .alt-2,
.overbox .alt-2 .shape {
   display: block;
}

.material-button,
.alt-2 {
	margin-top: 31px;
   width: 140px;
   height: 140px;
   border-radius: 50%;
   background: #E2A021;
   position: absolute;
   top: 40px;
   right: -70px;
   cursor: pointer;
   z-index: 100;
   transform: translate(0%, 0%);
   -webkit-transform: translate(0%, 0%);
   -ms-transform: translate(0%, 0%);
}
.alt-2:hover {
	-webkit-transform: rotate(360deg); /* Safari */
    transform: rotate(360deg);


}
.material-button .shape,
.alt-2 .shape {
   position: absolute;
   top: 0px;
   right: 0;
   width: 100%;
   height: 100%;
}


.material-button .shape:before,
.alt-2 .shape:before,
.material-button .shape:after,
.alt-2 .shape:after {
   content: "";
   background: #fff;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%) rotate(360deg);
   -webkit-transform: translate(-50%, -50%) rotate(360deg);
   -ms-transform: translate(-50%, -50%) rotate(360deg);
}
.material-button .shape:hover,
.alt-2 .shape:hover,
.material-button .shape:hover,
.alt-2 .shape:hover {
   -webkit-transform: rotate(360deg); /* Safari */
    transform: rotate(36s0deg);
}

.material-button .shape:before,
.alt-2 .shape:before {
   width: 25px;
   height: 4px;
}

.material-button .shape:after,
.alt-2 .shape:after {
   height: 25px;
   width: 4px;
}

.material-button.active,
.alt-2.active {
   top: 50%;
   right: 50%;
   transform: translate(50%, -50%) rotate(0deg);
   -webkit-transform: translate(50%, -50%) rotate(0deg);
   -ms-transform: translate(50%, -50%) rotate(0deg);
}

body {
   background-image: url(http://localhost/erp/assets/images/login_bg.jpg);
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   min-height: 100vh;
   font-family: 'Roboto', sans-serif;
}

body,
html {
   overflow: hidden;
}

.materialContainer {
   width: 100%;
   max-width: 460px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -webkit-transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
}

*,
*:after,
*::before {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   margin: 0;
   padding: 0;
   text-decoration: none;
   list-style-type: none;
   outline: none;
}		
	</style>
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>images/favicon.png">

<!-- All JS Included --> 
	<script src="<?= base_url('assets/') ?>jquery/jquery-3.1.1.min.js"></script> 
	<script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.meanmenu.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/plugins.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.plugin.min.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.countdown.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- All JS Included --> 
	<script src="<?= base_url('assets/') ?>js/custom.js"></script>
</head>
<body>
<div class="loader"></div>
<!------------------------------------------------------------Login Body------------------------------------------------------>
<div class="materialContainer">

<form  method="post" action="<?= base_url('main/login'); ?>">
   <div class="box">

      <div class="title">LOGIN: ERP</div>

      <div class="input">
         <label for="name" >Username</label>
         <input type="text" required="required" name="name" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input  required="required" type="password" name="pass" id="pass">
         <span class="spin"></span>
      </div>

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>

      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>
   </form>
<!------------------------------------------------------------Login Body------------------------------------------------------>
<!------------------------------------------------------------Singup Body------------------------------------------------------>
   <form method="post" action="<?= base_url('main/register'); ?>">
   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

     <!-- <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>-->

      <div class="button">
         <button><span>  Submit</span></button>
      </div>

      </form>
   </div>

</div>






<body>
<!------------------------------------------------------------Login Body Ends ------------------------------------------------------>
<script type="text/javascript">
	$(function() {

   $(".input input").focus(function() {

      $(this).parent(".input").each(function() {
         $("label", this).css({
            "line-height": "18px",
            "font-size": "18px",
            "font-weight": "100",
            "top": "0px"
         })
         $(".spin", this).css({
            "width": "100%"
         })
      });
   }).blur(function() {
      $(".spin").css({
         "width": "0px"
      })
      if ($(this).val() == "") {
         $(this).parent(".input").each(function() {
            $("label", this).css({
               "line-height": "60px",
               "font-size": "24px",
               "font-weight": "300",
               "top": "10px"
            })
         });

      }
   });

   $(".button").click(function(e) {
      var pX = e.pageX,
         pY = e.pageY,
         oX = parseInt($(this).offset().left),
         oY = parseInt($(this).offset().top);

      $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
      $('.x-' + oX + '.y-' + oY + '').animate({
         "width": "500px",
         "height": "500px",
         "top": "-250px",
         "left": "-250px",

      }, 600);
      $("button", this).addClass('active');
   })

   $(".alt-2").click(function() {
      if (!$(this).hasClass('material-button')) {
         $(".shape").css({
            "width": "100%",
            "height": "100%",
            "transform": "rotate(0deg)"
         })

         setTimeout(function() {
            $(".overbox").css({
               "overflow": "initial"
            })
         }, 600)

         $(this).animate({
            "width": "140px",
            "height": "140px"
         }, 500, function() {
            $(".box").removeClass("back");

            $(this).removeClass('active')
         });

         $(".overbox .title").fadeOut(300);
         $(".overbox .input").fadeOut(300);
         $(".overbox .button").fadeOut(300);

         $(".alt-2").addClass('material-buton');
      }

   })

   $(".material-button").click(function() {

      if ($(this).hasClass('material-button')) {
         setTimeout(function() {
            $(".overbox").css({
               "overflow": "hidden"
            })
            $(".box").addClass("back");
         }, 200)
         $(this).addClass('active').animate({
            "width": "700px",
            "height": "700px"
            
         });

         setTimeout(function() {
            $(".shape").css({
               "width": "50%",
               "height": "50%",
               "transform": "rotate(45deg)"
            })

            $(".overbox .title").fadeIn(300);
            $(".overbox .input").fadeIn(300);
            $(".overbox .button").fadeIn(300);
         }, 700)

         $(this).removeClass('material-button');

      }

      if ($(".alt-2").hasClass('material-buton')) {
         $(".alt-2").removeClass('material-buton');
         $(".alt-2").addClass('material-button');
      }

   });

});
</script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

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

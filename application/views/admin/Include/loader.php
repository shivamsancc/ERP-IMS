 
  <div id="loading" >
  <img id="loading-image" src="<?= base_url('assets/') ?>loader.gif" alt="Loading..." />
</div>
 
 
 <style>
	  
	  #loading {
  width: 100%;
  height: 100%;
  opacity: 0.8;
  background-color: #fff;
  color:white;
  z-index: 99;
  display: block;
   position: fixed;

}

#loading-image{
	  width: 40%;
     height: 40%;
	opacity: 0.8;
	 top: 30%;
  left: 28%;
	background-color: #fff;
	position: absolute;
	
}


	  
	  </style>
	  
	  
	  <script>
	  
	  $(document).ready(function() {
//hide on start
 $('#loading').hide();

//call function
do_something();


 function do_something()
 {
  $("#loading").show();

  var request = $.ajax({
  url: "your_url",
  type: "POST",
  data: {name : "name"},
  dataType: "json"
 });

 request.done(function(msg) {
 $("#loading").hide();
   alert( "Data Saved: " + msg );
});

 request.fail(function(jqXHR, textStatus) {
 $("#loading").hide();
   //alert( "Request failed: " + textStatus );
 });
 }

});
	  </script>
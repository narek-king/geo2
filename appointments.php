<?php
include 'includes/connect.php';
//$query =   mysqli_query("SELECT * FROM `content` WHERE 1");
//$fetch = mysql_fetch_array($query);

$result = '';
foreach ($db->query('SELECT * FROM `content` WHERE 1') as $row){
$result .=  $row['lat-lng'];
$result .= ', ';
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Medical Theams">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Medical Themes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.selectbox.css">
    <link rel="stylesheet" href="css/custom-variation2.css">
    <link rel="stylesheet" href="css/responsive.css"> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    

<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript">

"use strict";
function sendContact() {

    var valid;	
    valid = validateContact1();
    if(valid) {
		
        var email = $("#apemail").val();
        var tel = $("#aptel").val();
       
        var comment = $("#apcomment").val();
var country_id=$("#country_id").val();
var check=$("#hdch").val();

var apfname = $("#apfname").val();
var aplname = $("#aplname").val();
var apdate = $("#apdate").val();
var apdob = $("#apdob").val();

 var dataString = 'apemail=' + email + '&aptel=' + tel + '&apcomment=' +comment + '&country_id=' +country_id + '&check=' + check + '&apfname=' + apfname + '&aplname=' + aplname + '&apdate=' + apdate + '&apdob=' + apdob ;
        
        jQuery.ajax({
            url: "email.php",
            data:dataString,
            type: "POST",
            success:function(data){
                $(".success").html(data);
            },
            error:function (){}
        });
    }


}

function co(val){
var hdch=document.getElementById("hdch").value;

if((hdch.search(val))>0){
document.getElementById("hdch").value=hdch.replace(val, " ");
}
else{
document.getElementById("hdch").value=document.getElementById("hdch").value+" "+val;
}
return;
}


</script>

</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="outer-sync var2">
      <!--==================================
       		 Header parts starts here
        ==================================-->
	<header>
    	<div class="container">
        <div class="row">
        <div class="col-sm-12 top-strip">
            <h2 class="delt-bord">Email :<a href="appointments.php#">info@medicaltheme.com</a></h2>
            <h2>Call :<a href="appointments.php#">  +374 10 300303</a></h2>
        </div><!-- /.col-sm-12 -->
        <div class="col-sm-12 bottom-strip p-both">
        <div class="col-sm-3 logo">
        	<a href="appointments.php#"><img src="images/logo-var2.png" alt="medical theams" /></a>
        </div><!-- /.col-sm-3 -->
        <div class="col-sm-9 navigation">
        	<nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown drop">
                      <a href="appointments.php#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu" role="menu">
                      <li class="drop-down-bg"></li>
                        <li><a href="index.html">Homepage variation-1</a></li>
                        <li><a href="index-variation1.html">Homepage variation-2</a></li>
                        <li><a href="index-variation2.html">Homepage variation-3</a></li>
                      </ul>
                    </li>
                    <li><a href="about.html">about us</a></li>
                    <li><a href="doctor.html">doctors</a></li>
                    <li><a href="service.html">services</a></li>
                    <li><a href="news.html">news</a></li>
                    <li class="dropdown active drop">
                      <a href="appointments.php#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">pages</a>
                      <ul class="dropdown-menu" role="menu">
                      <li class="drop-down-bg"></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog details</a></li>
                        <li><a href="doctor-timetable.html">Doctors timetable</a></li>
                        <li><a href="error404.html">404 error</a></li>
                        <li><a href="appointments.php">Appointment</a></li>
                      </ul>
                    <li><a href="contact.html" class="p-r">contact us</a></li>
                    <li><a href="appointments.php" class="lst-head">Appointment</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div><!-- /.col-sm-9 -->
        </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- #header -->                                            

      <!--==================================
       		 Header parts ends here
       	  ==================================-->
      <!--==================================
       		Banner parts starts here
          ==================================-->
	<div class="inner-banner">
    	<img src="images/appointment.jpg" alt="banner" />
        <div class="container">
        <div class="row">
         <h2>appointments</h2>
        </div>
        </div>
    </div><!-- /.banner -->
    
      <!--==================================
       		Banner parts ends here
          ==================================-->
      <!--==================================
       		news parts starts here
          ==================================-->    
    <div class="first-section p82-topbot">
    <div class="container">
    <div class="row">
       	<div class="col-sm-12 jst-cov">
        	<h2 class="title-grp"><span>make</span>appointments</h2>
        </div><!-- /col-sm-12 -->
		<div id="map" style = "height: 500px;    width: 1000px; margin-bottom:20px;"></div>
        <div style = "height: 100px;    width: 1000px;"><?php echo $result;?></div>


        <div class="col-sm-6 appointments">
        <form>
        	<select name="country_id" id="country_id" tabindex="1">
			<option value="">Select Department *</option>
				<option value="USA">USA</option>
				<option value="Canada">Canada</option>
				<option value="France">France</option>
				<option value="Spain">Spain</option>
				<option value="Italy">Italy</option>
			</select>
        	<input type="text" placeholder="Last Name*" id="aplname" />
            <input type="text" placeholder="Phone*" id="aptel" />
            <input type="text" placeholder="Date of birth*" id="apdob" />
        </form>
        </div><!-- /.appointments -->
        <div class="col-sm-6 appointments">
        <form>
        	<input type="text" class="m0" placeholder="Fast Name*" id="apfname" />
            <input type="text" placeholder="Email*" id="apemail" />
           <!-- <form action="" class="form-horizontal"  role="form"> -->
            <fieldset>
                <div class="form-group">
                    <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                        <input type="text" placeholder="Appointment date*" value="" readonly id="apdate">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" />
                </div>
            </fieldset>
    		<!-- </form> -->
            <label class="nms">Sex :</label>
            </form>
            <div class="squaredOne">
                <input type="checkbox" value="Male" id="squaredOne" name="check" onclick="co(this.value);" />
                <label for="squaredOne"></label>
            </div>
            <label class="nms">Male</label>
            <div class="squaredtwo">
                <input type="checkbox" value="Female" id="squaredtwo" name="check" onclick="co(this.value);"/>
                <label for="squaredtwo"></label>
            </div>
            <label class="nms">Female </label>
            <div class="squaredthree">
                <input type="checkbox" value="Child" id="squaredthree" name="check" onclick="co(this.value);"/>
                <label for="squaredthree"></label>
            </div>
            <label class="nms">Child </label>

        </div><!-- /.appointments -->
    	<div class="col-sm-12 appointments">
        <form>
			<input type="hidden" id="hdch">
        	<textarea placeholder="Message*" id="apcomment"></textarea>
<div class="success"></div>
<div id="ferror"></div>
		
            <button type="button" onclick="sendContact();">submit</button>
		</form>
        </div><!-- /.col-sm-12 --> 



    </div><!-- /.row -->
    </div><!-- /.container -->  
    </div><!-- /.service-section --> 
    
     <!--==================================
       		servieceection parts ends here
          ==================================-->

     <!--==================================
       		footer parts starts here
          ==================================-->     
          
    <footer class="footer p82-topbot">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3 all-need">
            <h2>Address</h2>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="faddress">
               <span>Address :</span> Medical Theme<br>
                22, North Avenue post here<br>
                New York city 55862<br>
               <span>Call :</span> +8856 9984 222<br>
               <span>Email :</span> <a href="mailto:info@medicaltheme.com">info@medicaltheme.com</a>
            </div>
        </div><!-- col-sm-3 -->
        <div class="col-sm-6 col-md-3 col-lg-3 all-need list-styles">
    		<h2>Service</h2>
            <ul>
                <li><a href="appointments.php#">Cardiology</a></li>
                <li><a href="appointments.php#">Neurology</a></li>
                <li><a href="appointments.php#">Cardiac Clinic</a></li>
                <li><a href="appointments.php#">Laboratory Analysis</a></li>
                <li><a href="appointments.php#">Dental Clinic</a></li>
                <li><a href="appointments.php#">Gynecological Clinic</a></li>
                <li><a href="appointments.php#">Psychological Counseling</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 all-need list-styles">
    		<h2>Our Doctors</h2>
            <ul>
                <li><a href="appointments.php#">Dr. Vasudevayyar</a></li>
                <li><a href="appointments.php#">Dr. Yardley Rahman</a></li>
                <li><a href="appointments.php#">Dr. sanusha nair</a></li>
                <li><a href="appointments.php#">Dr. Rajagopalachari</a></li>
                <li><a href="appointments.php#">Dr. Samvritha sunil</a></li>
                <li><a href="appointments.php#">Dr. Krishnayyar Vasudev</a></li>
                <li><a href="appointments.php#">Dr. Narahari</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 all-need list-styles">
    		<h2>news letter</h2>
 <form action="http://bcweb.us10.list-manage.com/subscribe/post?u=7a215c500529fe9800d202863&amp;id=157e5897be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="news-letter">
            	<input type="text" placeholder="Enter Email Address" name="EMAIL" id="mce-EMAIL"/>
<div id="mce-responses" class="clear">
		<div class="block-hide response" id="mce-error-response"></div>
		<div class="block-hide response" id="mce-success-response"></div>
	</div>   

                <button type="submit" name="subscribe" id="mc-embedded-subscribe">go</button>
            </div><!-- /.new-letter -->
</form>
        </div><!-- col-sm-3 -->
    </div><!-- ./row -->
    </div><!-- /.container --> 
           
    </footer>
    <div class="copyrights">
    	<p>Medical Theme © 2015 | All Rights Reserved</p>
    </div><!-- /.copy-rights -->
                   
</div><!-- /.outer-sync -->


    <script src="js/vendor/jquery-min.js"></script>
    <script src="js/vendor/modernizr.custom.68477.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
	<script type="text/javascript">
	"use strict";
		$(function () {
			$("#country_id").selectbox();
		});
	</script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript">
	"use strict";
        $('.form_date').datetimepicker({
            language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
	
	    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.
var pos;
var map;
var infoWindow2;
var marker;
var hospitals = JSON.parse(<? echo $result;?>);
console.log(hospitals);
function initMap() {
	
   map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.1796, lng: 44.5},
    zoom: 12
  });
  infoWindow2 = new google.maps.InfoWindow();

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
		pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
	  

      
	var  markerPlace = new google.maps.Marker({
    map: map,
    position: pos,	
	icon: "https://cdn0.iconfinder.com/data/icons/flat-color-icons/504/manager-64.png"
  });
	var infoWindow = new google.maps.InfoWindow({map: map});
	 infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
  //findes HOspitals
  

 var pyrmont = map.getCenter();
  
    var service = new google.maps.places.PlacesService(map);
  service.nearbySearch({
    location: pyrmont,
    radius: 5000,
    types: ['hospital', 'health']
  }, callback);
  
  
   google.maps.event.addListener(marker, 'click', function() {
    infowindow2.setContent("text");
    infowindow2.open(map, this);
  });
  
  function callback(results, status) {
  if (status === google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
   marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });
}

 


//end of mapinit()
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');

}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSKkZQaWzTLuxuk1aYJQOgc8xVOKysIpg&signed_in=true&libraries=places&callback=initMap" async defer></script>
  
	
</body>
</html>

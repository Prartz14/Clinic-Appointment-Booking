<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MedLife</title>
<link href="front-end/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="front-end/style/style.css" rel="stylesheet">
</head>
<body> 
<div class="nav navbar-default box1" id="grad" style="padding:2% 3% 0% 3%">
<div class=" navbar-header navbar-brand pos_brand"><img src="front-end/Image/logo.png" width="200"/></div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<div class="nav collapse navbar-collapse" id="collapse1">
      <ul class="nav navbar-nav">
		<li><a href="home" style="text-decoration:none;"><p  class=" cwhite p2 tag f20">Home</p></a></li>
		<li><a href="about" style="text-decoration:none;"><p  class=" cwhite tag p2 f20">About</p></a></li>
		<li><a href="doctors" style="text-decoration:none;"><p  class=" cwhite tag p2 f20">Doctors</p></a></li>
		<li><a href="contactus" style="text-decoration:none;"><p  class=" cwhite tag p2 f20">Contact Us</p></a></li>
		
		
<!--li><div class="" style="position:relative;left:60px;" class="vertical">
<p style="padding-left:6%;padding-top:2%" ><!--img src="front-end/Image/mail1.png" width="30"   />  medlife@gmail.com</li>
 <li><img src="front-end/Image/phone1.png" width="33" /> 080 46837034</li></p--->
</ul>
</div>
<div class="nav navbar-right">
 <?php if($data['uid']=='0'){?>
	<a role="button" href="login" class="btn btn-default blue cwhite format_login tag">Register/Login</a>
<?php } else { ?>
 <a href="myacc" role="button" class="btn btn-default purple cwhite myacc_pad"><img src="front-end/Image/myacc.png" width="30"> My Account</a>
		<a role="button" href="patient_logout" class="btn btn-default blue cwhite format_login tag">Logout</a>

<?php } ?>
</div>



</div>
<button onclick="topFunction()" id="myBtn" title="Back to top">Top</button>






		



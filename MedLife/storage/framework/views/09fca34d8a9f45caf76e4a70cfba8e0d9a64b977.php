<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
<style>
.error{color:red}
</style>
</head>
<body >
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 grey" style="margin:none">
<div class="nav navbar-default"  id="grad">
<div class="nav-brand">
<img src="back-end/Image/logofooter.png" class="logo_brand" width="200" >
</div>
<div class="nav navbar-right log">
<ul class="nav">
<li class=""><a href="logout" role="button" class="btn btn-default"  >Logout</a>
  </li>
  </ul>
</div>
</div>

<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" id="grad1" style="padding-bottom:18%" >
<div class="nav navbar-default" style="background:none">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="home"><p class="cwhite ">ADMIN</p></a>
<div>
<ul class="nav collapse navbar-collapse" id="collapse2">
<li><a href="dashboard" role="button" class="btn btn-default w100  cwhite blue bnone left" style="margin-bottom:3%;margin-top:25%;"><img src="back-end/Image/dash.png" class="img-circle" width="30"/> Dashboard</a></li>
<button data-toggle="collapse" data-target="#master" class=" btn w100  cwhite blue bnone left btn-default " style="margin-bottom:3%;margin-top:10%"><img src="back-end/Image/master1.png" class="img-circle" width="30"/> Master <span class="caret"></span></button>
<ul id="master" class="collapse nav">
<li><a href="speciality" role="button" class="btn btn-default w100  cwhite blue bnone left menu" style="margin-bottom:3%" ><img src="back-end/Image/spec.png" class="img-circle" width="20" /> Speciality</a></li>
<li><a href="doctorsb" role="button" class="btn btn-default w100  cwhite blue bnone left menu" ><img src="back-end/Image/doc1.png" class="img-circle" width="30"/> Doctors</a></li>
</ul>
<li><a href="bookingsb" role="button" class="btn btn-default w100 blue cwhite bnone left menu" style="margin-bottom:3%;margin-top:10%"><img src="back-end/Image/book.png" class="img-circle" width="30"/> Bookings </a></li>
<li><a href="password" role="button" class="btn btn-default blue w100 bnone cwhite left menu" style="margin-bottom:3%;margin-top:10%"><img src="back-end/Image/key.png" class="img-circle" width="30"/> Change Password</a></li>
</ul>
</div>
</div>
</div>









<!--h4 class="cwhite center">ADMIN</h4>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<a href="dashboard" role="button" class="btn btn-default w100  cwhite blue bnone left" style="margin-bottom:3%;margin-top:10%;"><img src="back-end/Image/dash.png" class="img-circle" width="30"/> Dashboard</a>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle blue cwhite menu w100 bnone left" type="button" style="margin-bottom:3%;margin-top:10%" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <img src="back-end/Image/master1.png" class="img-circle" width="30"/> Master
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu menu" aria-labelledby="dropdownMenu1">
    <li><a href="speciality">Specialities</a></li>
    <li><a href="#">Doctors</a></li>
  </ul>
</div>
<a href="speciality" role="button" class="btn btn-default w100 blue cwhite bnone left menu" style="margin-bottom:3%;margin-top:10%"><img src="back-end/Image/book.png" class="img-circle" width="30"/> Bookings </a>
<a href="passwordb" role="button" class="btn btn-default blue w100 bnone cwhite left menu" style="margin-bottom:3%;margin-top:10%"><img src="back-end/Image/key.png" class="img-circle" width="30"/> Change Password</a>
</div>
</div--->
<div id="loadData">
<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 purple cwhite" style="padding-top:2%;margin-top:2%;padding-bottom:15%">
<h3 style="text-align:center">Dashboard</h3>
<div class="col-md-11 col-md-offset-1" style="padding:3% 0% 5% 7%">

<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12 white" style="padding:3%;margin-bottom:4%;margin-right:4%">
<p style="color:black;font-weight:900;font-size:25px"><?php echo e($data['speccount']); ?></p>
<p style="color:grey">Specialities</p>
</div>
<div class="col-md-3  col-lg-3 col-sm-12 col-xs-12 white" style="padding:3%;margin-bottom:4%;margin-right:4%">
<p style="color:black;font-weight:900;font-size:25px"><?php echo e($data['doccount']); ?></p>
<p style="color:grey">Doctors</p>
</div>
<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 white" style="padding:3%;margin-bottom:2%;margin-right:4%">
<p style="color:black;font-weight:900;font-size:25px"><?php echo e($data['bookcount']); ?></p>
<p style="color:grey">Bookings</p>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 blue cwhite">
<p><center>© 2022 MedLife. All rights reserved.</center></p>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="back-end/js/bootstrap.min.js"></script>
<script>
	$('.menu').click(function(e)
	{
		e.preventDefault();
		$('#loadData').load($(this).attr('href'));
	});
</script>
</body>
</html><?php /**PATH C:\Users\HP\medcare\resources\views/back-end/dashboard.blade.php ENDPATH**/ ?>
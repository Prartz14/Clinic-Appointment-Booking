<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>
<link href="front-end/css/bootstrap.min.css" rel="stylesheet">
<link href="front-end/style/style.css" rel="stylesheet">
</head>
<style>
.error{color:red}
</style>
<body >
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 col-sm-12 col-xs-12 reg_pad bor1" id="grad" style="padding-bottom:1%;border-radius:10%" >
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 logo_pos" ><img src="front-end/Image/logofooter.png" width="300"/>
<h5 class="tag_pos">The Power To Heal</h5>
</div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
<h2 class="head_pos p2">Patient Registration Form</h2>
<form id="registerform">
<input type="hidden" name="patient_id" id="patient_id">
<input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
<div class="login-box-msg">
</div>
<div class="form-group cwhite">
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="registerfname">First Name</label>
<input type="text" class="form-control register_pad" name="registerfname" id="registerfname" placeholder="Enter First Name" ></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="registerlname">Last Name</label>
<input type="text" class="form-control register_pad" name="registerlname" id="registerlname" placeholder="Enter Last Name" ></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="registergender">Gender</label>
<select class="form-control register_pad " id="registergender" name="registergender">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="registerdob">Date of birth</label>
<input type="date" class="form-control register_pad" id="registerdob" name="registerdob"></div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="registeremail">Email Address</label>
<input type="email" class="form-control register_pad" id="registeremail" name="registeremail" placeholder="Enter your email address">
</div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="registercontact">Contact Number</label>
<input type="text" class="form-control register_pad" id="registercontact" name="registercontact" placeholder="Enter your phone number"></div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<label for="registerpassword">Password</label></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<input type="password" class="form-control register_pad" name="registernpassword" id="registernpassword" placeholder="Enter New Password"></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<input type="password" class="form-control register_pad" name="registercpassword" id="registercpassword" placeholder="Confirm New Password"></div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<center><button href="login" class="btn btn-default btn-lg bnone cwhite purple det h1 register_button" style="margin-bottom:2%">Register</button></center></div>
<a class="center cwhite link" href="login"><h5>Already have an account? Log in</h5></a>
</div>
</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="back-end/js/bootstrap.min.js"></script>
<script src="back-end/js/jquery.validate.min.js"></script>
<script>
	
	Flag=0;
	$('.register_button').click(function(e)
			{
				e.preventDefault();
				$("#registerform").validate({
					rules:{
						registerfname:
						{
							required:true
							
						},
						registerlname:
						{
							required:true
							
						},
						registergender:
						{
							
							required:true
						},
						registerdob:
						{
							required:true
							
						},
						registeremail:
						{
							required:true
							
						},
						registercontact:
						{
							required:true
							
						},
						registernpassword:
						{
							required:true
							
						},
						registercpassword:
						{
							required:true,
							equalTo:'#registernpassword'
							
						}
					},
					messages:
					{
						registerfname:
						{
							required: "Please Enter First Name"
							
						},
						registerlname:
						{
							required: "Please Enter Last Name"
							
						},
						registergender:
						{
							required: "Please Enter Gender"
							
						},
						registerdob:
						{
							required: "Please Enter Date of Birth"
							
						},
						registeremail:
						{
							required: "Please Enter Email Address"
							
						},
						registercontact:
						{
							required: "Please Enter Contact Number"
							
						},
						registernpassword:
						{
							required: "Please Enter New Password"
							
						},
						registercpassword:
						{
							required: "Please Confirm Password",
							equalTo:"Passwords not matching"
							
						}
						
					}  
					
				});
				if($("#registerform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"registerinsert",
							type:"POST",
							data:$('#registerform').serialize(), 
							success:function(data)
							{
							   
								if(data==0)
								{
									alert('Successfully Registered');
									window.location.assign('login');
								}
								else
								{
							$('.login-box-msg').html("<span style='color:red'>Account already exists with this Email-Id. </span>");
									
								}
							}
						});
					}
				}
			});
</script>
</body>
</html>
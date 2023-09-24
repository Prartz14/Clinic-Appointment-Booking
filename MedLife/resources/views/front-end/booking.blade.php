<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bookings</title>
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
<h2 class="head_pos p2">Book Appointment</h2>
<form id="bookingform">
<input type="hidden" name="booking_id" id="booking_id">
<input type="hidden" name="pid" id="pid" value="{{$data['uid']}}">
<input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
<div class="form-group cwhite">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
<label for="bookingname">Patient Name</label>
<input type="text" class="form-control " name="bookingname" id="bookingname" placeholder="Enter your Full Name" style="margin-bottom:2%"></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="bookingage">Age</label>
<input type="integer" class="form-control register_pad" name="bookingage" id="bookingage" placeholder="Enter your Age" ></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="bookinggender">Gender</label>
<select class="form-control register_pad " id="bookinggender" name="bookinggender">
<option>Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="bookingemail">Email Address</label>
<input type="email" class="form-control register_pad" id="bookingemail" name="bookingemail" placeholder="Enter your email address">
</div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="bookingcontact">Contact Number</label>
<input type="text" class="form-control register_pad" id="bookingcontact" name="bookingcontact" placeholder="Enter your phone number"></div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="bookingspeciality">Doctor's Speciality</label>
<input type="text" class="form-control register_pad" name="bookingspeciality" id="bookingspeciality" value="{{$data['doctorloop']->spname}} "></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="bookingdoctor">Doctor's Name</label>
<input type="text" class="form-control register_pad" name="bookingdoctor" id="bookingdoctor" value="{{$data['doctorloop']->name}} "></div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="bookingdate">Appointment Date</label>
<input type="date" class="form-control register_pad" name="bookingdate" id="bookingdate"  ></div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<label for="bookingtime">Appointment Timings</label>
<input type="time" class="form-control register_pad" name="bookingtime" id="bookingtime" ></div>

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<?php if ($data['uid']=='0')
	{
		?>
<center><a href="login" type="submit" class="btn btn-default btn-lg cwhite purple det h1 " style="margin-bottom:2%">Book Now</a></center></div>
	<?php }
	else
	{?>
<center><button type="submit" class="btn btn-default btn-lg cwhite purple det h1 bookingbook" style="margin-bottom:2%">Book Now</button></center></div>
	<?php }?>

</div>
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="back-end/js/bootstrap.min.js"></script>
<script src="back-end/js/jquery.validate.min.js"></script>
<script>
	
	Flag=0;
	$('.bookingbook').click(function(e)
			{
				e.preventDefault();
				$("#bookingform").validate({
					rules:{
						bookingname:
						{
							required:true
							
						},
						bookingage:
						{
							required:true
							
						},
						bookinggender:
						{
							
							required:true
						},
						bookingcontact:
						{
							required:true
							
						},
						bookingemail:
						{
							required:true
							
						},
						bookingspeciality:
						{
							required:true
							
						},
						bookingdoctor:
						{
							required:true
							
						},
						bookingdate:
						{
							required:true
							
							
						},
						bookingtime:
						{
							required:true
						
							
						}
					},
					messages:
					{
						bookingname:
						{
							required: "Please Enter Patient Name"
							
						},
						bookingage:
						{
							required: "Please Enter Age"
							
						},
						bookinggender:
						{
							required: "Please Select Gender"
							
						},
						bookingspeciality:
						{
							required: "Please Enter Speciality"
							
						},
						bookingemail:
						{
							required: "Please Enter Email Address"
							
						},
						bookingcontact:
						{
							required: "Please Enter Contact Number"
							
						},
						bookingdoctor:
						{
							required: "Please Enter Doctor Name"
							
						},
						bookingdate:
						{
							required: "Please Enter Date"
							
							
						},
						bookingtime:
						{
							required: "Please Enter Timings"
							
							
						}
						
					}  
					
				});
				if($("#bookingform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"bookinginsert",
							type:"POST",
							data:$('#bookingform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Booked Appointment');
								location.reload();
								
							}
						});
					}
				}
			});
</script>
</body>
</html>
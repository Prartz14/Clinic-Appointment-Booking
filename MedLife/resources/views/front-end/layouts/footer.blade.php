
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 grey b1" style="margin-top:3%;padding-bottom:3%">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="padding-top:3%">
<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12" style="margin-left:8%">
<img src="front-end/Image/logofooter.png" width="60%"/><p class="cwhite power pad2" style="position:relative;left:115px;top:-40px">The Power To Heal</p></div>
<div class="col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1 col-sm-6 col-xs-12">
<p class="p1 cwhite "><b>MedLife Hospitals is the largest municipal health care system in the country.</p>
<p class="p1 cwhite ">We provide essential inpatient, outpatient, and home-based services to more than one million patients every year in more than 70 locations across the city’s five boroughs.</b></p>
<p style="padding-top:2%" class="cwhite"><img src="front-end/Image/mail1.png" width="30"   />  medlife@gmail.com</p>
<p class="cwhite"><img src="front-end/Image/phone1.png" width="33" /> 0820 46837034</p>
<a href="doctors#speciality" role="button" class="btn btn-default purple cwhite century tag bnone" style="position:relative;top:10px">Make a Booking <img src="front-end/Image/arrow.png" width="10"/></a>
</div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="padding-top:3%">
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
<div class="col-md-12 pos1 col-lg-12 col-sm-12 col-xs-12">
<div class="col-md-4"><a href="doctors#speciality" class="p1 cpurple f20 tnone">Find a Doctor</a></div>
<div class="col-md-2"><a href="about" class="p1 cpurple f20 tnone">About</a></div>
<div class="col-md-2"><a href="home#services" class="p1 cpurple f20 tnone">Services</a></div>
<div class="col-md-3 col-md-offset-1"><a href="contactus" class="p1 cpurple f20 tnone">Contact Us</a></div>
</div>
</div>
<div class="col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 col-sm-12 col-xs-12">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
<p class="f30 cwhite pad">Follow us :</p>
</div>
<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 pad2" style="position:relative;left:-50px;top:5px">
<a href="https://www.facebook.com/"><img src="front-end/Image/fb.png" width="20%"/></a>
<a href="https://www.instagram.com/"><img src="front-end/Image/insta.png" width="20%"/></a>
<a href="https://www.twitter.com/"><img src="front-end/Image/twitter.png" width="20%"/></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="grad2" >
<p class="cwhite center pos2">© 2022 MedLife. All rights reserved.</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="front-end/js/bootstrap.min.js"></script>
<script src="front-end/js/jquery.validate.min.js"></script>
<script>
	
	Flag=0;
	$('.profilesubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#profileform").validate({
					rules:{
						profilefname:
						{
							required:true
							
						},
						profilelname:
						{
							required:true
							
						},
						profilegender:
						{
							required:true
							
						},
						profiledob:
						{
							required:true
							
						}
						
					},
					messages:
					{
						
						profilefname:
						{
							required: "Please Enter the First Name"
							
						},
						profilelname:
						{
							required:"Please Enter the Last Name"
							
						},
						profilegender:
						{
							required:"Please Enter the Gender"
							
						},
						profiledob:
						{
							required:"Please Enter the Date of Birth"
							
						}
						
						
					}  
					
				});
				if($("#profileform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"profileinsert",
							type:"POST",
							data:$('#profileform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Updated Information!!!');
								window.location.assign('myacc');
							}
						});
					}
				}
			});
</script>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script>
	$('.menu').click(function(e)
	{
		e.preventDefault();
		$('#loadData').load($(this).attr('href'));
	});
</script>
</body>
</html>
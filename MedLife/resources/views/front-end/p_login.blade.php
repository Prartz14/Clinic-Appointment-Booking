<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="front-end/css/bootstrap.min.css" rel="stylesheet">
<link href="front-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 b2" id="grad" style="padding-bottom:11%;">
<div class="col-md-6 col-md-offset-3 white b1" style="padding:2% 5% 5% 5%;margin-top:13%;border-radius:35px 10em 10%;">
<h3 style="padding-bottom:2%"><center>Patient Login</center></h3>
<form id="patientform">
<input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
<div class="login-box-msg">
</div>
<div class="form-group" style="padding:2% 0%">
    <label class="sr-only" for="patientemail">Email address</label>
    <input type="email" class="form-control" name="patientemail" id="patientemail" placeholder="Enter Email Address...">
  </div>
  <div class="form-group" style="padding-bottom:2%">
    <label class="sr-only" for="patientpassword">Password</label>
    <input type="password" class="form-control" name="patientpassword" id="patientpassword" placeholder="Password">
  </div>
  <button href="home" class="btn btn-default blue patientlogin cwhite w100 bnone">Login</button>
  <a class="center  link" href="register"><h5>Not registered yet? Create an account</h5></a>
  </form>
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="front-end/js/bootstrap.min.js"></script>
<script src="front-end/js/jquery.validate.min.js"></script>
<script>
			$('.patientlogin').click(function(e)
			{
				e.preventDefault();
				$.ajax({
					url:'plogin',
					type:'POST',
					data:$('#patientform').serialize(),
					success:function(data)
					{
						
						if(data==1)
						{
							window.location.assign('home');
						}
						
						else
						{
							$('.login-box-msg').html("<span style='color:red'>Invalid username/password .</span>");
						} 
					},
					error: function(XMLHttpRequest, textStatus, errorThrown)
					{
						
						$('.login-box-msg').html("<span style='color:red'>server not connected</span>");
					} 
				});
			})
		</script>
</body>
</html>
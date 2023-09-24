<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 b2" id="grad" style="padding-bottom:11%;">
<div class="col-md-6 col-md-offset-3 white b1" style="padding:2% 5% 5% 5%;margin-top:13%">
<h3 style="padding-bottom:2%"><center>Patient Login</center></h3>
<form id="loginform">
<input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">
<div class="login-box-msg">
</div>
<div class="form-group" style="padding:2% 0%">
    <label class="sr-only" for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address...">
  </div>
  <div class="form-group" style="padding-bottom:2%">
    <label class="sr-only" for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <a href="" class="btn btn-default blue login cwhite w100" role="button">Login</a>
  <a class="center  link" href=""><h5>Not registered yet? Create an account</h5></a>
  </form>
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="back-end/js/bootstrap.min.js"></script>
<script src="back-end/js/jquery.validate.min.js"></script>
<script>
			$('.login').click(function(e)
			{
				e.preventDefault();
				$.ajax({
					url:'adminlogin',
					type:'POST',
					data:$('#loginform').serialize(),
					success:function(data)
					{
						
						if(data==1)
						{
							window.location.assign('dashboard');
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
</html><?php /**PATH C:\Users\HP\medcare\resources\views/back-end/p_login.blade.php ENDPATH**/ ?>
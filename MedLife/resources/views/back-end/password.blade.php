<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 " >
<div class="col-md-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>Change Password</h4>
<form id="passwordform">
<input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
<div class="col-md-4">
<label for="passwordold">Old Password</label>
<input type="password" id="passwordold" name="passwordold" class="form-control">
</div>
<div class="col-md-4">
<label for="passwordnew">New Password</label>
<input type="password" name="passwordnew" id="passwordnew" class="form-control">
</div>
<div class="col-md-4">
<label for="passwordconfirm">Confirm Password</label>
<input type="password" id="passwordconfirm" name="passwordconfirm" class="form-control">
</div>
<button type="button" class="passwordsubmit btn btn-default blue cwhite bnone" style="margin-top:2%;margin-bottom:3%">Submit</button>
</form>
</div>
</div>
</div>
<script src="back-end/js/jquery.validate.min.js"></script>
<script>
	
	Flag=0;
	$('.passwordsubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#passwordform").validate({
					rules:{
						passwordold:
						{
							required:true
							
						},
						passwordnew:
						{
							required:true
							
						},
						passwordconfirm:
						{
							required:true,
							equalTo:'#passwordnew'
							
						}
						
					},
					messages:
					{
						
						passwordold:
						{
							required: "Please Enter the Old Password"
							
						},
						passwordnew:
						{
							required:"Please Enter the New Password"
							
						},
						passwordconfirm:
						{
							required:"Please Confirm the Password",
							equalTo:"Passwords not matching"
						}
						
						
					}  
					
				});
				if($("#passwordform").valid())
				{ 
						$.ajax({
							url:"passwordinsert",
							type:"POST",
							data:$('#passwordform').serialize(), 
							success:function(data)
							{
								if(data==1)
								{
							    alert('Successfully Changed Password!!!');
								$('#loadData').load('password');
								}
								else
								{
									alert("Wrong Password!!!");
								}
							}
						});
					}
			});
</script>
</body>
</html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Doctors</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>Add Doctors</h4>
<form id="doctorform">
<div class="form-group">
<input type="hidden" name="doctor_id" id="doctor_id">
<input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
<input type="hidden" name="update_image" id="update_image" class="form-control">
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
<label for="doctorspname">Speciality Name</label>
<select class="form-control" id="doctorspname" name="doctorspname">
<option>Select Speciality</option>
@foreach($data['specialityloop'] as $p)
<option>{{$p->name}}</option>
@endforeach
</select>
</div>
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
<label for="doctorname">Doctor Name</label>
<input type="text" id="doctorname" name="doctorname" class="form-control" style="margin-bottom:2%"></div>
<div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
<label for="doctorimage">Doctor Image</label>
<input type="file" id="doctorimage" name="doctorimage" class="form-control"style="margin-bottom:2%"></div>
<div id="img"></div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<label for="doctordescription">Doctor Description</label>
<textarea class="form-control" id="doctordescription" name="doctordescription" style="margin-bottom:2%"></textarea></div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<button type="submit" class="  btn btn-default blue cwhite bnone" style="margin-top:2%;margin-bottom:3%">Submit</button>
</div>
</div>
</div>
</form>



<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>List of Doctors</h4>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 scroll" >
<table class="table table-hover cwhite text-nowrap">
<thead>
<tr>
<th>Speciality Name</th>
<th>Doctor Name</th>
<th>Doctor Image</th>
<th>Doctor Description</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($data['doctorloop'] as $p)
<tr>
<td>{{$p->spname}}</td>
<td>{{$p->name}}</td>
<td><img src="{{$p->image}}" width="40" ></td>
<td>{{$p->description}}</td>
<td><button type="button" class="btn btn-primary btn-lg" id="doctoredit" name="doctoredit" onclick="editDoctor({{$p->doctor_id}}) "><img src="back-end/Image/pen1.png" width="20"/></button>
<button type="button" class="btn btn-danger btn-lg" id="doctordelete" name="doctordelete" onclick="deleteDoctor({{$p->doctor_id}}) "><img src="back-end/Image/delete.png" width="16"/></button></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<script src="back-end/js/jquery.validate.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>CKEDITOR.replace('doctordescription');</script>
<script>
	
	Flag=0;
	$('#doctorform').on('submit',(function(e)
			{
				CKEDITOR.instances.doctordescription.updateElement();
				e.preventDefault();
				$("#doctorform").validate({
					rules:{
						doctorspname:
						{
							required:true
							
						},
						doctorname:
						{
							required:true
							
						},
						doctorimage:
						{
							
							
						},
						doctordescription:
						{
							required:true
							
						}
					},
					messages:
					{
						doctorspname:
						{
							required: "Please Select Speciality Name"
							
						},
						doctorname:
						{
							required: "Please Enter Doctor Name"
							
						},
						doctorimage:
						{
							
							
						},
						doctordescription:
						{
							required: "Please Enter Doctor Description"
							
						}
						
						
						
						
						
					}  
					
				});
				if($("#doctorform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"doctorinsert",
							type:"POST",
							data:new FormData(this),
        					contentType: false,       
        					cache: false,             
        					processData:false,
							success:function(data)
							{
							    alert('Successfully Inserted Doctor!!!');
								$('#loadData').load('doctorsb');
							}
						});
					}
				}
			}));
			
			function deleteDoctor(Did)
			{
				$.ajax({
					url:"delDoctor",
					type:"get",
					data:'&Did='+Did,
					success:function(data)
					{
						alert( "Sucessfully Deleted Doctor", "success");   
						$('#loadData').load('doctorsb');
					}
				})
			}


			function editDoctor(Eid)
				{
									$.ajax({
									url:"editDoctor",
									type:"GET",
									data:'&Eid='+Eid,
									success:function(data)
									{
									  
										var obj=JSON.parse(data);
														   
										  $('#doctor_id').val(obj.doctor_id);
											  $('#doctorspname').val(obj.spname);
											  $('#doctorname').val(obj.name);
											  CKEDITOR.instances['doctordescription'].setData(obj.description)
											  $('#img').html("<img src=/"+obj.image+" style='width:200px;height:75px'>");
									   $('#update_image').val(obj.image);
									  
									}
								});
					
				}
</script>
</body>
</html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Speciality</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>Add Speciality</h4>
<form id="specialityform">
<div class="form-group">
<input type="hidden" name="speciality_id" id="speciality_id">
<input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="update_image" id="update_image" class="form-control">
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="specialityname">Speciality Name</label>
<input type="text" id="specialityname" name="specialityname" class="form-control" style="margin-bottom:2%"></div>
<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
<label for="specialityimage">Speciality Image</label>
<input type="file" id="specialityimage" name="specialityimage" class="form-control" style="margin-bottom:2%"></div>
<div id="img"></div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<label for="specialitydescription">Speciality Description</label>
<textarea class="form-control" id="specialitydescription" name="specialitydescription" row="3" style="margin-bottom:2%"></textarea>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
<button type="submit" class="  btn btn-default blue cwhite bnone" style="margin-top:2%;margin-bottom:3%">Submit</button>
</div>
</div>
</div>
</form>
</div>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>List of Specialities</h4>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 scroll" >
<table class="table table-hover cwhite text-nowrap">
<thead>
<tr>
<th>Speciality Name</th>
<th>Speciality Image</th>
<th>Speciality Description</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $data['specialityloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($p->name); ?></td>
<td><img src="<?php echo e($p->image); ?>" width="40" ></td>
<td><?php echo e($p->description); ?></td>
<td><button type="button" class="btn btn-primary btn-lg" id="specialityedit" name="specialityedit" onclick="editSpeciality(<?php echo e($p->speciality_id); ?>)"><img src="back-end/Image/pen1.png" width="20"/></button>
<button type="button" class="btn btn-danger btn-lg" id="specialitydelete" name="specialitydelete" onclick="deleteSpeciality(<?php echo e($p->speciality_id); ?>)" ><img src="back-end/Image/delete.png" width="16"/></button></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div>
<script src="back-end/js/jquery.validate.min.js"></script>

<script>
	
	Flag=0;
	$('#specialityform').on('submit',(function(e)
			{
				
				e.preventDefault();
				$("#specialityform").validate({
					rules:{
						specialityname:
						{
							required:true
							
						},
						specialityimage:
						{
						
							
						},
						specialitydescription:
						{
							required:true
							
						}
					},
					messages:
					{
						specialityname:
						{
							required: "Please Enter Speciality Name"
							
						},
						specialityimage:
						{
							
							
						},
						specialitydescription:
						{
							required: "Please Enter Speciality Description"
							
						}
						
						
						
						
					}  
					
				});
				if($("#specialityform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"specialityinsert",
							type:"POST",
							data:new FormData(this),
        					contentType: false,       
        					cache: false,             
        					processData:false,
							success:function(data)
							{
							    alert('Successfully Inserted Speciality!!!');
								$('#loadData').load('speciality');
							}
						});
					}
				}
			}));
			
			function deleteSpeciality(Did)
			{
				$.ajax({
					url:"delSpeciality",
					type:"get",
					data:'&Did='+Did,
					success:function(data)
					{
						alert( "Successfully Deleted Speciality", "success");   
						$('#loadData').load('speciality');
					}
				})
			}


			function editSpeciality(Eid)
				{
									$.ajax({
									url:"editSpeciality",
									type:"GET",
									data:'&Eid='+Eid,
									success:function(data)
									{
									  
										var obj=JSON.parse(data);
														   
											$('#speciality_id').val(obj.speciality_id);			   
										  $('#specialityname').val(obj.name);
											  $('#specialitydescription').html(obj.description);
											  $('#img').html("<img src=/"+obj.image+" style='width:200px;height:75px'>");
									   $('#update_image').val(obj.image);
									  
									}
								});
					
				}
</script>





</body>
</html><?php /**PATH C:\Users\HP\medcare\resources\views/back-end/speciality.blade.php ENDPATH**/ ?>
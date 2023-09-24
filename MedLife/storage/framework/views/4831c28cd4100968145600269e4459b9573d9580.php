<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12  ">
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<h2 style="position:relative;left:10px"><img src="front-end/Image/history1.png" width="50" /> History</h2></div>

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 " >
<h4>Appointment Details</h4>
<table class="table white table-hover">
<thead class="purple cwhite" >
<tr>
<th>Patient Name</th>
<th>Department</th>
<th>Doctor</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Patient Contact</th>
<th>Invoice</th>
<th></th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $data['bookingloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<?php if ($p->status=='0'): ?>
<td><?php echo e($p->name); ?></td>
<td><?php echo e($p->bspeciality); ?></td>
<td><?php echo e($p->bdoctor); ?></td>
<td><?php echo e($p->date); ?></td>
<td><?php echo e($p->time); ?></td>
<td><?php echo e($p->contact); ?></td>
<td><a href="invoice?booking_id=<?php echo e($p->booking_id); ?>">Download</a></td>
<td><button type="button" class="btn btn-primary " id="bookingdelete" name="bookingdelete" onclick="deleteBooking(<?php echo e($p->booking_id); ?>)">Cancel</button>
<?php endif ?>
<!--<td><abbr class="x" title="cancel">x</abbr></td>-->
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
<script>
function deleteBooking(Did)
			{
				$.ajax({
					url:"delBooking",
					type:"get",
					data:'&Did='+Did,
					success:function(data)
					{
						alert( "Successfully Deleted Booking", "success");   
						$('#loadData').load('history');
					}
				})
			}
</script><?php /**PATH C:\Users\HP\medcare\resources\views/front-end/history.blade.php ENDPATH**/ ?>
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
@foreach($data['bookingloop'] as $p)
<tr>
<?php if ($p->status=='0'): ?>
<td>{{$p->name}}</td>
<td>{{$p->bspeciality}}</td>
<td>{{$p->bdoctor}}</td>
<td>{{$p->date}}</td>
<td>{{$p->time}}</td>
<td>{{$p->contact}}</td>
<td><a href="invoice?booking_id={{$p->booking_id}}">Download</a></td>
<td><button type="button" class="btn btn-primary " id="bookingdelete" name="bookingdelete" onclick="deleteBooking({{$p->booking_id}})">Cancel</button>
<?php endif ?>
<!--<td><abbr class="x" title="cancel">x</abbr></td>-->
</tr>
@endforeach
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
</script>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bookings</title>
<link href="back-end/css/bootstrap.min.css" rel="stylesheet">
<link href="back-end/style/style.css" rel="stylesheet">
</head>
<body>
<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 purple cwhite" style="padding-top:2%;margin-top:2%">
<h4>List of Bookings</h4>
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 scroll" >
<table class="table table-hover cwhite text-nowrap">
<thead>
<tr>
<th>Booking Id</th>
<th>Patient Name</th>
<th>Department</th>
<th>Doctor</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Patient Contact</th>
<th>Email-Id</th>
<th>Invoice</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $data['bookingloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($p->booking_id); ?></td>
<td><?php echo e($p->name); ?></td>
<td><?php echo e($p->bspeciality); ?></td>
<td><?php echo e($p->bdoctor); ?></td>
<td><?php echo e($p->date); ?></td>
<td><?php echo e($p->time); ?></td>
<td><?php echo e($p->contact); ?></td>
<td><?php echo e($p->email); ?></td>
<td><a href="invoice?booking_id=<?php echo e($p->booking_id); ?>">Download</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
</div>
</div>
<script src="back-end/js/jquery.validate.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\HP\medcare\resources\views/back-end/bookingsb.blade.php ENDPATH**/ ?>
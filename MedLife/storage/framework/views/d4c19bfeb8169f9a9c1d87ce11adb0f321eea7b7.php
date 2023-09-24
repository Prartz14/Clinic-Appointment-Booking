<?php echo $__env->make('front-end/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 lgrey">
<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12" id="grad1" style="padding-bottom:5%" >
<div class="nav navbar-default" style="background:none">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
</button>
<center><h2 class="cwhite ">WELCOME </h2><p class="cwhite f20"> <?php echo $data['userdetail']->name ?></p></center></a>
<img src="front-end/Image/myacc.png" width="100" class="prof_pad">
<ul class="nav collapse navbar-collapse" id="collapse2">
<li><a href="" role="button" class="btn btn-default w100  cwhite purple bnone left " style="margin-top:8%;margin-bottom:5%" ><img src="front-end/Image/myacc.png" class="img-circle" width="30"/> Profile</a></li>
<li><a href="history" role="button" class="btn btn-default w100  cwhite purple bnone left menu" style="margin-bottom:5%"><img src="front-end/Image/history.png" class="img-circle" width="30"/> History</a></li>
<li><a href="patient_logout" role="button" class="btn btn-default w100  cwhite purple bnone left " style="margin-bottom:5%"><img src="front-end/Image/logout.png" class="img-circle" width="25"/> Logout</a></li>
</ul>
</div>
</div>
<div id="loadData">
<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12  ">
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<h2 style="position:relative;left:10px"><img src="front-end/Image/myacc1.png" width="50" /> Profile</h2></div>
<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-5 " style="margin-top:3%">
<button type="button" class=" profilesubmit btn btn-default purple cwhite bnone psubmit" style="">Save</button>
</div>
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 " >

<form id="profileform">
<div class="form-group">
<div class="col-md-5 col-lg-5 col-xs-12 col-sm-12 white" style="border-radius:25px;margin-left:5%">
<h4><img src="front-end/Image/myacc2.png" width="30"/> Edit Profile</h4>
<input type="hidden" name="profile_id" id="profile_id" value="<?php echo e($data['profileloop']->id); ?>">
<input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">
<label for="profilefname">First Name</label>
<input type="text" class="form-control" value="<?php echo e($data['profileloop']->firstname); ?>" name="profilefname" id="profilefname" style="margin-bottom:3%">
<label for="profilelname">Last Name</label>
<input type="text" class="form-control" value="<?php echo e($data['profileloop']->lastname); ?>" name="profilelname" id="profilelname" style="margin-bottom:3%">
<label for="profilegender">Gender</label>
<select class="form-control register_pad " id="profilegender" name="profilegender">
<option value="<?php echo e($data['profileloop']->gender); ?>">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>
<div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 col-xs-11 col-xs-offset-1 col-sm-11 col-sm-offset-1 white" style="border-radius:25px;padding-bottom:1%">
<label for="profileemail"style="padding-top:9%;">Email Address</label>
<input type="text" class="form-control" value="<?php echo e($data['profileloop']->email); ?>" name="profileemail" id="profileemail" style="margin-bottom:3%">
<label for="profilecontact">Contact</label>
<input type="text" class="form-control" value="<?php echo e($data['profileloop']->contact); ?>" name="profilecontact" id="profilecontact" style="margin-bottom:3%">
<label for="profiledob">Date of Birth</label>
<input type="date" class="form-control" value="<?php echo e($data['profileloop']->dob); ?>" name="profiledob" id="profiledob" style="margin-bottom:3%">


</div>

</form>
</div>
</div>
</div>
</div>
</div>
<?php echo $__env->make('front-end/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\HP\medcare\resources\views/front-end/myacc.blade.php ENDPATH**/ ?>
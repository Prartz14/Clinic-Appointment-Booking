@foreach($data['specialityloop'] as $spec)
	
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="{{$spec->name}}" style="margin-bottom:5%">
<p class="p2 cgrey f25 center" style="padding-top:2%;">{{$spec->name}}</p>
<center><hr style="border-top:4px solid #415364" width="5%"></center>
@foreach($data['doctorloop']->where('speciality',$spec->name) as $doc)
<?php if($doc->spname == $spec->name): ?>
<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
<div class="thumbnail">
<img src="{{$doc->image}}">
<div class="caption">
<h3 class="p2" >{{$doc->name}}</h3>
<a  class="btn btn-primary det hide-me" role="button" data-toggle="collapse" href="#details1"  aria-expanded="false" aria-controls="details1">More Details</a>
</div>
<div class="collapse" id="details1">
<div class="card card-body">
<button type="button" class="close " data-toggle="collapse" href="#details1" >x</button>
<?php echo $data['doctors']->description; ?>

<a  class="btn btn-primary det " role="button"  href="">Book Appointment</a>

</div>
</div>
 </div> 

</div>

</div>
<?php endif ;?>
@endforeach
@endforeach
<!--?php echo $data['about']->description; ?-->
</div>
</div>
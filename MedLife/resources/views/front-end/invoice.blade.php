<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Invoice</title>
<link href="front-end/css/bootstrap.min.css" rel="stylesheet">
<link href="front-end/style/style.css" rel="stylesheet">
</head>
<body onload=window.print()>
<div class="col-md-12"> 
  
 <div class="row">
		
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
							<img class="img-responsive"  src="front-end/Image/logo.png" width="200">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5>MedLife</h5>
							<p>+0820 46837034 <i class="fa fa-phone"></i></p>
							<p> medlife@gmail.com <i class="fa fa-envelope-o"></i></p>
							<p>India <i class="fa fa-location-arrow"></i></p>
						</div>
					</div>
				</div>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
						
							<h5>{{$data['invoiceloop']->name}} </h5>
							<p><b>Mobile :</b> {{$data['invoiceloop']->contact}}</p>
							<p><b>Email :</b> {{$data['invoiceloop']->email}}</p>
							
							
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h3>INVOICE # {{$data['invoiceloop']->booking_id}}</h3>
						</div>
					</div>
				</div>
            </div>
			
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Timings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><p><b>Doctor Name:</b> {{$data['invoiceloop']->bdoctor}}</p>
							<p><b>Department: </b>{{$data['invoiceloop']->bspeciality}}</td>
                            <td class="col-md-3"><p>{{$data['invoiceloop']->date}}</p>
							<p>{{$data['invoiceloop']->time}}</p></td>
                        </tr>
                        
                       
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5 style="color: rgb(140, 140, 140);">Take Care!</h5>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Stamp</h1>
						</div>
					</div>
				</div>
            </div>
			
        </div>    
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="front-end/js/bootstrap.min.js"></script>
<script src="front-end/js/jquery.validate.min.js"></script>
</body>
</html>
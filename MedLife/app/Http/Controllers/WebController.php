<?php

namespace App\Http\Controllers;
	
	use App\Models\AdminModel;
	use Illuminate\Http\Request;
	use Auth;
	use DB;
	use App\Models\User;
	use file;
	use Input;
    
    
class WebController extends Controller
{
	public function __construct()
    {
       $this->admin= new AdminModel;
    }
	
	
   public function home()
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
         return view('front-end.home',compact('data'));
    }
	public function about()
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
         return view('front-end.about',compact('data'));
    }
	
	public function doctors()
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
         $data['doctorloop']=DB::table('doctors')->where('status','0')->get();
		 $data['specialityloop']=DB::table('speciality')->where('status','0')->get();
		 return view('front-end.doctors',compact('data'));
    }
	
	public function contactus()
	{
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
		 return view('front-end.contactus',compact('data'));
	
	}
	public function delBooking(Request $request)
		{
			$data=$request->input('Did');
			return DB::table('booking')->where('booking_id',$data)->update(['status'=>'1']);
			
		}
	public function rinsert(Request $request)
		{
			$data['patient_id']=$request->input('patient_id');
			$data['registerfname']=$request->input('registerfname');
			$data['registerlname']=$request->input('registerlname');
			$data['registergender']=$request->input('registergender');
			$data['registerdob']=$request->input('registerdob');
			$data['registeremail']=$request->input('registeremail');
			$data['registercontact']=$request->input('registercontact');
			$data['registernpassword']=$request->input('registernpassword');
			return $this->admin->register_insert($data);
			
		}
		public function binsert(Request $request)
		{
			$data['booking_id']=$request->input('booking_id');
			$data['pid']=$request->input('pid');
			$data['bookingname']=$request->input('bookingname');
			$data['bookingage']=$request->input('bookingage');
			$data['bookinggender']=$request->input('bookinggender');
			$data['bookingcontact']=$request->input('bookingcontact');
			$data['bookingemail']=$request->input('bookingemail');
			$data['bookingspeciality']=$request->input('bookingspeciality');
			$data['bookingdoctor']=$request->input('bookingdoctor');
			$data['bookingdate']=$request->input('bookingdate');
			$data['bookingtime']=$request->input('bookingtime');
			return $this->admin->booking_insert($data);
			
		}
	public function pinsert(Request $request)
		{
			$data['profile_id']=$request->input('profile_id');
			$data['profilefname']=$request->input('profilefname');
			$data['profilelname']=$request->input('profilelname');
			$data['profiledob']=$request->input('profiledob');
			$data['profilegender']=$request->input('profilegender');
			$data['profilecontact']=$request->input('profilecontact');
			$data['profileemail']=$request->input('profileemail');
			return $this->admin->profile_insert($data);

			
		}
		 public function login(Request $request)
      {
			/*$data['patientloop']=DB::table('patient')->where('status','0')->get();

		  	$email = $request->input('patientemail');

		  	$data['login']=DB::table('patient')->where('email',$email)->first();*/

            return view('front-end.p_login');
      }
	  
	  
		public function register()
    {
		
		
         return view('front-end.register');
    }
	
	public function history(Request $request)
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
		    	$data['bookingloop']=DB::table('booking')->where('pid',$data['uid'])->get();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
		
         return view('front-end.history',compact('data'));
    }
	
	public function invoice(Request $request)
	{
		
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
		$data['bid']=$request->input('booking_id');
		$data['invoiceloop']=DB::table('booking')->where('booking_id',$data['bid'])->first();

		
         return view('front-end.history',compact('data'));
	
	}
	public function booking(Request $request)
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
		    	//$data['profileloop']=DB::table('patient')->where('id',$data['uid'])->first();
		    	//$data['bookingloop']=DB::table('booking')->where('booking_id',$data['uid'])->get();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
		$data['doctor_id']=$request->input('doctor_id');
		 $data['doctorloop']=DB::table('doctors')->where('doctor_id',$data['doctor_id'])->first();
		
         return view('front-end.booking',compact('data'));
    }
	
		public function myacc(Request $request)
    {
		$uname='';
			if(Auth::user())
			$uname= Auth::user();
			if(!empty($uname))
			{
		    	$data['uid']=$uname->id;
		    	$data['userdetail']=DB::table('users')->where('id',$data['uid'])->first();
		    	$data['profileloop']=DB::table('patient')->where('id',$data['uid'])->first();
			}
			else
			{
				$data['uid']="0";
				$data['userdetail']="null";
			}
		//$data['patient_id']=$request->input('patient_id');
		//$data['profileloop']=DB::table('patient')->where('patient_id','2')->first();
         return view('front-end.myacc',compact('data'));
    }
	
	 public function plogin(Request $request)
		{
			
			$canLogin = 0;
			$email = $request->input('patientemail');
			$auth = user::where('email',$email)->where('usertype','patient')->first();
			if($auth)
			{
				Auth::login($auth);
				$password = Auth::user()->password;
				$login_status = Auth::user()->status;
				if($request->input('patientpassword'))
				{
					if ($request->input('patientpassword')==$password)
					{
						if($login_status=='0')
						{ 
							$canLogin=1;
						}
						elseif($login_status=='1')
						{
							$canLogin=404;
						} 
						else
						{
							$canLogin=0;
						} 
					}
				}					
				else
				{
					$canLogin=0;
				}
			}
			return $canLogin;
		}
		
		
		public function patient_logout()
	{
		if(Auth::check())
			{
				Auth::logout();
				return redirect('home');
			}
			else
			{
				return redirect('home');
			}
		
		
	}
	
	
	
// write function for all front-end blades in this way
}

?>
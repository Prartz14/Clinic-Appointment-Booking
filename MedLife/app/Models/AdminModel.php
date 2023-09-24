<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Model;
	use DB;
	use Auth;
	
	class AdminModel extends Model
	{
		public function speciality_insert($id)
		{
			if($id['speciality_id']=="")
			{
				$speciality_insert=DB::table('speciality')->insertGetId(["name"=>$id['specialityname'],"image"=>$id['image'],"description"=>$id['specialitydescription']]);
			}
			else
			{
			    $speciality_insert=DB::table('speciality')->where('speciality_id','=',$id['speciality_id'])->update(["name"=>$id['specialityname'],"image"=>$id['image'],"description"=>$id['specialitydescription']]);
			}
			
			return $speciality_insert;  
		}
		
		public function doctor_insert($id)
		{
			if($id['doctor_id']=="")
			{
				$doctor_insert=DB::table('doctors')->insertGetId(["spname"=>$id['doctorspname'],"name"=>$id['doctorname'],"image"=>$id['image'],"description"=>$id['doctordescription']]);
			}
			else
			{
			    $doctor_insert=DB::table('doctors')->where('doctor_id','=',$id['doctor_id'])->update(["spname"=>$id['doctorspname'],"name"=>$id['doctorname'],"image"=>$id['image'],"description"=>$id['doctordescription']]);
			}
			
			return $doctor_insert;  
		}
		
		public function register_insert($id)
		{
				$canLogin = 0;
				$dbemail=DB::table('users')->where('email','=',$id['registeremail'])->first();
				if ($dbemail==null)
				{
					$patient=DB::table('users')->insertGetId(["name"=>$id['registerfname'],"email"=>$id['registeremail'],"password"=>$id['registernpassword'],"usertype"=>'patient']);

				$register_insert=DB::table('patient')->insertGetId(["firstname"=>$id['registerfname'],"lastname"=>$id['registerlname'],"gender"=>$id['registergender'],"dob"=>$id['registerdob'],"email"=>$id['registeremail'],"contact"=>$id['registercontact'],"password"=>$id['registernpassword'],"id"=>$patient]);
				
					return $canLogin; 
				}
				else
				{
					$canLogin = 1;
				}
			return $canLogin;  
		}
		public function booking_insert($id)
		{
	

				$booking_insert=DB::table('booking')->insertGetId(["name"=>$id['bookingname'],
																	"pid"=>pid$id[''],
																	"age"=>$id['bookingage'],
																	"gender"=>$id['bookinggender'],
																	"email"=>$id['bookingemail'],
																	"contact"=>$id['bookingcontact'],
																	"bspeciality"=>$id['bookingspeciality'],
																	"bdoctor"=>$id['bookingdoctor'],
																	"date"=>$id['bookingdate'],
																	"time"=>$id['bookingtime']]);
			
			return $booking_insert;  
		}
		
		public function profile_insert($id)
		{
			DB::table('users')->where('id','=',$id['profile_id'])->update(["name"=>$id['profilefname'],"email"=>$id['profileemail']]);
			$profile_insert=DB::table('patient')->where('id','=',$id['profile_id'])->update(["firstname"=>$id['profilefname'],"lastname"=>$id['profilelname'],"dob"=>$id['profiledob'],"gender"=>$id['profilegender'],"contact"=>$id['profilecontact'],"email"=>$id['profileemail']]);
			return $profile_insert;  
			
		}




    }
?>
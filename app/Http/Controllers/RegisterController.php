<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\Log;
use DB;
use Mail;
use Session;
use Response;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $data = array();
        $data['page'] = 'registration';

		$name = $request->get('name');
		$email = $request->get('email');
		$body_text = "Email: $email\n";

		$id = DB::table('temp_users')->insertGetId([ 
			'email' => $email
		]);

		$data['email'] = $email;
		if( $email ) {	
			Mail::raw($body_text, function($message)
			{
				$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com'];
				$message->from('info@slashmyfees.com');
				$message->to($user_emails)->subject('User Sign Up Step One');
			});
		}	

        return view('registration')->with( $data );	
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2( Request $request )
    {
        $data = array();
        $data['page'] = 'registration';

		$name = $request->get('name');
		$email = $request->get('email');
		$body_text = "Email: $email\n";

		$id = DB::table('temp_users')->insertGetId([ 
			'email' => $email
		]);

		$data['email'] = $email;
		if( $email ) {	
			Mail::raw($body_text, function($message)
			{
				$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com'];
				$message->from('info@slashmyfees.com');
				$message->to($user_emails)->subject('User Sign Up Step One');
			});
		}	

        return view('registration_1')->with( $data );	
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {


      	return redirect('/secure/user/'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complete_signup( Request $request )
    {

        $data = array();
        $data['page'] = 'registration';

		$user_id = $request->get('user_id');
		$user = DB::table('users')->where('id','=', $user_id)->first();
		$name = $user->name;
		$username = $request->get('username');
		$email = $user->email;
		$business_name = $request->get('business_name');
		$business_age = $request->get('business_age');

		$category_id = $request->get('category');
		$zip_code = $request->get('zip_code');
		$phone_number= $request->get('phone_number');
		$accept_cards = $request->get('accept_card');
		$accept_amex_discover = $request->get('accept_amex_discover');
		$average_monthly = $request->get('average_monthly_credit');
		$individual_sale_amount = $request->get('average_transaction_amount');
		$in_person = $request->get('in_person');
		$phone = $request->get('phone');
		$ecommerce = $request->get('ecommerce');
		$business_description = $request->get('business_description');
		$about_us = $request->get('about_us');

		$amex_display = 'No';
		$discover_display = 'No';
		$use_discover = $request->get('use_discover');
		if( $use_discover != null ) {
			$use_discover = 1;
			$discover_display = 'Yes';
		}

		$use_amex = $request->get('use_amex');
		if( $use_amex != null ) {
			$use_amex = 1;
			$amex_display = 'Yes';
		}

		$category = DB::table('categories')->where('id','=',$category_id)->first();
		$body_text = "Name: $name\n";
		$body_text .= "Email: $email\n";
		$body_text .= "Business Name: $business_name\n";
		$body_text .= "Business Age: $business_age\n";
		$body_text .= "Category Id: " . $category->category . "\n";
		$body_text .= "Zip Code: $zip_code\n";
		$body_text .= "Phone Number: $phone_number\n";
		$body_text .= "Accept Cards: $accept_cards\n";
		$body_text .= "Accept Amex: $amex_display\n";
		$body_text .= "Accept Discover: $discover_display\n";
		$body_text .= "Average Monthly: $average_monthly\n";
		$body_text .= "Individual Sale Amount: $individual_sale_amount\n";
		$body_text .= "In Person: $in_person\n";
		$body_text .= "Online: $ecommerce\n";
		$body_text .= "Phone: $phone\n";
		$body_text .= "Business Description: $business_description\n";
		$body_text .= "Hear About Us: $about_us\n";

		$average_monthly = str_replace(',', '', $average_monthly);
		$average_monthly = str_replace('$', '', $average_monthly);

		$ipAddress = $_SERVER['REMOTE_ADDR'];
		$individual_sale_amount = str_replace(',', '', $individual_sale_amount);
		$individual_sale_amount = str_replace('$', '', $individual_sale_amount);
		DB::table('users')->where('id','=', $user_id)->update([
			'business_name' => $business_name,
			'business_age' => $business_age,
			'zipcode' => $zip_code,
			'phone_number' => $phone_number,
			'user_type_id' => 2,
			'monthly_transaction' => $average_monthly,
			'avg_transaction' => $individual_sale_amount,
			'use_amex' => $use_amex,
			'use_discover' => $use_discover,
			'in_person' => $in_person,
			'online' => $ecommerce,
			'mobile' => $phone,	
			'business_desc' => $business_description,
			'hear_about_us' => $about_us,
			'category_id' => $category_id,
			'ip' => $ipAddress	
		]);
		
		Mail::raw($body_text, function($message)
		{
			$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com'];
			$message->from('info@slashmyfees.com');
			$message->to($user_emails)->subject('User Complete Registration');
		});

		
		$welcome_text = [];
		Mail::send('emails.welcome', $welcome_text, function($message) use ($email)
		{
			$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com'];
			//$user_emails = ['phoenixD112@yahoo.com'];
			$message->from('info@slashmyfees.com');
			$message->bcc($user_emails);
			$message->to($email)->subject('Welcome To SlashMyFees');
		});

      	return redirect('/secure/user/'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_step2( Request $request )
    {
        $data = array();
        $data['page'] = 'registration';

		$name = $request->get('name');
		$email = $request->get('email');
		$password = $request->get('password');
		$aff_id = $request->get('aff_id');
		$affiliate_data = DB::table('affiliates')->where('code','=',$aff_id)->first();
		$affiliate_id = 0;
		if($affiliate_data) {
			$affiliate_id = $affiliate_data->id;
		}
		$ipAddress = $_SERVER['REMOTE_ADDR'];
		
		$id = DB::table('users')->insertGetId([ 
			'name' => $name,
			'email' => $email,
			'password' => bcrypt($password),
			'ip' => $ipAddress,
			'affiliate_id' => $affiliate_id
		]);

		Auth::attempt(['email' => $email, 'password' => $password]);
		$dir = '/usr/share/nginx/slashmyfees/storage/uploads/' . $id . '/';
		mkdir($dir, 0777);
		chmod($dir, 0777);

		if($request->file('file-upload') != null) {
			if( $request->file('file-upload')->isValid() ) {
				$file = $request->file('file-upload');
				$file->move( $dir,  $file->getClientOriginalName() );
			}
		}

		$body_text = '';
		Mail::raw($body_text, function($message)
		{
			$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com'];
			$message->from('info@slashmyfees.com');
			$message->to($user_emails)->subject('User Sign Up Step One');
		});

		Session::put( 'user_id', $id );
        $categories = DB::table('categories')->where('parent_id','0')->get();
        $data['categories'] = $categories;
		$data['user_id'] = $id;
        return view('registration2')->with( $data );	
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_subcategory( $category_id )
    {
        //$category_id = $request->get('category_id');
		//Log::info($category_id);
        $categories = DB::table('categories')->where('parent_id','=', $category_id)->get();
		return Response::json($categories);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

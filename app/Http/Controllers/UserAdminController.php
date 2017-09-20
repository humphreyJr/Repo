<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Auth;
use Mail;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['page'] = 'home';
		
	    $user_id = Session::get('user_id');

		$update_form = 0;
		if( $request->get('update_form') != null ) {
			$update_form = $request->get('update_form');
		}	

		if($update_form == 1) {

			$monthly_transaction = $request->get('monthly_transaction');
			$avg_transaction = $request->get('avg_transaction');


        	$monthly_transaction = str_replace(',', '', $monthly_transaction);
        	$monthly_transaction = str_replace('$', '', $monthly_transaction);

        	$avg_transaction = str_replace(',', '', $avg_transaction);
        	$avg_transaction = str_replace('$', '', $avg_transaction);


			$in_person = $request->get('in_person');
			$online = $request->get('online');
			$mobile = $request->get('mobile');
			$use_amex = 0;
			if( $request->get('use_amex') != null ) {
				$use_amex = $request->get('use_amex');
			}

			$use_discover = 0;
			if( $request->get('use_discover') != null ) {
				$use_discover = $request->get('use_discover');
			}
			$process_transaction = $request->get('process_transaction');	
			
			DB::table('users')->where('id','=', $user_id )->update([
				'monthly_transaction' => $monthly_transaction,
				'avg_transaction' => $avg_transaction,
				'in_person' => $in_person,	
				'online' => $online,
				'mobile' => $mobile,
				'use_amex' => $use_amex,
				'use_discover' => $use_discover,
				'process_transaction' => $process_transaction
			]);

		}

	 	$user = DB::table('users')->where('id','=', $user_id)->first();
		$data['user'] = $user;	

		$category = DB::table('categories')->where('id','=', $user->category_id )->first();
			
		$category_id = 0;
		if( $category->parent_id == 0 ) {
			$category_id = $category->id;
		} else {
			$category_id = $category->parent_id;
		}

		$data['category_id'] = $category_id;
	
        $vendors = DB::table('vendors')->where('status','1')->get();
        $data['vendors'] = $vendors;
	
        return view('user.index')->with( $data );
        //
    }


    public function accept_bid(Request $request)
    {
        $data = array();
        $data['page'] = 'home';
		
	    $user_id = Session::get('user_id');
		$vendor_id = $request->get('vendor_id');
	 	$user = DB::table('users')->where('id','=', $user_id)->first();
		$vendor = DB::table('vendors')->where('id','=', $vendor_id)->first();

		$data['user'] = $user;	
		$data['vendor'] = $vendor;

		$quote = $request->get('quote');
		$quote = '$ ' . number_format( $quote, 2, '.', ',');
		$body_text = $user->name . ' of ' . $user->business_name . ' has accepted the quote of ' . $quote . ' from ' . $vendor->business_name;

	  	Mail::raw($body_text, function($message)
        {
        	$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com','kyland@slashmyfees.com'];
          	$message->from('info@slashmyfees.com');
            $message->to($user_emails)->subject('User Accepted Quote');
        });

		$category = DB::table('categories')->where('id','=',$user->category_id)->first();
		$body_text .=  "\n";
		$body_text .= "Name: " . $user->name . "\n";
		$body_text .= "Business: " . $user->business_name . "\n";
		$body_text .= "Phone: " . $user->phone_number . "\n";
		$body_text .= "Email: " . $user->email . "\n";
		$body_text .= "Category: " . $category->category . "\n";
		$body_text .= "Avg Transaction: " . $user->avg_transaction . "\n";
		$body_text .= "Monthly Transaction: " . $user->monthly_transaction . "\n";
	  	Mail::raw($body_text, function($message) use ($vendor)
        {
			$email = $vendor->email;
         	$user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com','kyland@slashmyfees.com'];
		    $message->from('info@slashmyfees.com');
			$message->bcc($user_emails);
            $message->to($email)->subject('User Accepted Your Estimated Quote');
        });


        return view('user.accept_bid')->with( $data );
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
		Auth::logout();
		Session::flush();
		return redirect('/');	
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, $id)
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

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

class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $aff_id = '' )
    {
		$data = array();
		$data['page'] = 'affilates';
		$data['aff_id'] = $aff_id;
		return view('affiliates')->with( $data );
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliates_thank_you( Request $request )
    {
		$data = array();
		$data['page'] = 'affilates_thank_you';
		$name = $request->get('name');
		$address = $request->get('address');
		$zipcode = $request->get('zipcode');
		$phone_number = $request->get('phone_number');
		$email = $request->get('email');
		$about = $request->get('about');
		$notes = $request->get('notes');
		$aff_id = $request->get('aff_id');

      	$body_text = "Name: $name\n";
        $body_text .= "Address: $address\n";
        $body_text .= "Zipcode: $zipcode\n";
        $body_text .= "Phone Number: $phone_number\n";
        $body_text .= "Email: $email\n";
        $body_text .= "About: $about\n";
        $body_text .= "Notes: $notes\n";
        $body_text .= "Aff Id: $aff_id\n";
        Mail::raw($body_text, function($message)
        {
            $user_emails = ['phoenixD112@yahoo.com','bryan@slashmyfees.com','kyland@slashmyfees.com','brad@slashmyfees.com'];
            $message->from('info@slashmyfees.com');
            $message->to($user_emails)->subject('Affiliate Sign Ups');
        });

        DB::table('affiliates_signups')->insert([
            'name' => $name,
            'phone_number' => $phone_number,
            'email' => $email,
            'about' => $about,
			'notes' => $notes,
			'aff_id' => $aff_id
        ]);

		return view('affiliates-thank-you')->with( $data );
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

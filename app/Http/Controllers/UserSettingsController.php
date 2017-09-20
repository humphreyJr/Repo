<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;

class UserSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $data = array();
        $data['page'] = 'home';
       	$user_id = Session::get('user_id');

        $user = DB::table('users')->where('id','=', $user_id)->first();
        $data['user'] = $user;
		$category_id = $user->category_id;
		$category = DB::table('categories')->where('id','=',$category_id)->first();
       	$parent_category_id = $category->parent_id; 
		$categories = DB::table('categories')->where('parent_id','0')->get();
		$category_list = DB::table('categories')->where('parent_id', $parent_category_id)->get();
        $data['categories'] = $categories;
		$data['category_list'] = $category_list;
		$data['parent_id'] = $parent_category_id;
		$data['category_id'] = $category->id;
        return view('user.settings')->with( $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request )
    {
        $data = array();
        $data['page'] = 'home';
       	$user_id = Session::get('user_id');

		$name = $request->get('name');
		$email = $request->get('email');
		$business_name = $request->get('business_name');
		$business_age = $request->get('business_age');	
		$zipcode = $request->get('zipcode');
		$phone_number = $request->get('phone_number');
		$business_desc = $request->get('business_desc');
		$hear_about_us = $request->get('hear_about_us');
		$category_id = $request->get('category');

      	DB::table('users')->where('id','=', $user_id)->update([
            'business_name' => $business_name,
			'business_age' => $business_age,
            'zipcode' => $zipcode,
            'phone_number' => $phone_number,
            'business_desc' => $business_desc,
            'hear_about_us' => $hear_about_us,
			'category_id' => $category_id
        ]);
	
	 	return redirect('/secure/user/settings');        
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

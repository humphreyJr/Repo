<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;


class HomeController extends Controller
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
		$data['title'] = 'SlashMyFees –Free Credit Card Processor Comparison Website';
		$data['description'] = 'See & Compare the best rates for your credit card processing and point of sale needs. See instant quotes – 100% FREE FOR BUSINESS OWNERS.';
     	return view('welcome')->with( $data ); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2( Request $request )
    {
		$data = array();
		$data['page'] = 'home';
		$data['title'] = 'SlashMyFees –Free Credit Card Processor Comparison Website';
		$data['description'] = 'See & Compare the best rates for your credit card processing and point of sale needs. See instant quotes – 100% FREE FOR BUSINESS OWNERS.';
     	return view('welcome2')->with( $data ); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile( Request $request )
    {
		$data = array();
		$data['page'] = 'profile';

     	return view('profile')->with( $data ); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about( Request $request )
    {
		$data = array();
		$data['page'] = 'about';
		$data['title'] = 'SlashMyFees – About Us';
		$data['description'] = 'Providing transparency, savings, & simplicity to your credit card processing search.';
     	return view('about')->with( $data ); 
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

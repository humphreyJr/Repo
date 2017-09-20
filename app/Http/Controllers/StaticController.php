<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function what_are_merchant_services( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'what-are-merchant-services';
        $data['title'] = 'SlashMyFees – What Are Merchant Services?';
        $data['description'] = 'Merchant services is a broad term that is used to define a wide range of payment processing options. Most automatically associate merchant services with debit and credit card processing, but there is a wide variety of other options encompassed in its broader definition';
        return view('merchant-services')->with( $data );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function credit_card_processing( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'credit-card-processing';
        $data['title'] = 'SlashMyFees – Credit Card Processing';
        $data['description'] = 'Credit card payment processing takes place in two phases: authorization - getting approval for the transaction that is stored with the order and settlement - processing the sale, which transfers the funds from the issuing bank to the merchant\'s account.';
        return view('credit-card-processing')->with( $data );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mobile_credit_card_processing( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'mobile-credit-card-processing';
        $data['title'] = 'SlashMyFees – Mobile Credit Card Processing';
        $data['description'] = 'Mobile credit card processing, sometimes also referred to as mPOS (mobile point of sale), gives you the ability to accept credit and debit card payments using your phone or tablet instead of a credit card terminal or point-of-sale system.';
        return view('mobile-credit-card-processing')->with( $data );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment_terminals( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'payment-terminals';
        $data['title'] = 'SlashMyFees – Payment Terminals';
        $data['description'] = 'SlashMyFees platform has many mentions to a credit card terminal, so we wanted to explain that term in more detail.';
        return view('payment-terminals')->with( $data );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function merchant_solutions( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'merchant-solutions';
        $data['title'] = 'SlashMyFees – Merchant Solutions';
        $data['description'] = 'Merchant Solutions also known as Merchant Services designate a broad category of financial services intended for use by businesses.';
        return view('merchant-solutions')->with( $data );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pos_system( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'pos-system';
        $data['title'] = 'SlashMyFees – POS System';
        $data['description'] = 'The point of sale (POS) designates the time and place where a transaction is completed.';
        return view('pos-system')->with( $data );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function credit_card_fees_rates( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'credit-card-fees-rates';
        $data['title'] = 'SlashMyFees – Credit Card Fees & Rates';
        $data['description'] = 'Credit card processing fees can be pretty straightforward once the components are analyzed individually. With this article, your helpful team at SlashMyFees will explain all of the different components of credit card processing costs to give you a solid understanding of the charges and how you can do some cost control';
        return view('credit-card-fees-rates')->with( $data );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function credit_card_processing_providers( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'credit-card-processing-providers';
        $data['title'] = 'SlashMyFees – Credit Card Processing Providers';
        $data['description'] = 'SlashMyFees has partnered with the best processors in the industry so you can feel certain you have made the best choice for your payment processing needs!';
        return view('credit-card-processing-providers')->with( $data );
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pos_partners ( Request $request )
    {
        //
        $data = array();
        $data['page'] = 'pos-partners';
        $data['title'] = 'SlashMyFees – Point of Sales Partners';
        $data['description'] = 'Whether your business is retail, quick serve, restaurant, bar, or other, the search for the best Point of Sale (POS) system for your business has always been just as complicated as finding the perfect credit card processor.';
        return view('pos-partners')->with( $data );
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

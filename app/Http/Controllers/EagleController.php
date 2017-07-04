<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\EagleModel;

class EagleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('data');
        return "test";
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show_order_list(){

        //$orders = EagleModel::query('SELECT * FROM EAGLEDW.OH WHERE oh_customer_number = 000150 LIMIT 100');
        //$orders = DB::connection('mysql2')->select('SELECT * FROM EAGLEDW.OH WHERE oh_customer_number = 000150');
        $orders = DB::connection('mysql2')->select('SELECT * FROM EAGLEDW.OH');
        return view('eagleorders', compact('orders'));
        }


    public function show_customer_list(){

        $customers = DB::connection('mysql2')->select('SELECT * FROM EAGLEDW.dw_customer');
        return view('eaglecustomers', compact('customers'));
    }

    public function show_contact_list(){

        $contacts = DB::connection('mysql2')->select('SELECT * FROM EAGLEDW.CX WHERE cx_customer = 000150');
        return view('eaglecontacts', compact('contacts'));
    }


// THIS SECTION NOT USED FOR EAGLE CONTROLLER

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
        //
//    }
}

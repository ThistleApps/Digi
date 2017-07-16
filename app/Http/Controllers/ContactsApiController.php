<?php

namespace App\Http\Controllers;

use App\Eagle;
use App\EagleModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\CX;
use Illuminate\Support\Facades\DB;

class ContactsApiController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gets all the contacts
        $contacts = EagleModel::all();
        return response()->json($contacts);

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

    public function showContact()
    {
        //Gets the first contact in the list of contacts
        $contact = EagleModel::where('cx_email_addr_lookup_key', 'mduncan@epicor.com')->firstOrFail();
        return response()->json($contact);

    }

    public function showContactList()
    {
        //Gets Contacts for given email
        $contactList = EagleModel::where('cx_email_addr_lookup_key', 'mduncan@epicor.com')->get();
        return response()->json($contactList);

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



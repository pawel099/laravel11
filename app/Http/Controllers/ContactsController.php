<?php

// contakts


// 92a9395fbdd6374c6bd2761ec46a14e97d8d7003
namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('profile.send');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $send_message = new contacts();
         
         $send_message->name  = $request->input('name');
         $send_message->email = $request->input('email');
         $send_message->number = $request->input('number');
         $send_message->message = $request->input('message');

         $send_message->save();

         return redirect('contakt');
    }

    /**
     * Display the specified resource.
     */
    public function show(contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacts $contacts)
    {
        //
    }
}

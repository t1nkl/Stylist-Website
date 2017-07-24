<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use App\Models\Service;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('contact', compact('services'));
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
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');

        // Mail::send('email.mail', ['name' => $contact->name, 'phone' => $contact->phone, 'email' => $contact->email, 'url' => $contact->url, 'content' => $contact->content,], function ($m){
        //     $m->from('hello@app.com', 'LeoStudio');
        //     $m->to('gudvon@gmail.com')->subject('LeoStudio Contact Form');
        // }); 

        if ($contact->save()){
            try {
                // Mail::send('emails.email', ['name' => $contact->name, 'phone' => $contact->phone, 'url' => $contact->url, 'email' => $contact->email, 'content' => $contact->content, 'date' => date('Y-m-d H:i:s')], function ($message) {
                //     $message->from('order@leodigital.com.ua', 'LeoDigital');
                //     $message->to('order@leodigital.com.ua', 'LeoDigital')->subject('New message!');
                // });
                return response()->json(200);
            } catch (\Exception $e) {
                return response()->json(['error' => true, 'msg' => $valid_url], 400);
            }
        }   

        // if ($contact->save()){
        //     return response()->json(200); 
        // }      
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

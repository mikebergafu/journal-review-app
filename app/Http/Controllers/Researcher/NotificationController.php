<?php

namespace App\Http\Controllers\Researcher;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsReq;
use App\Http\Requests\SubscribeReq;
use App\Notifications\SubscribeUser;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NotificationController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactUsReq $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $saved = $contact->save();
        if(!$saved){
            toastr()->error('Sorry! an error has occurred');
            return redirect()->back();
        }
        Auth::user()->notify(new SubscribeUser($contact));
        toastr()->success('Message successfully sent');
        return redirect()->back();
    }

    public function subscribe(SubscribeReq $request)
    {
        $sub = new Subscription();
        $sub->email = $request->email;

        $saved = $sub->save();
        if(!$saved){
            toastr()->error('Sorry! an error has occurred');
            return redirect()->back();
        }
        toastr()->success('Subscription successfully completed');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

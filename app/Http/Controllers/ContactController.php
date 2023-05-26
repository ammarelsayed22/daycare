<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{



    public function index()
    {

        return view('backend.dad.contact');
    }

    public function all_contacts(Daycare $daycare)
    {
        $daycareId = Auth::guard('dad')->user()->daycare_id;
        $Contact = Contact::where('daycare_id' , $daycareId)->get();

        return view('backend.contact.all_contacts' , compact('contacts'));
    }


    public function store(Request $request)
    {
        $name    = $request->name;
        $email   = $request->email;
        $phone   = $request->phone;
        $message = $request->message;
        $daycare_id =$request->daycare_id;

        $contacts = Contact::create([
            'name'     =>$name,
            'email'    =>$email,
            'phone'    =>$phone,
            'message'  =>$message,
            'daycare_id'=>$daycare_id,
        ]);

        $contacts->save();

        return redirect()->route('dad.dashboard');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacts = Contact::find($id);
        if ($contacts) {
        $contacts->delete();
    }


        return redirect()->route('auth.dashboard.all_contacts');
    }
}

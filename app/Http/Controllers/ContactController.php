<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('all-messages-page')->with('success', 'Message added');
    }

    public function editMessageSubmit($id, ContactRequest $req) {

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('one-message-info-page', $id)->with('success', 'Message edited');

    }

    public function allData() {
        $contact = new Contact();
//        return view('messages', ['data' => $contact->orderBy('id', 'desc')->take(1)->get()]);
        return view('all-messages-page', ['data' => $contact->get()]);
    }

    public function showContactInfo($id) {
        $contact = new Contact;

        return view('one-message-info-page', ['data' => $contact->find($id)]);
    }

    public function editMessage($id){
        $contact = new Contact;

        return view('one-message-info-edit-page', ['data' => $contact->find($id)]);
    }

    public function deleteMessageSubmit($id) {
        Contact::find($id)->delete();
        return redirect()->route('all-messages-page')->with('success', 'Message was deleted');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
//se Validator;
class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::get();
        return view('pages.contact.dashboard',compact('contact'));
    }

    public function create()
    {
        return view('pages.contact.create');
    }

    public function store(Request $request)
    {

        $data = $request->only(['name','adress','email','phone','map']);
        $contact = Contact::create($data);
        return redirect()->route('contact.index');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('pages.contact.update',compact('contact'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->only(['name','adress','email','phone','map']);
        $contact = Contact::where('id',$id)->firstOrFail();
        $contact->update($data);
        return redirect()->back();
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}

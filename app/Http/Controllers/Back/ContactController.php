<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('back.contact.index',compact('contacts'));
    }

    public function store()
    {
        return view('back.contact.create');
    }

    public function create(Request $request)
    {

        $data = $request->only(['name','adress','email','phone','map']);
        $contact = Contact::create($data);
        return redirect()->route('admin.contact');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('back.contact.edit',compact('contact'));
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
        return redirect()->route('admin.contact');
    }
}

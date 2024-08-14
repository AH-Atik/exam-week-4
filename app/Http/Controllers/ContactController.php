<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function createNewForm()
    {
        return view('create');
    } 
    function createNewContact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        
        return redirect('/contacts')->with('success', 'Contact Added Successfully');
    } 

    function index()
    {
        $contacts = Contact::all();
        return view('index', ['contacts' => $contacts]);
    }
    function show (Request $request, Contact $contact)
    {
        return view('show', ['contact' => $contact]);
    }
    function update(Request $request, Contact $contact)
    {
        return view('edit', ['contact' => $contact]);
    }
    function updateContact(Request $request, $id)
    {
            $contacts = Contact::find($id);
            $contacts->name = $request->input('name');
            $contacts->email = $request->input('email');
            $contacts->phone = $request->input('phone');
            $contacts->address = $request->input('address');
            $contacts->update();
            return redirect('/contacts')->with('success', 'Contact Updated Successfully');
    }
    function deleteContact($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect('/contacts')->with('error', 'Contact Deleted Successfully');
    }

    function searchData(Request $request)
    {   if($request->search){
        $search = $request->input('search');    
        $contacts = Contact::where('name', 'LIKE', '%' . $search . '%')->orWhere('email', 'LIKE', '%' . $search . '%')->get();
        return view('index', ['contacts' => $contacts]);
    }
    
    else{
        $contacts = Contact::all();
        if($request->sort_by == 'name_asc'){
        $contacts = Contact::orderBy('name', 'asc')->get();
        } elseif($request->sort_by == 'name_desc'){
        $contacts = Contact::orderBy('name', 'desc')->get();
        } elseif($request->sort_by == 'date_asc'){
        $contacts = Contact::orderBy('created_at', 'asc')->get();
        } elseif($request->sort_by == 'date_desc'){
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        }
        return view('index', ['contacts' => $contacts]);
        } 
    }
}
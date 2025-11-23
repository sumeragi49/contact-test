<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        
        return view('index',compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'category_id', 'gender', 'email', 'tel', 'address', 'building','category', 'detail']);

        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
            $contact = $request->only(['last_name', 'first_name','category_id', 'gender', 'email', 'tel', 'address', 'building','category', 'detail']);
            Contact::create($contact);

            return view('thanks');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->keyword)->get();
        $category = Category::all();

        return view('admin', compact('contacts', 'categories'));
    }
}

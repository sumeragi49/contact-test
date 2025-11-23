<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        return view('admin', compact('contacts', 'categories'));
    }
}

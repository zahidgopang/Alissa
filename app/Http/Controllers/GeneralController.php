<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;
use App\Models\Product;

class GeneralController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('Productimages')->limit('8')->get();
        return view('index',compact('products'));
    }
    public function allproducts()
    {
        return view('products/Kettle-Grills');
    }
    
    public function products()
    {
        return view('products/Kettle-Grills');
    }
    public function productsdetail()
    {
        return view('products/pro_details');
    }
    public function whyus()
    {
        return view('why-us');
    }
    public function solution()
    {
        return view('gallery');
    }
    public function aboutus()
    {
        return view('about-us');
    }
    public function faq()
    {
        return view('faq');
    }
    public function contactus()
    {
        return view('contact-us');
    }
    public function news()
    {
        return view('news');
    }
    public function post()
    {
        return view('post');
    }
    public function storemessage(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name ;
        $contact->phone = $request->phone;
        $contact->email = $request->email ;
        $contact->message = $request->message ;
        $contact->company = $request->company ;
        $contact->save();
        return redirect()->back();
    }
    public function message()
    {
        $contact = Contact::all();
        return view('Admin/Messages' , compact('contact'));
    }
    public function DeleteMsg($id)
    {

        $msg = Contact::find($id); 
        $msg->delete();
        return redirect()->back();
    }
}

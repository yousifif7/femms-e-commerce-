<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Reviews;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //
    public function products(){
        return view('navs.products',['products' => Products::latest()]);
    }

    public function contact(){
        return view('navs.contact');
    }

    public function reviews(){
        return view('navs.reviews',['reviews' => Reviews::latest()]);
    }

    public function aboutus(){
        return view('navs.aboutus');
    }

    public function manage(){
        if(Auth::user()->role=='admin'){

            return view('admin.main',['products' => Products::latest()]);
        }else{
            abort(404);
        }
    }

    public function manageproducts(){
        return view('admin.manageproducts',['products' => Products::latest()]);
    }

    public function messages(){
        return view('admin.messages',['conatacts' => Contact::latest()]);
    }
}

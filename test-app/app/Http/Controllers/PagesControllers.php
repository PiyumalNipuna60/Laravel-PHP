<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function indexHome(){
        return view('home');
    }

    public function indexCustomer(){
        return view('customer-Page');
    }

    public function indexItem(){
        return view('item-Page');
    }
}

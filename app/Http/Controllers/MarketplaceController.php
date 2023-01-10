<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index(){
        return view('marketplace.index',['title'=>'Marketplace']);
    }
}

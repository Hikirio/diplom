<?php

namespace App\Http\Controllers\Offers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function dashboard(){
        return view('employer.mainpage');
    }
    //
    public function offer(){
        return view('offers.all-offers');
    }
}

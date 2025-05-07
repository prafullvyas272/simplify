<?php

namespace App\Http\Controllers;

use App\Models\Pakage;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pakage::with('pakageDetail')->get();
        //dd($pricings);
        return view('Pricing',compact('pricings'));
    }
}

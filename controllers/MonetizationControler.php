<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonetizationController extends Controller
{
    public function creatorFund()
    {
        return view('monetization.creator_fund');
    }

    public function brandPartnerships()
    {
        return view('monetization.brand_partnerships');
    }

    public function advertising()
    {
        return view('monetization.advertising');
    }

    // Add more methods as needed for monetization
}

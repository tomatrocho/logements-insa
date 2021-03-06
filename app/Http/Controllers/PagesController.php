<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bid;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function home()
    {
        $bids = Bid::approved()->latest()->limit(10)->paginate(10);

        return view('pages.home', compact('bids'));
    }

    public function about()
    {
        return view('pages.about');
    }
}

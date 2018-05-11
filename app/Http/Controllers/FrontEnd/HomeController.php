<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\mail\sendMail;

class HomeController extends Controller
{
    public function index()
    {
      return view('FrontEnd.home.home');
    }
    public function clippingPath()
    {
      return view('FrontEnd.services.clipping-path');
    }
    public function portfolio()
    {
      return view('FrontEnd.portfolio.portfolio');
    }
    public function mail()
    {
        Mail::send(new sendMail());
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Notifications\EmailVerefication;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function homePage() {
        return view('index');
    }

    public function offersPage() {
        return view('offers.offers');
    }

    public function  aboutPage() {
        return view('about.about');
    }

    public function  contactPage() {
        return view('contact.contact');
    }
}

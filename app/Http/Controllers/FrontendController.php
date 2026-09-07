<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        return view('frontend.about.index');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function termsCondition()
    {
        return view('frontend.termsCondition.index');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacyPolicy.index');
    }

    public function refundPolicy()
    {
        return view('frontend.refundPolicy.index');
    }

    public function disclaimer()
    {
        return view('frontend.disclaimer.index');
    }
}

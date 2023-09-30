<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function post()
    {
        return view('pages.post');
    }

    public function listPost()
    {
        return view('pages.listPost');
    }

    public function Landing()
    {
        return view('pages.Landing');
    }

    public function dikoPos()
    {
        return view('pages.dikoPos');
    }

    public function dikoSp()
    {
        return view('pages.dikoSp');
    }

    
    // public function berandaLanding()
    // {
    //     return view('pages.Landing.berandaLanding');
    // }

    // public function aboutLanding()
    // {
    //     return view('pages.Landing.aboutLanding');
    // }

    // public function penggunaLanding()
    // {
    //     return view('pages.Landing.penggunaLanding');
    // }

    public function featuresLanding()
    {
        return view('pages.Landing.featuresLanding');
    }

    public function reviewLanding()
    {
        return view('pages.Landing.reviewLanding');
    }

    public function faqLanding()
    {
        return view('pages.Landing.faqLanding');
    }

    // public function mottoLanding()
    // {
    //     return view('pages.Landing.mottoLanding');
    // }

    // public function mockupLanding()
    // {
    //     return view('pages.Landing.mockupLanding');
    // }

    // public function mockupsLanding()
    // {
    //     return view('pages.Landing.mockupsLanding');
    // }

    // public function contactLanding()
    // {
    //     return view('pages.Landing.contactLanding');
    // }


    // public function berandaSp()
    // {
    //     return view('pages.SP.berandaSp');
    // }

    // public function keunggulanSp()
    // {
    //     return view('pages.SP.keunggulanSp');
    // }

    public function featuresSp()
    {
        return view('pages.SP.featuresSp');
    }

    public function featuresApplicationSp()
    {
        return view('pages.SP.featuresApplicationSp');
    }

    public function faqSp()
    {
        return view('pages.SP.faqSp');
    }

    public function hargaSp()
    {
        return view('pages.SP.hargaSp');
    }

    public function pluginSp()
    {
        return view('pages.SP.pluginSp');
    }

    // public function mockupsSp()
    // {
    //     return view('pages.SP.mockupsSp');
    // }

    // public function promotionsSp()
    // {
    //     return view('pages.SP.promotionsSp');
    // }

    // public function blogSp()
    // {
    //     return view('pages.SP.blogSp');
    // }

    // public function contactSp()
    // {
    //     return view('pages.SP.contactSp');
    // }

    
    public function featuresPos()
    {
        return view('pages.POS.featuresPos');
    }

    public function featuresApplicationPos()
    {
        return view('pages.POS.featuresApplicationPos');
    }

    public function faqPos()
    {
        return view('pages.POS.faqPos');
    }

    public function hargaPos()
    {
        return view('pages.POS.hargaPos');
    }

    public function pluginPos()
    {
        return view('pages.POS.pluginPos');
    }


    // public function mockupsPos()
    // {
    //     return view('pages.POS.mockupsPos');
    // }

    // public function blogPos()
    // {
    //     return view('pages.POS.blogPos');
    // }
}

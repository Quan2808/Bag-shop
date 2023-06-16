<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function introduce()
    {
        return view('pages.introduce');
    }

    public function agentSystem()
    {
        return view('pages.agent-system');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function faq()
    {
        return view('pages.faq.faq');
    }

    public function returnPolicy()
    {
        return view('pages.faq.return-policy');
    }

    public function privacyPolicy()
    {
        return view('pages.faq.privacy-policy');
    }

    public function term()
    {
        return view('pages.faq.term');
    }

    public function whyChooseUs()
    {
        return view('pages.faq.why-choose-us');
    }

    public function orderProcess()
    {
        return view('pages.faq.order-process');
    }

    public function leadingQualityAndPrestigeGarmentCompany()
    {
        return view('pages.faq.leading-quality-and-prestige-garment-company');
    }

    public function manufacturingOnDemandPremiumBagsNationwide()
    {
        return view('pages.faq.manufacturing-on-demand-premium-bags-nationwide');
    }
}

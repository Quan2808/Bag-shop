<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function cart()
    {
        return view('pages.product.collection.cart');
    }

    public function laptopBag()
    {
        return view('pages.product.collection.laptop-bag');
    }

    public function crossbodyBag()
    {
        return view('pages.product.collection.crossbody-bag');
    }

    public function travelBag()
    {
        return view('pages.product.collection.travel-bag');
    }

    public function product()
    {
        $list = DB::table('product')->get();
        $product_manage = view('pages.product.collection.product')->with('list', $list);
        return view('pages.layouts.app', ['content' => $product_manage]);
    }
}

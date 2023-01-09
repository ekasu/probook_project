<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Home;
use App\Models\Pricing;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{

    public function frontIndexupper()
    {
        $homedataupper =   Home::where('category', 'top-section')->latest()->limit(1)->get();
        $homedatalower =   Home::where('category', 'bottom-section')->latest()->limit(1)->get();

        $servicedataone =   Service::where('category', '1')->latest()->limit(1)->get();
        $servicedatatwo =   Service::where('category', '2')->latest()->limit(1)->get();
        $servicedatathree =   Service::where('category', '3')->latest()->limit(1)->get();
        $servicedatafour =   Service::where('category', '4')->latest()->limit(1)->get();
        $servicedatafive =   Service::where('category', '5')->latest()->limit(1)->get();
        $servicedatasix =   Service::where('category', '6')->latest()->limit(1)->get();

        $pricingStarter =   Pricing::where('name', 'Starter')->latest()->limit(1)->get();
        $pricingExclusive =   Pricing::where('name', 'Exclusive')->latest()->limit(1)->get();
        $pricingPremium =   Pricing::where('name', 'Premium')->latest()->limit(1)->get();

        $footer =   Footer::latest()->limit(1)->get();

        return view('frontIndex')
            ->with('homedataupper', $homedataupper)
            ->with('homedatalower', $homedatalower)
            ->with('servicedataone', $servicedataone)
            ->with('servicedatatwo', $servicedatatwo)
            ->with('servicedatathree', $servicedatathree)
            ->with('servicedatafour', $servicedatafour)
            ->with('servicedatafive', $servicedatafive)
            ->with('servicedatasix', $servicedatasix)
            ->with('pricingStarter', $pricingStarter)
            ->with('pricingExclusive', $pricingExclusive)
            ->with('pricingPremium', $pricingPremium)
            ->with('footer', $footer);
    }
}

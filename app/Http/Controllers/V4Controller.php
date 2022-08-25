<?php

namespace App\Http\Controllers;

use App\Model\AdminSettings;
use App\Model\estateinfo;
use App\Model\region;
use Illuminate\Http\Request;

class V4Controller extends Controller
{
    public function index()
    {
        $estateinfo = estateinfo::where('estateVIP', 'Normal')->where('publish', 'active')->orderBy('dateEn', 'DESC')->limit(12)->get();

        $estateVIP = estateinfo::where('estateVIP', 'VIP')->where('publish', 'active')->orderBy('dateEn', 'DESC')->get();

        $estatePresell = estateinfo::where('estateVIP', 'Presell')->where('publish', 'active')->orderBy('created_at', 'DESC')->get();


        $setting = AdminSettings::find(1);

        $region = region::get();


        return view('Home.v4.index', ['estate' => $estateinfo, 'setting' => $setting, 'region' => $region, 'estateVIP' => $estateVIP, 'estatePresell' => $estatePresell]);
    }

    public function about()
    {

        return view('Home.v4.about');
    }

    public function contactus()
    {

        return view('Home.v4.contactus');
    }

    public function EstateRequest()
    {

        return view('Home.v4.EstateRequest');
    }

    public function EstateProperty($trackcode)
    {

        $estateinfo = estateinfo::where('TrackingCode', $trackcode)->first();
        return view('Home.v4.property', ['itemestate' => $estateinfo]);
    }

    public function getProperties($typeadv)
    {


        $estateInfo = estateinfo::where('advType', $typeadv)->where('publish', 'active')->orderby('dateEn', 'desc')->paginate(20);
        $setting = AdminSettings::find(1);
        return view('Home.v4.Properties', ['estateInfo' => $estateInfo, 'type' => $typeadv, 'setting' => $setting]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\AdminSettings;
use App\Model\estateinfo;
use App\Model\Project;
use App\Model\region;
use Illuminate\Http\Request;

class V3Controller extends Controller
{
    public function index()
    {
        $estateinfo = estateinfo::where('estateVIP', 'Normal')->where('publish', 'active')->orderBy('dateEn', 'DESC')->limit(12)->get();
        $estateVIP = estateinfo::where('estateVIP', 'VIP')->where('publish', 'active')->orderBy('dateEn', 'DESC')->get();
        $estatePresell = estateinfo::where('estateVIP', 'Presell')->where('publish', 'active')->orderBy('created_at', 'DESC')->get();

        $setting = AdminSettings::find(1);
        $region = region::get();
        return view('Home.v3.index', ['estate' => $estateinfo, 'setting' => $setting, 'region' => $region, 'estateVIP' => $estateVIP, 'estatePresell' => $estatePresell]);
    }

    public function about()
    {
        return view('Home.v3.about');
    }

    public function contactus()
    {
        return view('Home.v3.contactus');
    }

    public function EstateRequest()
    {
        return view('Home.v3.EstateRequest');
    }

    public function EstateProperty($trackcode)
    {
        $estateinfo = estateinfo::where('TrackingCode', $trackcode)->first();
        $estateRelate = estateinfo::where('EstateTypeId', $estateinfo->EstateTypeId)->get();
        return view('Home.v3.property', ['itemestate' => $estateinfo, 'estateRelate' => $estateRelate]);
    }

    public function ProjectProperty($trackcode)
    {
        $estateinfo = Project::where('TrackingCode', $trackcode)->first();
        $estateRelate = estateinfo::where('EstateTypeId', $estateinfo->EstateTypeId)->get();
        return view('Home.v3.ProjectProperty', ['itemestate' => $estateinfo, 'estateRelate' => $estateRelate]);
    }

    public function getProperties($typeadv)
    {
        $estateInfo = estateinfo::where('advType', $typeadv)
            ->where('publish', 'active')
            ->orderby('dateEn', 'desc')
            ->paginate(20);

        $setting = AdminSettings::find(1);

        return view('Home.v3.Properties', ['estateInfo' => $estateInfo, 'type' => $typeadv, 'setting' => $setting]);
    }

    public function showproject()
    {
        $estateInfo = Project::where('publish', 'active')->orderby('dateEn', 'desc')->paginate(20);
        $setting = AdminSettings::find(1);
        return view('Home.v3.Project', ['estateInfo' => $estateInfo, 'setting' => $setting]);
    }
}

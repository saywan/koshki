<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Model\AdminSettings;
use App\Model\Contract;
use App\Model\estateimage;
use App\Model\estateinfo;
use App\Model\estateinfopossibility;
use App\Model\estatetype;
use App\Model\notification;
use App\Model\OfferEstate;
use App\Model\ownershiptype;
use App\Model\possibility;
use App\Model\region;
use App\Model\sliders;
use App\Model\Team;
use App\Model\UsageTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

use Morilog\Jalali\Jalalian;

class HomeController extends Controller
{

    public function index()
    {
        $estateinfo = estateinfo::where('estateVIP', 'Normal')->where('publish', 'active')->orderBy('dateEn', 'DESC')->limit(12)->get();

        $estateVIP = estateinfo::where('estateVIP', 'VIP')->where('publish', 'active')->orderBy('dateEn', 'DESC')->get();

        $estatePresell = estateinfo::where('estateVIP', 'Presell')->where('publish', 'active')->orderBy('created_at', 'DESC')->get();


        $setting = AdminSettings::find(1);

        $region = region::get();



        return view('Home.index', ['estate' => $estateinfo,  'setting' => $setting, 'region' => $region, 'estateVIP' => $estateVIP, 'estatePresell' => $estatePresell]);
    }
    public function about(){

        return view('Home.about');
    }
    public function contactus(){

        return view('Home.contactus');
    }
    public function EstateRequest(){

        return view('Home.EstateRequest');
    }
    public function EstateProperty($trackcode)
    {

        $estateinfo = estateinfo::where('TrackingCode', $trackcode)->first();
        return view('Home.property', ['itemestate' => $estateinfo]);
    }
    public function getProperties($typeadv)
    {


        $estateInfo = estateinfo::where('advType', $typeadv)->where('publish', 'active')->orderby('dateEn', 'desc')->paginate(20);
        $setting = AdminSettings::find(1);
        return view('Home.Properties', ['estateInfo' => $estateInfo, 'type' => $typeadv, 'setting' => $setting]);
    }

    public function AddEstate(Request $request)
    {

        if ($request->action == 'AddEstate') {


            //  dd($request->all());

            $setting = AdminSettings::find(1);


            $temp = public_path('temp/');
            //$small_path=public_path('EstateImage/');


            $estatetype = $request->estatetype;

            $totalLand = 0;
            $squrefootage = 0;
            $totalfloordiv = 0;
            $floor = 0;
            $totlaunitprefloor = 0;
            $beedroomtotal = null;
            $yearmake = null;
            $postion = 9;

            if ($estatetype == 1) {
                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;
                $beedroomtotal = $request->beedroomtotal;
                $totalfloordiv = $request->totalfloordiv;
            } else if ($estatetype == 2) {


                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;
                $beedroomtotal = $request->beedroomtotal;
                $totalfloordiv = $request->totalfloordiv;
                $floor = $request->floor;
                $totlaunitprefloor = $request->totlaunitprefloor;//تعداد واحد در طبقه

            } else if ($estatetype == 3) {
                $totalLand = $request->totalLand;
            } else if ($estatetype == 4) {

                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;
                $beedroomtotal = $request->beedroomtotal;
                $totalfloordiv = $request->totalfloordiv;
                $floor = $request->floor;


            } else if ($estatetype == 5) {
                $totalLand = $request->totalLand;

            } else if ($estatetype == 6) {


                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;

            } else if ($estatetype == 7) {
                $totalLand = $request->totalLand;
            } else if ($estatetype == 8)//store
            {
                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;
            } else if ($estatetype == 9 || $estatetype == 10 || $estatetype == 12)//store
            {
                $totalLand = $request->totalLand;

            } else if ($estatetype == 11 || $estatetype == 13 || $estatetype == 14)//store
            {

                $totalLand = $request->totalLand;
                $squrefootage = $request->squrefootage;
                $yearmake = $request->yearmake;
                $beedroomtotal = $request->beedroomtotal;
                $totalfloordiv = $request->totalfloordiv;


            }


            if (empty($request->postion)) {
                $postion = 9;
            } else {
                $postion = $request->postion;
            }


            $TrackCode = Helper::getToken(9);
            $digits = 7;
            $CodeEstate = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
            $EstateType = new estateinfo();
            $EstateType->userId = Auth::user()->id;
            $EstateType->OwenershipTypeId = $request->ownership;
            $EstateType->advType = $request->StatusEstateType;
            $EstateType->MobileNumber = $request->MobileNumber;
            $EstateType->Email = $request->Email;
            $EstateType->fullname = $request->fullname_user;
            $EstateType->Code = $CodeEstate;
            $EstateType->TrackingCode = $TrackCode;
            $EstateType->UsageTypeId = $request->usagetype;
            $EstateType->EstateTypeId = $request->estatetype;

            $EstateType->RegionId = $request->region;
            $EstateType->Address = $request->Address_user;
            $EstateType->LandTotalSquare = $totalLand;
            $EstateType->SquareFootage = $squrefootage;
            $EstateType->RoomNumber = $beedroomtotal;
            $EstateType->ComplimentalDescription = $request->TextEstate;
            $EstateType->status = $request->StatusEstate;
            $EstateType->position_adv = $postion;

            $EstateType->totalfloor = $totalfloordiv;
            $EstateType->floor = $floor;
            $EstateType->totlaunitprefloor = $totlaunitprefloor;
            $EstateType->unitnumber = 0;

            $EstateType->elevator = $request->elevator;
            $EstateType->parking = $request->parking;
            $EstateType->warehouse = $request->warehouse;
            $EstateType->Balcony = $request->Balcony;

            if ($request->StatusVam == 'no') {
                $EstateType->loanAmount = 0;
            } else {

                $EstateType->loanAmount = str_replace(",", "", $request->VamAmount);

            }

            $EstateType->yearmade = $request->yearmake;

            if ($request->StatusEstateType == 'rent') {

                $EstateType->price = 0;
                $EstateType->price_rahan = str_replace(",", "", $request->price_rahan);
                $EstateType->RentAmount = str_replace(",", "", $request->price_ajarh);

            } elseif ($request->StatusEstateType == 'sale') {

                $EstateType->price = str_replace(",", "", $request->price);
                $EstateType->price_rahan = 0;
                $EstateType->RentAmount = 0;


            }


            $EstateType->dateEn = date('Y-m-d');

            $EstateType->EstateDateTimeRegister = Jalalian::forge('today')->format('%A, %d %B %y');
            $EstateType->boosted = 0;


            if ($EstateType->save()) {


                $arr = array();
                $id = $EstateType->id;
                $advType = $EstateType->advType;

                $Address = $EstateType->Address;

                $message = [
                    'status' => 100,
                    'info_estate :' . $id . '& adType:' . $advType,
                    'insert success '

                ];


                $arr = $request->possibilies;
                if (!empty($arr)) {
                    $arr = explode(',', $request->possibilies);

                    foreach ($arr as $itemarr) {


                        $estateinfopos = new estateinfopossibility();
                        $estateinfopos->EstateId = $id;
                        $estateinfopos->PossibilityId = $itemarr;
                        $estateinfopos->save();

                    }

                }


                /*   $TrackEstateCode=$EstateType->TrackingCode; // "5QkTIfFsb";
                   $EstateCode=$EstateType->Code; // "1189717"
                   $foldername=$EstateCode.'-'.$TrackEstateCode;
                   $directory=public_path('EstateImage/').$foldername;*/

                if ($request->formaData) {
                    $TrackEstateCode = $EstateType->TrackingCode;
                    $EstateCode = $EstateType->Code;
                    $foldername = $EstateCode . '-' . $TrackEstateCode;

                    $directory = public_path('EstateImage/') . $foldername;
                    /*   if(!file_exists($directory))
                {
                    mkdir(public_path('EstateImage/').$foldername);
                    mkdir(public_path("EstateImage/$foldername/medium"));
                    mkdir(public_path("EstateImage/$foldername/small"));
                }

                $large_path=public_path('EstateImage/'.$foldername.'/medium/');
                $small_path=public_path('EstateImage/'.$foldername.'/small/');
                $main_path=public_path('EstateImage/'.$foldername.'/');*/


                    if (!file_exists($directory)) {
                        mkdir(public_path('EstateImage/') . $foldername);
                        mkdir(public_path("EstateImage/$foldername/medium"));
                        mkdir(public_path("EstateImage/$foldername/small"));
                    }


                    $large_path = public_path('EstateImage/' . $foldername . '/medium/');
                    $small_path = public_path('EstateImage/' . $foldername . '/small/');
                    $main_path = public_path('EstateImage/' . $foldername . '/');

                    if (count($request->formData)) {

                        //dd($request->formData);

                        foreach ($request->formData as $image) {


                            $explod = explode(',', $image);
                            // dd($explod);
                            $decode = base64_decode($explod[1]);

                            if (str_contains($explod[0], 'jpeg')) {
                                $extension = 'jpg';
                            } else {
                                $extension = 'png';
                            }
                            $fileName = str_random() . '.' . $extension;
                            $file_large = strtolower(time() . str_random(5) . '.' . $extension);
                            $file_small = strtolower(time() . str_random(5) . '.' . $extension);
                            $path = public_path('temp/' . $file_large);


                            file_put_contents($path, $decode);

                            $setting = AdminSettings::find(1);

                            if (\File::exists($temp . $file_large)) {

                                $img = Image::make($temp . $file_large);

                                $img->insert(public_path('image/' . $setting->logo_watermark), 'bottom-right', 10, 10);
                                $img->save($temp . $file_large);
                                \File::copy($temp . $file_large, $main_path . $file_large);


                            }//<--- IF FILE EXISTS*/


                            /*    if ( \File::exists($path) ) {


                                    $img = Image::make($path);
                                    $img->insert(public_path('image/'. $setting->logo_watermark), 'bottom-right', 10, 10);
                                    $img->save($path);
                                    \File::copy($path,$main_path.$file_large );

                                }//<--- IF FILE EXISTS*/

                            set_time_limit(0);


                            //$width  = Helper::getWidth( $temp.$fileName );
                            //$height = Helper::getHeight( $temp.$fileName );

                            $width = Helper::getWidth($temp . $file_large);
                            $height = Helper::getHeight($temp . $file_large);


                            $max_width = '800';

                            if ($width < $height) {
                                $max_width = '400';
                            }

                            if ($width > $max_width) {
                                $scale = $max_width / $width;
                                $uploaded = Helper::resizeImage($temp . $file_large, $width, $height, $scale, $temp . $file_large);
                            } else {
                                $scale = 1;
                                $uploaded = Helper::resizeImage($temp . $file_large, $width, $height, $scale, $temp . $file_large);
                            }

                            /* if ( $width > $max_width ) {
                                 $scale = $max_width / $width;
                                 $uploaded = Helper::resizeImage( $path, $width, $height, $scale, $path );
                             } else {
                                 $scale = 1;
                                 $uploaded = Helper::resizeImage( $path, $width, $height, $scale, $path );
                             }*/


                            //=============== Small Large =================//

                            Helper::resizeImageFixed($temp . $file_large, 640, 424, $temp . $file_small);

                            Helper::resizeImageFixed($temp . $file_large, 1366, 905, $temp . $file_large);


                            /*    Helper::resizeImageFixed( $temp.$file_large, $setting->min_width, $setting->max_height, $temp.$file_small );
                                Helper::resizeImageFixed( $temp.$file_large, 1366, 905, $temp.$file_large );*/

                            /* Helper::resizeImageFixed( $path, 640, 424, $temp.$file_small );
                             Helper::resizeImageFixed( $path, 1366, 905, $path );*/


                            $img_main = Image::make($temp . $file_large);
                            $img_main->resize(300, 200);
                            $img_main->save($large_path . $file_large);
                            //=============== Medium Large =================//
                            //======= Copy Folder Small and Delete...
                            /*if ( \File::exists($temp.$file_small) ) {

                                $img = Image::make($temp.$file_small);
                                $img->insert(public_path('image/'. $setting->logo_watermark), 'bottom-right', 10, 10);
                                $img->save($temp.$file_small);

                                \File::copy($temp.$file_small,$small_path.$file_small );
                                \File::delete($temp.$file_small);

                            }//<--- IF FILE EXISTS*/


                            if (\File::exists($temp . $file_small)) {

                                /*  $img = Image::make($temp.$file_small);
                                  $img->insert(public_path('image/logo.png'), 'bottom-right', 10, 10);
                                  $img->save($temp.$file_small);*/
                                \File::copy($temp . $file_small, $small_path . $file_small);
                                \File::delete($temp . $file_small);


                            }//<--- IF FILE EXISTS
                            Image::make($temp . $file_large)->orientate();


                            if (\File::exists($temp . $file_large)) {

                                \File::copy($temp . $file_large, $large_path . $file_large);
                                \File::delete($temp . $file_large);
                            }//<--- IF FILE EXISTS


                            /* $image_small  = $file_small;
                             $image_large  = $file_large;*/


                            $image_small = $file_small;
                            $image_large = $file_large;


                            /*$EstateImage=new estateimage();
                            $EstateImage->EstateId=$id;
                            $EstateImage->photo="/EstateImage/$foldername/".$image_large;
                            $EstateImage->namefolder=$foldername;
                            $EstateImage->namephoto=$fileName;
                            $EstateImage->save();*/

                            $estate = new estateimage();
                            $estate->EstateId = $id;
                            $estate->photo = "/EstateImage/$foldername/" . $image_large;
                            $estate->namefolder = $foldername;
                            $estate->namephoto = $image_large;
                            $estate->small = $image_small;
                            $estate->save();


                        }
                    }
                }


                return response()->json(['status' => 200, 'id' => $id]);

            } else {
                $message = [
                    'status' => 419,
                    'insert success ',

                ];
                return response()->json($message);
            }
        }

    }

    public function CheckBirthdayLeoMal()
    {

        $day = Jalalian::forge('now')->getDay() + 1;
        $month = Jalalian::forge('now')->getMonth();
        $check_Birth = OfferEstate::whereMonth('brith_date_buyer', $month)->whereDay('brith_date_buyer', $day)->get();
        // dd($check_Birth);
        if (count($check_Birth) > 0) {
            foreach ($check_Birth as $item) {
                $message = $item->name . 'باآرزوی سعادت و سلامتی در سالروز تولدتان';
                $statusMessage = Smsirlaravel::ultraFastSend(['Username' => $message], 44146, '09035478091');
            }
        }

        if ($statusMessage['IsSuccessful'] == true) {
            return true;
        } else {
            return false;
        }


    }

    public function CheckTenant()
    {

        $day = Jalalian::forge('now')->getDay() + 1;
        $month = Jalalian::forge('now')->getMonth();
        $check_Birth = Contract::whereMonth('brith_date_buyer', $month)->whereDay('brith_date_buyer', $day)->whereMonth('brith_date_seller', $month)->whereDay('brith_date_seller', $day)->get()->toArray();
        //  dd($check_Birth);
        if (count($check_Birth) > 0) {
            foreach ($check_Birth as $item) {
                // dd($item['lordname']);
                $message = $item['lordname'] . 'باآرزوی سعادت و سلامتی در سالروز تولدتان';
                $statusMessage1 = Smsirlaravel::ultraFastSend(['Username' => $message], 44146, $item['lordmobile']);

                $message2 = $item['tenant'] . 'باآرزوی سعادت و سلامتی در سالروز تولدتان';
                $statusMessage2 = Smsirlaravel::ultraFastSend(['Username' => $message2], 44146, $item['tenantmobile']);

            }
        }
        if ($statusMessage1['IsSuccessful'] == true || $statusMessage2['IsSuccessful'] == true) {
            return true;
        } else {
            return false;
        }


    }

    public function CheckFinish()
    {


        // dd( strtotime(date('Y-m-d', strtotime('-30 days')))  );

        //   1613347200
        $message ='لیلا نجفی'.'  '. '   ' . '  باآرزوی سعادت و سلامتی در سالروز تولدتان';
        dd($message);

        $date_range = date('Y-m-d', strtotime('-30 days'));
        $check_Birth = Contract::get()->toArray();
        //dd($check_Birth);
        if (count($check_Birth) > 0) {

            $datediff = [];
            $listExpire=[];
            foreach ($check_Birth as $key => $itemBrith) {

                $listExpire[]=array(
                    'id'=>$itemBrith['id'],
                    'dayExpire' =>Carbon::parse(date('Y/m/d H:s:i', time()))->diffInDays(Carbon::parse(date('Y/m/d H:s:i', $itemBrith['date_end'])))
                    );

             //   $datediff[] = Carbon::parse(date('Y/m/d H:s:i', time()))->diffInDays(Carbon::parse(date('Y/m/d H:s:i', $itemBrith['date_end'])));

               $arr = array_filter($listExpire, function($v){
                    return $v['dayExpire'] == 30;
                });


                foreach ($arr as $itemToExpire)
                {
                    if($itemToExpire['id'] == $itemBrith['id'])
                    {
                        $message = $itemBrith['tenant'] ;
                        $statusMessage = Smsirlaravel::ultraFastSend(['name' => $message], 44148 , '09035478091');


                    }
                }

            }
          //  dd($arr);



        }


    }


    public function getRegion()
    {
        $region = region::all();
        return $region;
    }

    public function getUsageType()
    {
        $region = UsageTypes::all();
        return $region;
    }

    public function getEstateOwnerShip()
    {
        $region = ownershiptype::all();
        return $region;
    }

    public function getPossibilities()
    {
        $region = possibility::all();
        return $region;
    }

    public function getEstatetype()
    {
        $region = estatetype::all();
        return $region;
    }

    public function getEstate()
    {
        $estateinfo = estateinfo::all();
        return $estateinfo;
    }

    public function EstateType()
    {
        $EstateType = estatetype::all();
        $noty = notification::where('seen', 0)->get();
        return view('admin.Estate.EstateType', ['estatetype' => $EstateType, 'noty' => $noty]);
    }

    public function showsearch(Request $request)
    {


         //dd($request->all());


        $regionselect_user = trim($request->input('regionselect'));
        $CodeEstat = trim($request->input('CodeEstat'));
        $Posselected = $request->Posselected;
        $estatetype_user = trim($request->input('estatetype_user'));
        $yearselect = trim($request->input('yearselect'));
        $RoomNumberSelect = trim($request->input('RoomNumberSelect'));


        $price_low = str_replace(",", "", $request->input('price_low'));

        $price_high = str_replace(",", "", $request->input('price_high'));


        $landtotal_low = str_replace(",", "", $request->input('landtotal_low'));

        $landtotal_hight = str_replace(",", "", $request->input('landtotal_hight'));
        //trim($request->input('landtotal_hight'));


        if ($price_low != '' || !$price_high != '' || $landtotal_low != '' || $landtotal_hight != '' || $yearselect != '' || $RoomNumberSelect != '' || $Posselected != '' || $estatetype_user != '') {


            $active = 'active';
            $arr = explode(',', $Posselected);
            $query = DB::table('estateinfo')->where('status', $active);


            if ($CodeEstat)
                $query->where('id', $CodeEstat);
            if ($estatetype_user)
                $query->where('EstateTypeId', $estatetype_user);
            if ($Posselected)
                $query->whereIn('RegionId', $arr);
            if ($price_low)
                $query->where('price', '>=', $price_low);
            if ($price_high)
                $query->where('price', '<=', $price_high);

            if ($RoomNumberSelect)
                $query->where('RoomNumber', $RoomNumberSelect);

            if ($yearselect)
                $query->where('yearmade', $yearselect);


            /* if($estatetype_user)
                 $query->where('EstateTypeId',$estatetype_user);
             if($estatetype_user)
                 $query->where('EstateTypeId',$estatetype_user);
             if($estatetype_user)
                 $query->where('EstateTypeId',$estatetype_user);*/


            $srch_lname = Session::get('RoomNumberSelect');

            $estateinfo = $query->orderBy('dateEn', 'DESC')->paginate(20)->appends(request()->except('page'));

            // dd($estateinfo);
            //paginate(20)->appends(request()->except('page'));


        }


        return view('Home.search', ['estateInfo' => $estateinfo]);


    }

}

<?php

namespace App\Http\Controllers;

use App;
use App\Helpers\Helper;
use App\Model\AdminSettings;
use App\Model\Contract;
use App\Model\daliyreport;
use App\Model\estateimage;
use App\Model\estateinfo;
use App\Model\estateinfopossibility;
use App\Model\estatetype;
use App\Model\noterequest;
use App\Model\notification;
use App\Model\OfferEstate;
use App\Model\ownershiptype;
use App\Model\positiontype;
use App\Model\possibility;
use App\Model\region;
use App\Model\requestestate;
use App\Model\customerBirthday;
use App\Model\transcation;
use App\Model\UsageTypes;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Ipecompany\Smsirlaravel\Smsirlaravel;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function test()
    {

        Smsirlaravel::ultraFastSend(['username' => 'سیوان گنجی '], 44147, '09035478091');
    }
    public function change(Request $request)
    {

       // dd($request->all());

        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

       // dd(\Session::get('locale'));

        return redirect()->back();
    }
    public function index()
    {
       // dd(Hash::make('*NNP%S4YHP'));
        return view('admin.index');
    }

    public function ActionServer(Request $request)
    {
        if ($request->has('action')) {
            // dd($request->has('action'));
            $functionName = $request->action;

            if (method_exists($this, $functionName)) {
                $this->Log = new Log;
                return $this::$functionName($request);
            } else
                return abort(404);
        } else
            return abort(404);

    }

    public function Region()
    {

        $region = region::all();

        return view('admin.Estate.region', ['region' => $region]);
    }

    public function EditRegion(Request $request)
    {
        if ($request->action === 'EditRegion') {
            $Id = $request->Id;

            $update = region::where('id', $Id)->update([
                'Name' => $request->EditNameRegion
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                ];
                return response()->json($message);
            }
        }
    }

    public function NewRegion(Request $request)
    {

        if ($request->action == 'NewRegion') {
            $EstateType = new region();
            $EstateType->Name = $request->NameRegion;

            if ($EstateType->save()) {
                $message = [
                    'status' => 100,
                    'insert success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 419,
                    'insert success ',

                ];
                return response()->json($message);
            }
        }

    }

    public function DeleteRegion(Request $request)
    {

        if ($request->action == 'DeleteRegion') {
            $Id = $request->Id;
            $delete = region::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100, 'msg' => 'error delete']);
            }
        }


    }

    public function EstateType()
    {
        $EstateType = estatetype::orderBy('id', 'DESC')->get();
        return view('admin.Estate.EstateType', ['estatetype' => $EstateType]);
    }

    public function NewEstateType(Request $request)
    {

        if ($request->action == 'NewEstateType') {
            $EstateType = new estatetype();
            $EstateType->Name = $request->NameTypeEstate;

            if ($EstateType->save()) {
                $message = [
                    'status' => 200,
                    'insert success ',
                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 100,
                    'Error',

                ];
                return response()->json($message);
            }
        }

    }

    public function DeleteEstateType(Request $request)
    {

        if ($request->action == 'DeleteEstateType') {
            $Id = $request->Id;
            $delete = estatetype::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100]);
            }
        }


    }

    public function EditTypeEstate(Request $request)
    {
        if ($request->action === 'EditTypeEstate') {
            $Id = $request->Id;
            $update = estatetype::where('id', $Id)->update([
                'Name' => $request->NameTypeEstate
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                    'Update success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                    'Update Faild ',

                ];
                return response()->json($message);
            }
        }
    }

    public function EstateOwnerShip()
    {

        $ownership = ownershiptype::orderBy('id', 'DESC')->get();
        return view('admin.Estate.Owenership', ['ownership' => $ownership]);
    }

    public function NewOwenership(Request $request)
    {

        if ($request->action == 'NewOwenership') {
            $EstateType = new ownershiptype();
            $EstateType->Name = $request->NameOwnership;

            if ($EstateType->save()) {
                $message = [
                    'status' => 200,
                    'insert success ',
                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 100,
                    'Error',

                ];
                return response()->json($message);
            }
        }

    }

    public function DeleteOwnership(Request $request)
    {

        if ($request->action == 'DeleteOwnership') {
            $Id = $request->Id;
            $delete = ownershiptype::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100]);
            }
        }


    }

    public function EditOwenership(Request $request)
    {
        if ($request->action === 'EditOwenership') {
            $Id = $request->Id;
            $update = ownershiptype::where('id', $Id)->update([
                'Name' => $request->EditNameOwnership
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                    'Update success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                    'Update Faild ',

                ];
                return response()->json($message);
            }
        }
    }

    public function sendmail($username, $countSender)
    {


        foreach ($countSender as $itemCount) {
            $_username = 'مدیریت';
            $_email_user = "s.ganji73@gmail.com";
            $_title_site = 'مشاوراملاک لئومال';
            $_email_noreply = 'info@leomal.ir';

            Mail::send('email.verify', array('confirmation_code' => $username),
                function ($message) use (
                    $_username,
                    $_email_user,
                    $_title_site,
                    $_email_noreply
                ) {
                    $message->from($_email_noreply, $_title_site);
                    $message->subject('یادآوری قرارداد در حال پایان');
                    $message->to($_email_user, $_username);
                });
        }

    }

    public function EditPossibilities(Request $request)
    {
        if ($request->action === 'EditPossibilities') {
            $Id = $request->Id;
            $update = possibility::where('id', $Id)->update([
                'Name' => $request->EditNamePossibity
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                    'Update success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                    'Update Faild ',

                ];
                return response()->json($message);
            }
        }
    }


    public function Possibilities()
    {

        $ownership = possibility::orderBy('id', 'DESC')->get();
        return view('admin.Estate.Possibilities', ['ownership' => $ownership]);
    }

    public function AddPossibilities(Request $request)
    {

        if ($request->action == 'AddPossibilities') {
            $EstateType = new possibility();
            $EstateType->Name = $request->NamePossibity;

            if ($EstateType->save()) {
                $message = [
                    'status' => 200,
                    'insert success ',
                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 100,
                    'Error',

                ];
                return response()->json($message);
            }
        }

    }

    public function EditNamePossibity(Request $request)
    {
        if ($request->action === 'EditNamePossibity') {
            $Id = $request->Id;
            $update = ownershiptype::where('id', $Id)->update([
                'Name' => $request->EditNamePossibity
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                    'Update success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                    'Update Faild ',

                ];
                return response()->json($message);
            }
        }
    }

    public function DeletePossibilities(Request $request)
    {

        if ($request->action == 'DeletePossibilities') {
            $Id = $request->Id;
            $delete = possibility::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100]);
            }
        }


    }


    public function UsageType()
    {

        $ownership = UsageTypes::orderBy('id', 'DESC')->get();
        return view('admin.Estate.UsageType', ['ownership' => $ownership]);
    }

    public function AddUsageType(Request $request)
    {

        if ($request->action == 'AddUsageType') {
            $EstateType = new UsageTypes();
            $EstateType->Name = $request->NameUsage;

            if ($EstateType->save()) {
                $message = [
                    'status' => 200,
                    'insert success ',
                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 100,
                    'Error',

                ];
                return response()->json($message);
            }
        }

    }

    public function EditUsageType(Request $request)
    {
        if ($request->action === 'EditUsageType') {
            $Id = $request->Id;
            $update = UsageTypes::where('id', $Id)->update([
                'Name' => $request->EditNameUsage
            ]);
            if ($update) {
                $message = [
                    'status' => 200,
                    'Update success ',

                ];
                return response()->json($message);

            } else {
                $message = [
                    'status' => 500,
                    'Update Faild ',

                ];
                return response()->json($message);
            }
        }
    }

    public function DeleteUsageType(Request $request)
    {

        if ($request->action == 'DeleteUsageType') {
            $Id = $request->Id;
            $delete = UsageTypes::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100]);
            }
        }


    }

    public function NewEstate()
    {

        $region = region::all();
        $estatetype = estatetype::all();
        $ownershiptype = ownershiptype::all();
        $UsageTypes = UsageTypes::all();
        $positiontype = positiontype::all();
        $possibility = possibility::all();


        return view('admin.Estate.NewEstate', ['region' => $region, 'estatetype' => $estatetype, 'UsageTypes' => $UsageTypes, 'ownershiptype' => $ownershiptype, 'positiontype' => $positiontype, 'possibility' => $possibility]);
    }

    public function User()
    {
        $user = \App\User::orderBy('id', 'DESC')->get();
        return view('admin.User.index', ['user' => $user]);
    }

    public function AddUser(Request $request)
    {
        if ($request->action == 'AddUser') {
            $mobile = $request->mobileuser;
            $user = new \App\User();
            $user->username = $request->fullname;
            $user->mobile = $mobile;
            $user->role = 'employeer';
            $user->status = 'active';
            $user->password = Hash::make($request->passworduser);
            $user->datereg = Jalalian::forge('today')->format('%A, %d %B %y');


            if ($user->save()) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function ChangePassword(Request $request)
    {
        if ($request->action == 'ChangePassword') {
            $mobile = $request->mobileuser;
            $user = \App\User::where('id', $request->Id)->update([
                'password' => Hash::make($request->passworduser)
            ]);

            if ($user) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function ChangeRoleUser(Request $request)
    {
        if ($request->action == 'ChangeRoleUser') {


            $user = \App\User::where('id', $request->Id)->update([
                'role' => $request->role
            ]);

            if ($user) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function ChangeStatusEstate(Request $request)
    {
        if ($request->action == 'ChangeStatusEstate') {


            $user = estateinfo::where('id', $request->Id)->update([
                'status' => $request->role
            ]);

            if ($user) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function ChangeStatuUser(Request $request)
    {
        if ($request->action == 'ChangeStatuUser') {


            $user = \App\User::where('id', $request->Id)->update([
                'status' => $request->type
            ]);

            if ($user) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function EditProfile(Request $request)
    {
        if ($request->action == 'EditProfile') {


            $user = \App\User::where('id', $request->Id)->update([
                'username' => $request->usernameEdit,
                'mobile' => $request->mobileEdit,
            ]);

            if ($user) {
                return response()->json(['status' => 200]);

            } else {

                return response()->json(['status' => 100]);
            }
        }
    }

    public function DeleteUser(Request $request)
    {

        if ($request->action == 'DeleteUser') {
            $Id = $request->Id;
            $delete = \App\User::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100]);
            }
        }


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
            $EstateType->Dim1 = $request->Dim1;
            $EstateType->Dim2 = $request->Dim1;
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
                $infouser = Helper::GetInfoUser(Auth::user()->id)->username;
                Smsirlaravel::ultraFastSend(['username' => $infouser], 44147, '09189983500');

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

    public function Estate()
    {
        $estate = estateinfo::orderby('created_at', 'DESC')->get();
        return view('admin.Estate.list', ['estate' => $estate]);
    }

    public function Search(Request $request)
    {

        $estateinfo = DB::table('estateinfo')->limit(5)->get();
        $region = region::all();
        $estatetype = estatetype::all();
        $position = positiontype::all();
        $usagetype = UsageTypes::all();
        $ownership = ownershiptype::all();


        $possibiliesList = possibility::all();

        return view('admin.Estate.Search', ['estate' => $estateinfo, 'region' => $region, 'esatetype' => $estatetype, 'position' => $position, 'usagetype' => $usagetype, 'ownership' => $ownership]);
    }

    public function ApplicantSearch(Request $request)
    {

        $applicant = OfferEstate::limit(5)->get();
        $region = region::all();
        $estatetype = estatetype::all();


        return view('admin.Applicant.Search', ['applicant' => $applicant, 'region' => $region, 'region' => $region, 'estatetype' => $estatetype, 'CountResult' => count($applicant), 'type' => 'buy']);


    }

    public function AdvanceApplicantSearch(Request $request)
    {


        $region = region::all();
        $estatetype = estatetype::all();


        $regionselectInput = $request->regionselect;

        $estatetypeInput = $request->estatetype;


        $fullname = $request->fullname;

        $mobile = $request->mobile;

        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $typetenant = $request->typetenant;


        if ($regionselectInput != '' || $estatetype != '' || $fullname != '' || $mobile != '') {

            $query = DB::table('offerestate');
            /*   if ($estatetypeInput)
                   $query->where('estatetypeId', $estatetypeInput);
               if ($regionselectInput)
                   $query->where('regionId', $regionselectInput);*/


            if ($mobile)
                $query->where('mobile', $mobile);

            if ($fullname)
                $query->where('fullname', 'like', '%' . $fullname . '%');

            if ($typetenant == 'rent') {

                $query->where('type_applicant', 'rent');
                /*  $query->where('pricerent', '>=', str_replace(",", "", $request->minrent));*/

                if ($request->minrent)
                    $query->where('pricerent', '>=', str_replace(",", "", $request->minrent));
                if ($request->maxrent)
                    $query->where('pricerent', '<=', str_replace(",", "", $request->maxrent));

                if ($request->minDeposit)
                    $query->where('Deposit', '>=', str_replace(",", "", $request->minDeposit));

                if ($request->maxDeposit)
                    $query->where('Deposit', '<=', str_replace(",", "", $request->maxDeposit));

                /*       $query->where('Deposit', '>=', str_replace(",", "", $request->minDeposit));
                       $query->where('Deposit', '<=', str_replace(",", "", $request->maxDeposit));*/


            } elseif ($typetenant == 'buy') {
                if ($minprice) {
                    $query->where('pricefrom', '>=', str_replace(",", "", $minprice));
                }
                if ($maxprice) {

                    $query->where('priceto', '<=', str_replace(",", "", $maxprice));
                }
            }


            $applicant = $query->paginate(5);


        } else {
            $applicant = DB::table('offerestate')->limit(5)->paginate(5);
        }

        //dd($applicant);


        return view('admin.Applicant.Search', ['applicant' => $applicant, 'region' => $region, 'estatetype' => $estatetype, 'CountResult' => count($applicant), 'type' => 'buy']);


    }

    public function AdvanceSearch(Request $request)
    {


        $region = region::all();
        $estatetype = estatetype::all();
        $position = positiontype::all();
        $usagetype = UsageTypes::all();
        $ownership = ownershiptype::all();


        $regionselectInput = $request->regionselect;
        $bedroom = $request->bedroom;
        $estatetypeInput = $request->estatetype;
        $Address = $request->Address;
        $LandTotal = $request->LandTotal;
        $fullname = $request->fullname;
        $Code = $request->Code;
        $desc = $request->desc;
        $mobile = $request->mobile;
        $position_type = $request->position_type;
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;


        if ($regionselectInput != '' || $bedroom != '' || $estatetype != '' || $Address != '' || $LandTotal != '' || $fullname != '' || $Code != '' || $desc != '' || $mobile != '') {

            $query = DB::table('estateinfo');
            if ($estatetypeInput)
                $query->where('EstateTypeId', $estatetypeInput);
            if ($regionselectInput)
                $query->where('RegionId', $regionselectInput);
            if ($LandTotal)
                $query->where('LandTotalSquare', $LandTotal);
            if ($Address)
                $query->where('Address', 'like', '%' . $Address . '%');
            if ($bedroom)
                $query->where('RoomNumber', $bedroom);
            if ($Code)
                $query->where('id', $Code);
            if ($mobile)
                $query->where('MobileNumber', $mobile);
            if ($position_type)
                $query->where('position_adv', $position_type);
            if ($fullname)
                $query->where('fullname', 'like', '%' . $fullname . '%');
            if ($desc)
                $query->where('ComplimentalDescription', 'like', '%' . $desc . '%');
            if ($minprice) {
                $query->where('price', '>=', str_replace(",", "", $minprice));
            }
            if ($maxprice) {

                $query->where('price', '<=', str_replace(",", "", $maxprice));
            }


            $estateinfo = $query->paginate(20);
        } else {
            //  $estateinfo= DB::table('estateinfo')->limit(5)->paginate(5);
        }

        //dd($estateinfo);

        return view('admin.Estate.Search', ['estate' => $estateinfo, 'region' => $region, 'esatetype' => $estatetype, 'position' => $position, 'usagetype' => $usagetype, 'ownership' => $ownership]);


    }

    public function Estatelist($type)
    {

        $estate = estateinfo::where('status', $type)->orderby('created_at', 'DESC')->get();
        return view('admin.Estate.Filter', ['estate' => $estate, 'type' => $type]);
    }

    public function Tranasction($type)
    {


        $tran = transcation::where('type_tra', $type)->orderBy('created_at', 'DESC')->get();
        $region = region::all();
        $estatetype = estatetype::all();
        $price_traanc_sale = transcation::where('type_tra', 'sale')->sum('price_traanc');
        $price_traanc_rent = transcation::where('type_tra', 'rent')->sum('pricerent');

        $commission_sale = transcation::where('type_tra', 'sale')->sum('commission');
        $commission_rent = transcation::where('type_tra', 'rent')->sum('commission');

        return view('admin.Transcation.index', ['tran' => $tran, 'region' => $region, 'estatetype' => $estatetype, 'price_traanc_sale' => $price_traanc_sale, 'price_traanc_rent' => $price_traanc_rent, 'commission_sale' => $commission_sale, 'commission_rent' => $commission_rent, 'type' => $type]);

    }

    public function AddTransaction(Request $request)
    {


        if ($request->action === 'AddTransaction') {
            if ($request->TypeApplicant == 'sale') {
                $price_trans = str_replace(",", "", $request->price_trans);

                $Deposit = null;
                $pricerent = null;


            } else if ($request->TypeApplicant == 'rent') {
                $price_trans = null;
                $Deposit = str_replace(",", "", $request->Deposit);
                $pricerent = str_replace(",", "", $request->pricerent);


            }

            $transcation = new transcation();
            $transcation->userId = Auth::user()->id;
            $transcation->fullname = $request->buierName;
            $transcation->type_tra = $request->TypeApplicant;
            $transcation->Sellername = $request->sellername;
            $transcation->mobileseller = $request->mobileSeller;
            $transcation->mobilebuyer = $request->mobilebuyer;
            $transcation->price_traanc = $price_trans;
            $transcation->commission = str_replace(",", "", $request->commission);
            $transcation->pricerent = $pricerent;
            $transcation->Deposit = $Deposit;
            $transcation->codetrans = $request->numbertran;
            $transcation->regionId = $request->regionselecttra;
            $transcation->EstateTypeId = $request->estatetypetra;
            $transcation->description = $request->descTrans;
            $transcation->datereg = $request->datetransaction;
            $transcation->brith_date_buyer = $request->brith_date_buyer;
            $transcation->brith_date_seller = $request->brith_date_seller;



            if ($transcation->save()) {


                return response()->json(['status' => 200, 'link' => $transcation->type_tra]);

            } else {
                return response()->json(['status' => 100]);

            }
        }
    }

    public function EditEstate($id)
    {

        $estateinfo = estateinfo::find($id);

        if (is_null($estateinfo)) {

            return redirect("/admin/Estatelist");

        } else {
            $estateImage = estateimage::where('EstateId', $id)->get();
            $region = region::all();
            $estatetype = estatetype::all();
            $position = positiontype::all();
            $usagetype = UsageTypes::all();
            $ownership = ownershiptype::all();

            $noty = notification::where('seen', 0)->get();
            $possibilies = estateinfopossibility::where('EstateId', $id)->get();
            $possibiliesList = possibility::all();

            return view('admin.Estate.EditEstate', ['estateinfo' => $estateinfo, 'estateinfoId' => $id, 'region' => $region, 'estatetype' => $estatetype, 'position' => $position, 'usagetype' => $usagetype, 'ownership' => $ownership, 'estateImage' => $estateImage, 'possibiliesId' => $possibilies, 'listPosi' => $possibiliesList]);
        }
    }

    public function UpdateEstate(Request $request)
    {


        $validator = Validator::make($request->all(), [


            'MobileNumber' => 'required|min:11',

            'fullname' => 'required',
            'Address' => 'required',
            'LandTotalSquare' => 'required',
            'SquareFootage' => 'required',
            'RoomNumber' => 'required',
            'textNote' => 'required',
            'floor' => 'required',
            'loan' => 'required',
            'yearmade' => 'required',
            'price' => 'required'


        ]);

        /*  'price_rahan'  => 'required',
                    'RentAmount'  => 'required',
                     'VirtualTourCode'  => 'required',
           'price_rahan'  => 'required',
                     'RentAmount'  => 'required',
                      'VirtualTourCode'  => 'required',*/

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag(),
            ]);
        }


        $update = estateinfo::where('id', $request->EstateId)->update([
            'RegionId' => $request->region,
            'EstateTypeId' => $request->estatetype,
            'UsageTypeId' => $request->usagetype,
            'OwenershipTypeId' => $request->ownership,
            'MobileNumber' => $request->MobileNumber,
            'Email' => $request->Email,
            'fullname' => $request->fullname,

            'Address' => $request->Address,
            'LandTotalSquare' => $request->LandTotalSquare,
            'SquareFootage' => $request->SquareFootage,
            'RoomNumber' => $request->RoomNumber,
            'ComplimentalDescription' => $request->textNote,
            'textNote' => $request->textNote,
            'advType' => $request->typeAdv,
            'position_adv' => $request->position_type,
            'totalfloor' => $request->floor,
            'floor' => $request->unit,
            'totlaunitprefloor' => $request->unitfloor,
            'unitnumber' => $request->unitnumber,
            'loan' => $request->loan,
            'loanAmount' => str_replace(",", "", $request->loanAmount),
            'yearmade' => $request->yearmade,
            'price' => str_replace(",", "", $request->price),
            'price_rahan' => str_replace(",", "", $request->price_rahan),
            'RentAmount' => str_replace(",", "", $request->RentAmount),
            'EstateDateTimeRegister' => Jalalian::forge('today')->format('%A, %d %B %y'),

        ]);


        if ($update) {


            $message = [
                'status' => 100,
                'Update success ',

            ];
            return response()->json($message);

        } else {
            $message = [
                'status' => 500,
                'Update Faild ',

            ];
            return response()->json($message);
        }

    }


    public function DeletePossibilitiesEstate(Request $request)
    {

        $Id = $request->Id;
        $delete = estateinfopossibility::where('id', $Id)->delete();
        if ($delete) {
            return response()->json(['status' => '100', 'Data' => $delete]);

        }


    }

    public function AddCurrentPossibiliesEstate(Request $request)
    {
        $id = $request->id;
        $arr = $request->possibilies;


        $arr = explode(',', $arr);

        foreach ($arr as $itemarr) {


            $checkEstatePossiblies = estateinfopossibility::where('EstateId', $id)->where('PossibilityId', $itemarr)->get();

            if (count($checkEstatePossiblies) > 0) {
                return response()->json(['status' => 500, 'message' => 'Exist Possibilies']);

            } elseif (count($checkEstatePossiblies) == 0) {

                $estateinfopos = new estateinfopossibility();
                $estateinfopos->EstateId = $id;
                $estateinfopos->PossibilityId = $itemarr;
                $estateinfopos->save();
                return response()->json(['status' => 200]);
            }


        }

    }

    public function AddPossibilitiesToEstate(Request $request)
    {

        $id = $request->id;
        $arr = $request->possibilies;


        $arr = explode(',', $arr);

        foreach ($arr as $itemarr) {


            $checkEstatePossiblies = estateinfopossibility::where('EstateId', $id)->where('PossibilityId', $itemarr)->get();

            if (count($checkEstatePossiblies) > 0) {
                return response()->json(['status' => 500, 'message' => 'Exist Possibilies']);

            } elseif (count($checkEstatePossiblies) == 0) {

                $estateinfopos = new estateinfopossibility();
                $estateinfopos->EstateId = $id;
                $estateinfopos->PossibilityId = $itemarr;
                $estateinfopos->save();
                return response()->json(['status' => 200]);
            }


        }

    }

    public function ChangeElevatoEstate(Request $request)
    {

        $Id = $request->Id;
        $type = $request->type;
        $estate = estateinfo::where('id', $Id)->update([
            'elevator' => $type
        ]);


        if ($estate) {

            return response()->json(['status' => '100', 'message' => 'Ok']);

        } else {
            return response()->json(['status' => '500']);
        }


        /* $Id=$request->Id;
         $datauser=estateinfo::find($Id);
         if($datauser)
         {

             $user=estateinfo::where('id',$Id)->update([
                 'status'=> $request->type
             ]);
             return response()->json(['status'=>'100']);
         }*/


    }

    public function ChangeParkingEstate(Request $request)
    {

        $Id = $request->Id;
        $type = $request->type;
        $estate = estateinfo::where('id', $Id)->update([
            'parking' => $type
        ]);


        if ($estate) {

            return response()->json(['status' => '100', 'message' => 'Ok']);

        } else {
            return response()->json(['status' => '500']);
        }


        /* $Id=$request->Id;
         $datauser=estateinfo::find($Id);
         if($datauser)
         {

             $user=estateinfo::where('id',$Id)->update([
                 'status'=> $request->type
             ]);
             return response()->json(['status'=>'100']);
         }*/


    }

    public function ChangewarehouseEstate(Request $request)
    {

        $Id = $request->Id;
        $type = $request->type;
        $estate = estateinfo::where('id', $Id)->update([
            'warehouse' => $type
        ]);


        if ($estate) {

            return response()->json(['status' => '100', 'message' => 'Ok']);

        } else {
            return response()->json(['status' => '500']);
        }


        /* $Id=$request->Id;
         $datauser=estateinfo::find($Id);
         if($datauser)
         {

             $user=estateinfo::where('id',$Id)->update([
                 'status'=> $request->type
             ]);
             return response()->json(['status'=>'100']);
         }*/


    }

    public function ChangeBalconyEstate(Request $request)
    {

        $Id = $request->Id;
        $type = $request->type;
        $estate = estateinfo::where('id', $Id)->update([
            'Balcony' => $type
        ]);


        if ($estate) {

            return response()->json(['status' => '100', 'message' => 'Ok']);

        } else {
            return response()->json(['status' => '500']);
        }


        /* $Id=$request->Id;
         $datauser=estateinfo::find($Id);
         if($datauser)
         {

             $user=estateinfo::where('id',$Id)->update([
                 'status'=> $request->type
             ]);
             return response()->json(['status'=>'100']);
         }*/


    }

    public function NewPossibiliesEstate($id)
    {

        $possibilies = possibility::all();
        return view('admin.Estate.EstatePossibilies', ['possibilies' => $possibilies, 'possibiliesId' => $id]);
    }


    public function DeleteTran(Request $request)
    {

        if ($request->action === 'DeleteTran') {

            $infoTran = transcation::where('Id', $request->Id)->delete();
            if ($infoTran) {
                return response()->json(['status' => 200, 'link' => $request->type]);
            } else {
                return response()->json(['status' => 100, 'link' => $request->type]);
            }
        }

    }


    public function Applicant($type)
    {


        if (!empty($type)) {
            $applicant = OfferEstate::where('type_applicant', $type)->get();

            $region = region::all();
            $positiontype = positiontype::all();
            $estatetype = estatetype::all();


            return view('admin.Applicant.index', ['applicant' => $applicant, 'region' => $region, 'region' => $region, 'estatetype' => $estatetype, 'positiontype' => $positiontype, 'type' => $type, 'CountResult' => count($applicant)]);
        } else {
            return redirect('admin/index');
        }


    }

    public function NewApplicant(Request $request)
    {

        if ($request->action == 'NewApplicant') {


            if ($request->TypeApplicant == 'buy') {
                $minprice = $request->minprice;
                $maxprice = $request->maxprice;

                $pricerent = null;
                $Deposit = null;
                $datestart = null;
                $dateEnd = null;
                $lordEstate = null;

            } else if ($request->TypeApplicant == 'rent') {
                $minprice = 0;
                $maxprice = 0;

                $pricerent = $request->pricerent;
                $Deposit = $request->Deposit;
                /* $datestart=$request->datestart;
                 $dateEnd=$request->dateEnd;
                 $dateExpirePlan =Jalalian::fromFormat('Y/m/d', $dateEnd)->toArray();
                 $lordEstate=$request->lordEstate;*/

            }


            // $dateStartPlan =Jalalian::fromFormat('Y/m/d', $request->datestart)->toArray();


            $digits = 7;
            $CodeRequest = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
            $estateOffer = new OfferEstate();



            $estateOffer->userId = Auth::user()->id;
            $estateOffer->Coderequest = $CodeRequest;
            $estateOffer->type_applicant = $request->TypeApplicant;
            $estateOffer->name = $request->nameOffer;
            $estateOffer->mobile = $request->mobile;
            $estateOffer->brith_date_buyer = $request->brith_date_buyer;
            $estateOffer->regionId = serialize($request->region);
            $estateOffer->estatetypeId = serialize($request->estatetypetra);
            $estateOffer->pricefrom = str_replace(",", "", $minprice);
            $estateOffer->priceto = str_replace(",", "", $maxprice);
            $estateOffer->pricerent = str_replace(",", "", $pricerent);
            $estateOffer->Deposit = str_replace(",", "", $Deposit);
            /* $estateOffer->landsquarefrom = str_replace(",", "", $request->minmeter);
             $estateOffer->landsquareto = str_replace(",", "", $request->maxmeter);*/
            /*$estateOffer->roomnumber = $request->RoomNumber_user;
            $estateOffer->unit = $request->unitvali;*/

            $estateOffer->postiontype = $request->postiontype;

            $estateOffer->message = $request->message;
            /*  $estateOffer->lordEstate = $request->lordEstate;*/

            //$estateOffer->datestart = $request->datestart;
            if ($request->TypeApplicant == 'buy') {
                $estateOffer->datestart = null;
                $estateOffer->dateEnd = null;


            } else if ($request->TypeApplicant == 'rent') {

                /*    $datestart = Jalalian::fromFormat('Y/m/d',  $request->datestart)->toArray();
                    $dateExpire = Jalalian::fromFormat('Y/m/d',  $request->dateEnd)->toArray();
                    $estateOffer->datestart = $datestart['timestamp'];
                    $estateOffer->dateEnd = $dateExpire['timestamp'];*/
            }


            $estateOffer->status = 'done';
            $estateOffer->platform = 'Web';
            $estateOffer->datereg = Jalalian::forge('today')->format('%A, %d %B %y');


            if ($estateOffer->save()) {
                $typelink = $estateOffer->type_applicant;

                return response()->json(['status' => 200, 'link' => $typelink]);
            } else {

                $typelink = $estateOffer->type_applicant;
                return response()->json(['status' => 100, 'link' => $typelink]);
            }

        }
    }

    public function UserActivity()
    {


        $dailyAll = daliyreport::all();
        $TotalEmployyer = daliyreport::where('status', 'success')->where('userId', 46)->get()->count();
        $TotlaOpertaor = daliyreport::where('status', 'success')->where('userId', 71)->get()->count();
        /*  $success=daliyreport::where('status','success')->where('userId',46)->get();
          $fail=daliyreport::where('status','fail')->get();
          $cancel=daliyreport::where('status','cancel')->get();*/


        return view("admin.report.index", ['All' => $dailyAll, 'TotalEmployyer' => $TotalEmployyer,
            'TotlaOpertaor' => $TotlaOpertaor]);


    }

    public function contract()
    {


        $applicant = Contract::OrderBy('id','DESC')->get();
        $region = region::all();
        $positiontype = positiontype::all();
        $estatetype = estatetype::all();


        /*  foreach ( $applicant as $ite)
          {
             dd(  Carbon::parse(date('Y/m/d H:s:i',$ite->date_start))->diffInDays( Carbon::parse(date('Y/m/d H:s:i',$ite->date_end)) ));



          }*/


        return view('admin.tenant.index', ['applicant' => $applicant, 'region' => $region, 'region' => $region, 'estatetype' => $estatetype, 'positiontype' => $positiontype, 'CountResult' => count($applicant)]);


    }

    public function bithday()
    {

        $customer = customerBirthday::all();
        return view('admin.Birthday.index', ['customer' => $customer]);
    }

    public function NewBirthday(Request $request)
    {
        if ($request->action == 'NewBirthday') {

            $estateOffer = new customerBirthday();
            $estateOffer->userId = Auth::user()->id;
            $estateOffer->name = $request->nameOffer;
            $estateOffer->mobile = $request->mobile;
            $estateOffer->brithday = $request->datestart;
            $estateOffer->datereg = Jalalian::forge('today')->format('%A, %d %B %y');

            if ($estateOffer->save()) {

                return response()->json(['status' => 200]);
            } else {

                return response()->json(['status' => 100]);
            }

        }
    }


    public function NewTenant(Request $request)
    {
        if ($request->action == 'NewTenant') {


            $dateStartPlan = Jalalian::fromFormat('Y/m/d', $request->datestart)->toArray();


            $digits = 7;
            $CodeRequest = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
            $estateOffer = new Contract();
            $estateOffer->userId = Auth::user()->id;

          //  dd($request->all());

            $estateOffer->lordname = $request->nameOffer;
            $estateOffer->lordmobile = $request->mobile;
            $estateOffer->tenant = $request->tenantEstate;
            $estateOffer->tenantmobile = $request->mobileTenant;
            $estateOffer->regionId = $request->region;
            $estateOffer->estatetypeId = $request->estatetypetra;
            $estateOffer->brith_date_buyer = $request->brith_date_buyer;
            $estateOffer->brith_date_seller = $request->brith_date_seller;


            $estateOffer->amount_per_month = str_replace(",", "", $request->pricerent);
            $estateOffer->Deposit = str_replace(",", "", $request->Deposit);


            $estateOffer->address = $request->message;


            $datestart = Jalalian::fromFormat('Y/m/d', $request->datestart)->toArray();
            $dateExpire = Jalalian::fromFormat('Y/m/d', $request->dateEnd)->toArray();
            $estateOffer->delivery_date = $request->dateDelivery;
            $estateOffer->date_start = $datestart['timestamp'];
            $estateOffer->date_end = $dateExpire['timestamp'];

            $estateOffer->status = 'done';
            $estateOffer->platform = 'Web';
            $estateOffer->datereg = Jalalian::forge('today')->format('%A, %d %B %y');


            if ($estateOffer->save()) {

                return response()->json(['status' => 200]);
            } else {

                $typelink = $estateOffer->type_applicant;
                return response()->json(['status' => 100]);
            }

        }
    }

    public function AddImage(Request $request, $id)
    {


        $imagelist = estateimage::where('EstateId', $id)->get();
        return view('admin.Estate.EstateImage', ['imageId' => $id, 'listimage' => $imagelist]);

    }

    public function DeleteEstateshow($Id)
    {
        return view('admin.Estate.DeleteEstate', ['Id' => $Id]);
    }

    public function DeleteTranscationshow($type, $Id)
    {

        return view('admin.Transcation.DeleteTranscation', ['Id' => $Id, 'type' => $type]);
    }

    public function DeleteApplicantShow($type, $Id)
    {
        return view('admin.Applicant.DeleteApplicant', ['Id' => $Id, 'type' => $type]);
    }

    public function DeleteTenantShow($Id)
    {
        return view('admin.tenant.DeleteTenant', ['Id' => $Id]);
    }

    public function DeleteEstate(Request $request)
    {

        if ($request->action === 'DeleteEstate') {

            $infoTran = estateinfo::where('id', $request->Id)->delete();
            if ($infoTran) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }

    }

    public function DeleteTenant(Request $request)
    {

        if ($request->action === 'DeleteTenant') {

            $infoTran = Contract::where('id', $request->Id)->delete();
            if ($infoTran) {
                return response()->json(['status' => 200, 'link' => $request->type]);
            } else {
                return response()->json(['status' => 100]);
            }
        }

    }

    public function DeleteApplicant(Request $request)
    {

        if ($request->action === 'DeleteApplicant') {

            $infoTran = OfferEstate::where('id', $request->Id)->delete();

            if ($infoTran) {
                return response()->json(['status' => 200, 'link' => $request->type]);
            } else {
                return response()->json(['status' => 100]);
            }
        }

    }

    public function EditTranasction($type, $id)
    {
        $infoTr = transcation::where('id', $id)->first();
        if ($infoTr) {

            $region = region::all();
            $estetype = estatetype::all();
            return view('admin.Transcation.Edit', ['infoTr' => $infoTr, 'type' => $type, 'region' => $region, 'estatetype' => $estetype]);
        } else {
            return redirect('admin/Tranasction/' . $type);
        }

    }

    public function EditTransaction(Request $request)
    {

        if ($request->action === 'EditTransaction') {

            if ($request->typeTra == 'sale') {

                $price_traanc = str_replace(",", "", $request->priceTran);
                $commission = str_replace(",", "", $request->commission);

                $pricerent = '';
                $Deposit = '';
            } else {
                $price_traanc = '';
                $commission = '';
                $pricerent = str_replace(",", "", $request->pricerent);
                $Deposit = str_replace(",", "", $request->Deposit);

            }


            $infoTran = transcation::where('Id', $request->Id)->update([
                'regionId' => $request->regionselect,
                'EstateTypeId' => $request->estatetype,
                'fullname' => $request->fullnameTran,
                'Sellername' => $request->Sellername,
                'price_traanc' => $price_traanc,
                'commission' => $commission,
                'pricerent' => $pricerent,
                'Deposit' => $Deposit,
                'brith_date_buyer' => $request->brith_date_buyer,
                'brith_date_seller' => $request->brith_date_seller,
                'mobileseller' => $request->mobileSeller,
                'mobilebuyer' => $request->mobilebuyer,

            ]);

            if ($infoTran) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }
    }

    public function EditApplicant($type, $id)
    {
        $infoTr = OfferEstate::where('id', $id)->first();
        if ($infoTr) {

            $region = region::all();
            $estetype = estatetype::all();
            $positiontype = positiontype::all();
            return view('admin.Applicant.Edit', ['infoTr' => $infoTr, 'type' => $type, 'region' => $region, 'estatetype' => $estetype, 'postionty' => $positiontype]);
        } else {
            return redirect('admin/Tranasction/' . $type);
        }

    }

    public function UpdatetApplicant(Request $request)
    {

        if ($request->action === 'UpdatetApplicant') {

            //  dd($request->all());
            if ($request->typeTra == 'buy') {

                $pricefrom = str_replace(",", "", $request->pricefrom);
                $priceto = str_replace(",", "", $request->priceto);
                $pricerent = '';
                $Deposit = '';
            } else {
                $pricefrom = 0;
                $priceto = 0;
                $pricerent = str_replace(",", "", $request->pricerent);
                $Deposit = str_replace(",", "", $request->Deposit);

            }

            //dd($request->all());


            $infoTran = OfferEstate::where('id', $request->Id)->update([
                'userId' => Auth::user()->id,
                'regionId' => serialize($request->regionselect),
                'EstateTypeId' => serialize($request->estatetype),
                'name' => $request->nameApplicant,
                'mobile' => $request->mobileApplcaint,
                'pricefrom' => $pricefrom,
                'priceto' => $priceto,
                'pricerent' => $pricerent,
                'Deposit' => $Deposit,
                'brith_date_buyer' => $request->brith_date_buyer,

            ]);

            if ($infoTran) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }
    }

    public function EditContract($id)
    {
        $infoTr = Contract::where('id', $id)->first();
        if ($infoTr) {

            $region = region::all();
            $estetype = estatetype::all();
            $positiontype = positiontype::all();


            return view('admin.tenant.Edit', ['infoTr' => $infoTr, 'region' => $region, 'estatetype' => $estetype, 'postionty' => $positiontype]);
        } else {
            return redirect('admin/contract/');
        }

    }

    public function UpdatetContract(Request $request)
    {

        if ($request->action === 'UpdatetContract') {


            $datestart = Jalalian::fromFormat('Y/m/d', $request->datestart)->toArray();
            $dateExpire = Jalalian::fromFormat('Y/m/d', $request->dateEnd)->toArray();


            $infoTran = Contract::where('id', $request->Id)->update([
                'userId' => Auth::user()->id,
                'regionId' => $request->regionselect,
                'EstateTypeId' => $request->estatetype,
                'lordname' => $request->lordname,
                'lordmobile' => $request->lordmobile,
                'tenant' => $request->lordmobile,
                'tenantmobile' => $request->tenantmobile,
                'delivery_date' => '',
                'date_start' => $datestart['timestamp'],
                'date_end' => $dateExpire['timestamp'],
                'amount_per_month' => str_replace(",", "", $request->pricerent),
                'Deposit' => str_replace(",", "", $request->Deposit),


            ]);

            if ($infoTran) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }
        }
    }

    public function CheckBirthdayLeoMal()
    {

        $day = Jalalian::forge('now')->getDay() + 1;
        $month = Jalalian::forge('now')->getMonth();
        $check_Birth = OfferEstate::whereMonth('brithday', $month)->whereDay('brithday', $day)->get();
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
}

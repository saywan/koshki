<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Model\AdminSettings;
use App\Model\estateimage;
use App\Model\estateinfo;
use App\Model\estateinfopossibility;
use App\Model\estatetype;
use App\Model\ownershiptype;
use App\Model\positiontype;
use App\Model\possibility;
use App\Model\region;
use App\Model\UsageTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

use Morilog\Jalali\Jalalian;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $estateinfo = estateinfo::all();
        return view('admin.Estate.list', ['estate' => $estateinfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = region::all();
        $estatetype = estatetype::all();
        $ownershiptype = ownershiptype::all();
        $UsageTypes = UsageTypes::all();
        $positiontype = positiontype::all();
        $possibility = possibility::all();


        return view('admin.Estate.New', ['region' => $region, 'estatetype' => $estatetype, 'UsageTypes' => $UsageTypes, 'ownershiptype' => $ownershiptype, 'positiontype' => $positiontype, 'possibility' => $possibility]);
    }

    public function image()
    {
        return view('admin.Estate.image');
    }

    public function ChangeStatusEstateUser(Request $request)
    {
        if ($request->action == 'ChangeStatusEstateUser') {


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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //   dd($request->file);

        // dd($request->all());


        /*  if($request->hasfile('files'))
          {
              foreach($request->file('files') as $file)
              {
               //   $name = time().rand(5).'.'.$file->extension();
                   $name = $file->getClientOriginalName();
                  $file->move(public_path().'/EstateImage/', $name);
                  $data[] = $name;
              }
              return response()->json(['status'=>200]);

          }*/


        //dd($request->all());
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


        /// dd($request->all());

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
        $EstateType->publish = 'active';

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
            $TrackEstateCode = $EstateType->TrackingCode;
            $EstateCode = $EstateType->Code;
            $foldername = $EstateCode . '-' . $TrackEstateCode;

            $directory = public_path('EstateImage/') . $foldername;

            if (!file_exists($directory)) {
                mkdir(public_path('EstateImage/') . $foldername);
                mkdir(public_path("EstateImage/$foldername/medium"));
                mkdir(public_path("EstateImage/$foldername/small"));
            }


            $large_path = public_path('EstateImage/' . $foldername . '/medium/');
            $small_path = public_path('EstateImage/' . $foldername . '/small/');
            $main_path = public_path('EstateImage/' . $foldername . '/');


            if ($request->files) {
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
                    //     mkdir(public_path("EstateImage/$foldername/medium"));
                    //   mkdir(public_path("EstateImage/$foldername/small"));
                }


                $large_path = public_path('EstateImage/' . $foldername . '/medium/');
                $small_path = public_path('EstateImage/' . $foldername . '/small/');
                $main_path = public_path('EstateImage/' . $foldername . '/');

                if (count($request->files)) {

                    foreach ($request->file('files') as $file) {
                        //   $name = time().rand(5).'.'.$file->extension();
                        $name = $file->getClientOriginalName();
                        $file->move(public_path() . '/EstateImage/' . $foldername . '/', $name);
                        $data[] = $name;

                        $estate = new estateimage();
                        $estate->EstateId = $id;
                        $estate->photo = "/EstateImage/$foldername/" . $name;
                        $estate->namefolder = $foldername;
                        $estate->namephoto = $name;
                        $estate->small = '';
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

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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


            $possibilies = estateinfopossibility::where('EstateId', $id)->get();
            $possibiliesList = possibility::all();

            return view('admin.Estate.edit', ['estateinfo' => $estateinfo, 'estateinfoId' => $id, 'region' => $region, 'estatetype' => $estatetype, 'position' => $position, 'usagetype' => $usagetype, 'ownership' => $ownership, 'estateImage' => $estateImage, 'possibiliesId' => $possibilies, 'listPosi' => $possibiliesList]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        //dd($request->all());
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $infoTran = estateinfo::where('id', $request->Id)->delete();
        if ($infoTran) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 100]);
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
       // dd($request->all());

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


    public function uploadImageEstate(Request $request)
    {



        $estatInfo = estateinfo::where('id', $request->header('imageId'))->first();
        $TrackEstateCode = $estatInfo->TrackingCode;
        $EstateCode = $estatInfo->Code;
        $foldername = $EstateCode . '-' . $TrackEstateCode;

        $directory = public_path('EstateImage/') . $foldername;
        if (!file_exists($directory)) {
            mkdir(public_path('EstateImage/') . $foldername);
            //mkdir(public_path("EstateImage/$foldername/medium"));
          //  mkdir(public_path("EstateImage/$foldername/small"));
        }


        $large_path = public_path('EstateImage/' . $foldername . '/medium/');
        $small_path = public_path('EstateImage/' . $foldername . '/small/');
        $main_path = public_path('EstateImage/' . $foldername . '/');

        $temp = public_path('temp/');
        /* $input      = $request->file('file');
         $validator = $this->validator($input);
         if ($validator->fails()) {
             return response()->json([
                 'success' => false,
                 'errors' => $validator->getMessageBag()->toArray(),
             ]);
         } */
        if ($request->hasFile('file')) {

            $extension = $request->file('file')->getClientOriginalExtension();

            $filename = $request->file('file')->getClientOriginalName();

            // $file_large     = $filename;
            //  $file_small     = $filename;
            $extension = $request->file('file')->getClientOriginalExtension();
            $file_large = strtolower(time() . Str::random(40) . '.' . $extension);
            $file_small = strtolower(time() . Str::random(40) . '.' . $extension);


            //strtolower(time().rand(5).'.'.$extension);;
            /*  strtolower($filename.'.'.$extension);
             $file_large     = strtolower($filename.'.'.$extension);*/


            if ($request->file('file')->move($temp, $file_large)) {


                $setting = AdminSettings::find(1);
                ini_set('memory_limit', '1024M');

                if (\File::exists($temp . $file_large)) {


                    $img = Image::make($temp . $file_large);
                    //$img->insert(public_path('image/' . $setting->logo_watermark), 'bottom-right', 10, 10);
                    $img->save($temp . $file_large);
                    \File::copy($temp . $file_large, $main_path . $file_large);

                }//<--- IF FILE EXISTS

                set_time_limit(0);

                //=============== Image Large =================//

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

                //=============== Small Large =================//


                Helper::resizeImageFixed($temp . $file_large, 640, 424, $temp . $file_small);

                // Helper::resizeImageFixed( $temp.$file_large, 1366, 905, $temp.$file_large );

                Helper::resizeImageFixed($temp . $file_large, 596, 499, $temp . $file_large);


                //=============== Medium Large =================//
                $img_main = Image::make($temp . $file_large);
                $img_main->resize(300, 200);
                $img_main->save($large_path . $file_large);


                //======= Copy Folder Small and Delete...
                if (\File::exists($temp . $file_small)) {

                    $img = Image::make($temp . $file_small);
                   // $img->insert(public_path('image/' . $setting->logo_watermark), 'bottom-right', 10, 10);
                    //$img->save($temp.$file_small);

                    \File::copy($temp . $file_small, $small_path . $file_small);
                    \File::delete($temp . $file_small);


                }//<--- IF FILE EXISTS

                Image::make($temp . $file_large)->orientate();


                //dd(Image::make($temp.$file_large)->orientate());

                //Image::make($temp.$file_large)->orientate();

                // Image::make($temp.$file_large)->orientate();

                /* $img = Image::make(public_path('image/1-medium.jpg'));
                 $img->insert(public_path('image/logo.png'), 'bottom-right', 10, 10);
                 $img->save(public_path('image/main-new.png'));*/


                //======= Copy Folder Large and Delete...
                if (\File::exists($temp . $file_large)) {


                    \File::copy($temp . $file_large, $large_path . $file_large);
                    \File::delete($temp . $file_large);
                }//<--- IF FILE EXISTS

            }


            $image_small = $file_small;
            $image_large = $file_large;




        }


        $estate = new estateimage();
        $estate->EstateId =  $request->header('imageId');
        $estate->photo = "/EstateImage/$foldername/" . $image_large;
        $estate->namefolder = $foldername;
        $estate->namephoto = $image_large;
        $estate->small = $image_small;
        $estate->save();

        return response()->json(['status'=>200]);


    }

    public function DeleteImageEstate(Request $request)
    {


        $Id = $request->Id;
        $filename = estateimage::where('id', $Id)->first();
        $delete = estateimage::where('Id', $Id)->delete();
        if ($delete) {
            array_map('unlink', glob(public_path('EstateImage/' . $filename->namefolder . '/' . $filename->namephoto)));

            array_map('unlink', glob(public_path('EstateImage/' . $filename->namefolder . '/small/' . $filename->small)));

            array_map('unlink', glob(public_path('EstateImage/' . $filename->namefolder . '/medium/' . $filename->namephoto)));

            return response()->json(['status' => '100']);

        } else {

            return response()->json(['status' => '404']);
        }


    }

}

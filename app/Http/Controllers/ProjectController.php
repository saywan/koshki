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
use App\Model\Project;
use App\Model\projectimage;
use App\Model\region;
use App\Model\UsageTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estateinfo = Project::all();
        return view('admin.Project.list', ['estate' => $estateinfo]);
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

        return view('admin.Project.New', ['region' => $region, 'estatetype' => $estatetype, 'UsageTypes' => $UsageTypes, 'ownershiptype' => $ownershiptype, 'positiontype' => $positiontype, 'possibility' => $possibility]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $setting = AdminSettings::find(1);


        $temp = public_path('temp/');


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
        $EstateType = new Project();
        $EstateType->userId = Auth::user()->id;
        $EstateType->projectTitle = $request->projectTitle;
        /*   $EstateType->OwenershipTypeId = $request->ownership;*/
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
        $EstateType->address_ku = $request->Address_user_kurdish;
        $EstateType->LandTotalSquare = $totalLand;
        $EstateType->SquareFootage = $squrefootage;
        $EstateType->RoomNumber = $beedroomtotal;
        $EstateType->ComplimentalDescription = $request->TextEstate;
        $EstateType->ComplimentalDescriptionKu = $request->exampleFormControlTextarea1Kurdish;
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

            $directory = public_path('ProjectImage/') . $foldername;

            if (!file_exists($directory)) {
                mkdir(public_path('ProjectImage/') . $foldername);
                mkdir(public_path("ProjectImage/$foldername/medium"));
                mkdir(public_path("ProjectImage/$foldername/small"));
            }


            $large_path = public_path('ProjectImage/' . $foldername . '/medium/');
            $small_path = public_path('ProjectImage/' . $foldername . '/small/');
            $main_path = public_path('ProjectImage/' . $foldername . '/');


            if ($request->files) {
                $TrackEstateCode = $EstateType->TrackingCode;
                $EstateCode = $EstateType->Code;
                $foldername = $EstateCode . '-' . $TrackEstateCode;

                $directory = public_path('ProjectImage/') . $foldername;
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
                    mkdir(public_path('ProjectImage/') . $foldername);
                    //     mkdir(public_path("EstateImage/$foldername/medium"));
                    //   mkdir(public_path("EstateImage/$foldername/small"));
                }


                $large_path = public_path('ProjectImage/' . $foldername . '/medium/');
                $small_path = public_path('ProjectImage/' . $foldername . '/small/');
                $main_path = public_path('ProjectImage/' . $foldername . '/');

                if (count($request->files)) {

                    foreach ($request->file('files') as $file) {
                        //   $name = time().rand(5).'.'.$file->extension();
                        $name = $file->getClientOriginalName();
                        $file->move(public_path() . '/ProjectImage/' . $foldername . '/', $name);
                        $data[] = $name;

                        $estate = new projectimage();

                        $estate->EstateId = $id;
                        $estate->photo = "/ProjectImage/$foldername/" . $name;
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
        $estateinfo = Project::find($id);

        if (is_null($estateinfo)) {

            return redirect("/admin/Project");

        } else {
            $estateImage = projectimage::where('EstateId', $id)->get();
            $region = region::all();
            $estatetype = estatetype::all();
            $position = positiontype::all();
            $usagetype = UsageTypes::all();
            $ownership = ownershiptype::all();


            $possibilies = estateinfopossibility::where('EstateId', $id)->get();
            $possibiliesList = possibility::all();

            return view('admin.Project.edit', ['estateinfo' => $estateinfo, 'estateinfoId' => $id, 'region' => $region, 'estatetype' => $estatetype, 'position' => $position, 'usagetype' => $usagetype, 'ownership' => $ownership, 'estateImage' => $estateImage, 'possibiliesId' => $possibilies, 'listPosi' => $possibiliesList]);
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

        //dd($request->all());


        $update = Project::where('id', $request->EstateId)->update([
            'RegionId' => $request->region,
            'projectTitle' => $request->ProjectName,
            'projectTitleen' => $request->projectTitleen,
            'EstateTypeId' => $request->estatetype,
            'UsageTypeId' => $request->usagetype,
            'MobileNumber' => $request->MobileNumber,
            'Email' => $request->Email,
            'fullname' => $request->fullname,
            'Address' => $request->Address,
            'address_ku' => $request->address_ku,
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
    public function destroy($id)
    {
        //
    }
}

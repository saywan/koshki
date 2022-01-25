<?php

namespace App\Http\Controllers;

use App\Model\estateinfo;
use App\Model\estatetype;
use App\Model\ownershiptype;
use App\Model\positiontype;
use App\Model\possibility;
use App\Model\region;
use App\Model\UsageTypes;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = region::all();

        return view('admin.region.list', ['region' => $region]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Id = $request->Id;
        $estateInfoExsit=estateinfo::where('RegionId',$Id)->get();
        if(count($estateInfoExsit) > 0)
        {
            return response()->json(['status' => 401, 'msg' => 'You can not delete this area because a property is registered with this area']);

        }else{
           // $delete = region::where('id', $Id)->delete();
            $delete = region::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100, 'msg' => 'error delete']);
            }
        }


    }
}

<?php

namespace App\Http\Controllers;

use App\Model\estateinfo;
use App\Model\ownershiptype;
use Illuminate\Http\Request;

class OwnershipController extends Controller
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

        $ownership = ownershiptype::orderBy('id', 'DESC')->get();
        return view('admin.Ownership.list', ['ownership' => $ownership]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

        // dd($request->all());

        $update = ownershiptype::where('id', $Id)->update([
            'Name' => $request->EditNameOwnership
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
        $estateInfoExsit=estateinfo::where('OwenershipTypeId',$Id)->get();
        if(count($estateInfoExsit) > 0)
        {
            return response()->json(['status' => 401, 'msg' => 'You can not delete this Possibility because a property is registered with this area']);

        }else{
            // $delete = region::where('id', $Id)->delete();
            $delete = ownershiptype::where('id', $Id)->delete();
            if ($delete) {
                return response()->json(['status' => 200, 'Data' => $delete]);

            } else {
                return response()->json(['status' => 100, 'msg' => 'error delete']);
            }
        }
    }
}

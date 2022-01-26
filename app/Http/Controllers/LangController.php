<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index()
    {

        return view('Home.lang');
    }

    public function change(Request $request)
    {

        //dd($request->all());

        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}

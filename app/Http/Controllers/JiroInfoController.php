<?php

namespace App\Http\Controllers;

use App\Models\JiroInfo;
use Illuminate\Http\Request;

class JiroInfoController extends Controller
{
    public function addJiroInfo(Request $request)
    {
        \Log::info($request);
        $jiroinfo = new JiroInfo();

        $jiroinfo->name = $request->name;
        $jiroinfo->contact = $request->contact;
        $jiroinfo->address = $request->address;

        $jiroinfo->save();


        return response()->json($jiroinfo, 201);
    }

    public function getAllJiroInfo()
    {
        $jiroinfo = JiroInfo::all();
        return $jiroinfo;
    }
}

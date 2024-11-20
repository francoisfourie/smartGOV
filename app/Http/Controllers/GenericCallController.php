<?php
/**
 * Created by PhpStorm.
 * User: Nzuki
 * Date: 2024/11/18
 * Time: 10:48
 */

namespace App\Http\Controllers;


use App\Models\District;
use App\Models\GenericCall;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GenericCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::where('id', '>', 0)->get();
        $institutions = Institution::where('id', '>', 0)->get();
        $generic_calls = GenericCall::where('id', '>', 0)->get();

        return view('generic_call.index', compact('districts', 'institutions', 'generic_calls'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::where('id', '>', 0)->get();
        $institutions = Institution::where('id', '>', 0)->get();

        return view('generic_call.create', compact('districts', 'institutions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $genericCall = new GenericCall($input);
        $genericCall->name = $request->name;
        $genericCall->telephoneNo = $request->contactNo;
        $genericCall->mobileNo = $request->mobileNo;
        $genericCall->email = $request->email;
        $genericCall->call_type = $request->call_type;
        $genericCall->institution_type = $request->institution_type;
        //$genericCall->call_status = $request->email;
        $genericCall->reference = 'GC01';
        $genericCall->district_id = $request->district_id;
        $genericCall->institution_id = $request->institution_id;
        $genericCall->user_id = 1;

        if ($genericCall->save())
            return Redirect::route('calls')->with('success', 'Successfully added a call!');
        else
            return Redirect::route('addCall')->withInput()->withErrors($genericCall->errors());
    }
}
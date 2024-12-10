<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetails;  // 注意大小写

class projectdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $projectdetails = projectdetails::all();
        return view('projectdetails.index', compact('projectdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taps =  projectdetails::all(); 
        return view(' projectdetails.create', [' projectdetails' => $taps, ' projectdetailsSelected' => null]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $date = $request->only([
            'date_listed',
            'year',
            'application_number',
            'implementation_area',
            'township',
            'province_city_code',
            'province_city_town_code',
            'project_name',
            'central_grant',
            'local_matching_funds',
            'total_approved_budget_thousand',
            'implementation_item',
            'notes',
        ]);
        
        $Details = ProjectDetails::create($date);
        
        return redirect('projectdetails/indexnew');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projectdetails = ProjectDetails::findOrFail($id);  // 修正这里的 findOrFail 调用
        return view('projectdetails.show')->with('projectdetails', $projectdetails);  // 修正这里的 with 调用
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $projectdetail = ProjectDetails::find($id);
    $projectdetail->delete();
    return redirect('projectdetails/indexnew');

    }
}

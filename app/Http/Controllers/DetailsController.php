<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\Detailsrequest;
use App\Http\Controllers;
use App\Models\Details;
use GuzzleHttp\Promise\Create;

class DetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Details = Details::all();
        return view(('Details.index'), compact('Details'));  
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taps = Details::all(); 
        return view('Details.create', ['Details' => $taps, 'DetailSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Detailsrequest $request)
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
        
        $Details = Details::create($date);
        
        return redirect('Details.index2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Details =Details ::findOrFail($id);
        return view('Details.show', ['Details' => $Details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Details =Details ::findOrFail($id);
        return view("Details.edit")->with('Details', $Details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Detailsrequest $request, $id)
    {
        $Details = Details::findOrFail($id);
        $data = $request->only([
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

        $Details->fill($data);
        
        $Details->save();
        
        return redirect('Details.index2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Details =Details ::findOrFail($id);
        $Details->delete();
        return redirect('Details.index2');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\Postcode;
use App\Trade;

class PostcodeController extends Controller
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
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $country_slug
     * @param  string  $state_slug
     * @param  string  $postcode_slug
     * @return \Illuminate\Http\Response
     */
    public function show($country_slug, $state_slug, $postcode_slug)
    {
        $country = Country::where('slug', '=', $country_slug)->first();
        $state = State::where('slug', '=', $state_slug)->where('country_id', '=', $country->id)->first();
        $postcode = Postcode::where('slug', '=', $postcode_slug)->where('country_id', '=', $country->id)->where('state_id', '=', $state->id)->first();
        $trades = Trade::orderBy('title')->get();

        return view('postcodes.show')->withPostcode($postcode)->withTrades($trades);
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
        //
    }
}

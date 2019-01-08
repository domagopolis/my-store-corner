<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\Postcode;
use App\Trade;
use App\Store;

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
        $postcode = Postcode::whereHas('state', function($query) use ($state_slug, $country_slug){
            $query
            ->where('slug', '=', $state_slug)
            ->whereHas('country', function($query) use ($country_slug){
                $query->where('slug', '=', $country_slug);
            });
        })
        ->where('slug', '=', $postcode_slug)
        ->first();
        
        $trades = Trade::orderBy('title')->get();

        $stores = Store::where('postcode_id', '=', $postcode->id)
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('postcodes.show')->withPostcode($postcode)->withTrades($trades)->withStores($stores);
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

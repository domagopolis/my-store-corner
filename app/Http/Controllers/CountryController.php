<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Store;

class CountryController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function show($country_slug)
    {
        $country = Country::where('slug', '=', $country_slug)
            ->first();

        $stores = Store::whereHas('postcode', function($query) use ($country){
            $query->whereHas('state', function($query) use ($country){
                $query->whereHas('country', function($query) use ($country){
                    $query->where('id', '=', $country->id );
                });
            });
        })
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('countries.show')->withCountry($country)->withStores($stores);
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

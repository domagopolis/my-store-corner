<?php

namespace MyStoreCorner\Http\Controllers;

use Illuminate\Http\Request;
use MyStoreCorner\Country;
use MyStoreCorner\State;
use MyStoreCorner\Store;
use MyStoreCorner\Http\Resources\State as StateResource;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($country_id)
    {
        $states = State::select('id', 'name')->where('country_id', '=', $country_id)->get();

        return StateResource::collection($states);
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
     * @return \Illuminate\Http\Response
     */
    public function show($country_slug, $state_slug)
    {
        $state = State::whereHas('country', function($query) use ($country_slug){
            $query->where('slug', '=', $country_slug);
        })
        ->where('slug', '=', $state_slug)
        ->first();

        $stores = Store::whereHas('postcode', function($query) use ($state){
            $query->whereHas('state', function($query) use ($state){
                $query->where('id', '=', $state->id );
            });
        })
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('states.show')->withState($state)->withStores($stores);
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

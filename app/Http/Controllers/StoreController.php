<?php

namespace MyStoreCorner\Http\Controllers;

use Illuminate\Http\Request;
use MyStoreCorner\Trade;
use MyStoreCorner\Store;

class StoreController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => 'store']);
    }

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
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'business_registration_number' => 'required|max:255',
            'website' => 'url|max:255',
            'facebook_page_url' => 'url|max:255',
            'linkedin_page_url' => 'url|max:255',
            ));

        $store = new Store();
        $store->user_id = Auth::id();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->mobile = $request->mobile;
        $store->address = $request->address;
        $store->business_registration_number = $request->business_registration_number;
        $store->website = $request->website;
        $store->facebook_page_url = $request->facebook_page_url;
        $store->twitter_username = $request->twitter_username;
        $store->linkedin_page_url = $request->linkedin_page_url;
        $store->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($country_slug, $state_slug, $postcode_slug, $trade_slug, $store_slug)
    {
        $trade = Trade::where('slug', '=', $trade_slug)->first();
        $store = Store::where('slug', '=', $store_slug)->first();

        return view('stores.show')->withTrade($trade)->withStore($store);
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

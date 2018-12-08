<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Country;
use App\Store;

class PagesController extends Controller
{
    public function getIndex(){
		$countries = Country::where('display_enabled', '=', 1)->orderBy('name')->get();
		$stores = Store::inRandomOrder()->limit(4)->get();
		
		return view('pages.index')->withCountries($countries)->withStores($stores);
	}

	public function getServices(){
		return view('pages.services');
	}

	public function getBrowse(){
		return view('pages.browse');
	}

	public function getSearch(Request $request){
		$query = Input::get('query', false);

		return view('pages.search')->withQuery($query);
	}

	public function getContactUs(){
		return view('pages.contact-us');
	}
}

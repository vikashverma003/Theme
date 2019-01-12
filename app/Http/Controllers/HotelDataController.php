<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Data1;

class HotelDataController extends Controller
{
    


	public function index()


	{

		return view('hoteldata_form');


	}


		public function store2(Request $request)


		{


			$data = new Data1;

			$data->owner = $request->input('owner');


			$data->location = $request->input('location');


			$data->name = $request->input('name');



			$data->save();


            return redirect('/data');

			//echo "data saved successfully";




		}


}

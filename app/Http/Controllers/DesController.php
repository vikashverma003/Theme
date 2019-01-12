<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Des;


class DesController extends Controller
{
    
	public function index()


	{

		return view('des');
	}


	public function des4(Request $request)


	{



     if ($request->hasFile('image')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->image;
           
            $file_name = $files->getClientOriginalName();

             $filenamee = pathinfo($file_name, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store =  $filenamee."_" .time() ."_" .$extension;

            $files->move($destinationPath, $store);
           
        }


        $des = new Des;


        $des->name= $request->input('name');

        $des->destination= $store;

        $des->save();

        echo "file saved";
        



	}
}

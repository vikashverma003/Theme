<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image1;




class HotelImageController extends Controller
{
    


		public function index()

		{
            
			return view('hotelimage_form');

		}


		public function store(Request $request)

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



     if ($request->hasFile('video')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->video;

            $file_name1 = $files->getClientOriginalName();

            $filenameee = pathinfo($file_name1, PATHINFO_FILENAME);


            $extension = $files->getClientOriginalExtension();


            $store1 =  $filenameee."_" .time() ."_" .$extension;

            //$files->move($destinationPath, $file_name1);

             $files->move($destinationPath, $store1);
           
        }


     if ($request->hasFile('view')) {
           
            $destinationPath = 'imgs';
            
            $files = $request->view;

           
            $file_name2 = $files->getClientOriginalName();

            $filenameeee = pathinfo( $file_name2, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();



            $store2 =  $filenameeee ."_" .time() ."_"  .$extension;

            $files->move($destinationPath, $store2);
          

        }





              $image = new Image1;

			
            $image->image = $store;


			
            $image->video = $store1;

            

            $image->view = $store2;

            $image->save();


            return redirect('/image1');

           // echo "file saved successfully";


            


		}


}

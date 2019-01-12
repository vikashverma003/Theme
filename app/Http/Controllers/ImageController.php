<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image2;

use App\Des;

use App\Hotel;

use App\subdes;

use App\SubHotel;

use App\SubTen;

use DB;

class ImageController extends Controller
{
    


    public function dd()

    {

     $des = Des::all();

      return view('index1')->with('des', $des);

    }


    public function des_view($id)

    {



      $data = DB::table('des')
             ->select('des.destination')

              ->where('id', '=', $id)
              ->get();
           

      $img = DB::table('des')
                  ->join('sub_hotels', 'des.id', '=', 'sub_hotels.user_id')
                  ->select('sub_hotels.image', 'sub_hotels.name1', 'des.destination', 'des.name', 'sub_hotels.subimage', 'sub_hotels.id')
                  ->where('sub_hotels.user_id', '=', $id)
                  ->get();

                 // echo "<pre>";
                  //print_r($img);

                 // die();


                  return view('des_view', ['data'=>$data,'img'=>$img]);
            /*->join('hotels', 'des.id', '=', 'hotels.user_id')
            //->join('subdes', 'des.id', '=', 'subdes.dis')
            //, 'subdes.subname', 'subdes.subimage'

            //->where('des.id', '=', 2);
            ->select('des.name','hotels.image', 'des.destination')
            ->where('hotels.user_id', '=', $id)
            ->get();  */

              /* ->join('subdes', 'des.id', '=', 'subdes.dis')

            ->select('des.name', 'des.destination','subdes.subname', 'subdes.subimage')

            ->where('subdes.dis', '=', $id)
            ->get(); */

            /*->join('sub_hotels', 'des.id','=', 'sub_hotels.user_id' )
           
            ->select('sub_hotels.image', 'sub_hotels.name1', 'des.destination', 'des.name', 'sub_hotels.subimage')

            ->where('sub_hotels.user_id', '=', $id)
            ->get();*/

           // echo "<pre>";
         //  print_r($data);

          // die();




          /* foreach($data as $v)

            {

              $v->hotels =DB::table('hotels')->where('hotels.user_id', '=', $id);

            }

           echo "<pre>";

            print_r($data);

            die();  */


            //echo "<pre>";
//print_r($data);

//die();

      //$users = DB::table('hotels')->select('user_id', 'image')->get();

     // echo $users;

      //$data = "select * from hotels where $users = '$id' ";

       //return view('des_view')->with('data', $data);

     // return view('des_view', ['data'=>$data]);


    }



    public function sub_ten($id)

    {


      return view('subten');
    }



    public function save3(Request $request)

    {


     if ($request->hasFile('dimage')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->dimage;
           
            $file_name = $files->getClientOriginalName();

             $filenamee = pathinfo($file_name, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store1 =  $filenamee."_" .time() ."_" .$extension;

            $files->move($destinationPath, $store1);
           
        }


        $sub = new SubTen;

        $sub->dname= $request->input('dname');

        $sub->dimage = $store1;


        $sub->save();

        return redirect('/subten/m');

       // echo "data saved successfully";


    }



public function ten_view($id)

{


return view('ten_view');


}


    public function sub_hotels()

    {


      return view('sub_hotels');


    }

public function save2(Request $request)

{



     if ($request->hasFile('image')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->image;
           
            $file_name = $files->getClientOriginalName();

             $filenamee = pathinfo($file_name, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store1 =  $filenamee."_" .time() ."_" .$extension;

            $files->move($destinationPath, $store1);
           
        }



     if ($request->hasFile('subimage')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->subimage;
           
            $file_name = $files->getClientOriginalName();

             $filenamee = pathinfo($file_name, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store =  $filenamee."_" .time() ."_" .$extension;

            $files->move($destinationPath, $store);
           
        }


        $sub  = new SubHotel;

        $sub->name = $request->input('name');

        $sub->image=$store1;

          $sub->subname = $request->input('subname');

          $sub->subimage=$store;

          $sub->save();

          return redirect('/subhotels/m');

          echo "saved ";



}



    public function subdes()

    {


      return view('subdes');
    }

    public function save1(Request $request)

    {




     if ($request->hasFile('subimage')) {
            
            $destinationPath = 'imgs';
           
            $files = $request->subimage;
           
            $file_name = $files->getClientOriginalName();

             $filenamee = pathinfo($file_name, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store =  $filenamee."_" .time() ."_" .$extension;

            $files->move($destinationPath, $store);
           
        }

        $ho = new subdes;

        $ho->subname = $request->input('subname');

        $ho->subimage = $store;

        $ho->save();

        return redirect('/subdes/m');




    }







    




    public function image_hotel()

    {

      return view('image_hotel');
    }



    public function save(Request $request)

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

        $hotel = new Hotel;

        $hotel->name = $request->input('name');

        $hotel->image = $store;

        $hotel->save();

        return redirect('/image_hotel');




    }



			public function imageNew()

			{

 				 return view('image');


			}



			public function store3(Request $request)

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





              $image = new Image2;

			
            $image->image = $store;


			
            $image->video = $store1;

            

            $image->view = $store2;

            $image->save();


          

           echo "file saved successfully";


            


		}


}


			




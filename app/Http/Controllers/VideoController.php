<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Video;

use App\Destination;

use App\Image1;

use App\image2;

class VideoController extends Controller
{
    


    public function index()


    {


    	return view('videos_form');


    }




public function tour()


{


  return view('tour');

}


public function tour1()


{

  return view('tour1');

}


public function tour2()


{

  return view('tour2');

}



public function tour3()


{

  $image = Image1::where('id', 13);

  return view('tour3', ['image'=>$image]);

  //->with('image', $image->image);

}




public function tour4()


{

  return view('tour4');

}


  public function all()

  {

    $image = Image1::all();

    return view('all')->with('image', $image);


  }


  public function image($id)

  {


   $image= Image1::find('id');

    return view('index1')->with('image', $image);


  }
  





    public function store1(Request $request)

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


     if ($request->hasFile('image1')) {
           
            $destinationPath = 'imgs';
            
            $files = $request->image1;

           
            $file_name2 = $files->getClientOriginalName();

            $filenameeee = pathinfo( $file_name2, PATHINFO_FILENAME);

            $extension = $files->getClientOriginalExtension();


            $store2 =  $filenameeee ."_" .time() ."_"  .$extension;

            $files->move($destinationPath, $store2);
          

        }

        $video = new Video;

        $video->image=    $store ;

        $video->video=    $store1;

        $video->threesixty_view=    $store2;

      //  $video->destination_id = $video->destination->id;

        //  $video->destination_id =  Destination::where('address', $request->address)->get(); 

        //$destination = App\Destination::find(1);

      //  $video->destination_id = $destination->destination->id;



        $video->save();


        echo "upload successfull";



    }
  }
 // }

//}



     /* if($request->hasFile('cover_image'))

      {


        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


        $extension = $request->file('cover_image')->getClientOriginalExtension();


        $fileNameToStore = $filename.'_'.time().'_'.$extension;

        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore );


      }

      else

      {

           $fileNameToStore = 'no image';
      	
      }




      $video  = new Video;

      $video->name = $request->input('name');


      $page->image =   $fileNameToStore;

      $page->video =   $fileNameToStore1;

      $page->threesixty_view =   $fileNameToStore2;



      $page->save();


        */

/*

for uploading


     if ($request->hasFile('image')) {
            $destinationPath = 'imgs';
            $files = $request->image;
            $file_name = $files->getClientOriginalName();
            $files->move($destinationPath, $file_name);
            echo "Complete";
        } else {
            echo "No File";
        }






*/


    

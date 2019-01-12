<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Destination;

use App\Testing2;

use DB;

//use GuzzleHttp;


//use \Exception\GuzzleException;
//use GuzzleHttp\Client;

//use App\Utilities\GoogleMaps;


class DestinationController extends Controller
{
    

		public function latlong()

   		{


    		return view('lat');


   		}

         public function abc(Request $request)

         {
      



$address = $request->input('address');
 // Google HQ
//$address = 'NJ 07094,USA'; // Google HQ
$prepAddr = str_replace(' ','+',$address);
//$geocode=file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=true_or_false&key=AIzaSyAy-VF8m9gntTZl38wWdmUZ5dkExmnV3gM");


//$geocode=file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=true_or_false&key=AIzaSyAy-VF8m9gntTZl38wWdmUZ5dkExmnV3gM");

//$geocode="http://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyAviDgiUacxB-JTht3akLsAqc69g32bPV0");



//$geocode =  "https://maps.googleapis.com/maps/api/geocode/json?address=$prepAddr&sensor=false&key =AIzaSyCwMlCOeY4zLzc9YjhpW0xIMmZKKqjKcx0";


//$json = file_get_contents($geocode);  


$geocode=file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=true_or_false&key=AIzaSyCwMlCOeY4zLzc9YjhpW0xIMmZKKqjKcx0");


$jsonArr = json_decode($geocode);      
 

 $status = $jsonArr->status;

   if($status=="OK")

{

$lat = $jsonArr->{'results'}[0]->{'geometry'}->{'bounds'}->{'northeast'}->{'lat'};     

$lng = $jsonArr->{'results'}[0]->{'geometry'}->{'bounds'}->{'northeast'}->{'lng'};

//echo $lat;

$data =array(

   'address'=>$address,

   'lat'=>$lat,

   'lng'=>$lng

   );

   $ta = DB::table('testing2s')

         ->insert($data);



         echo "coordinate saved successfully ";


}



//die();

//$out= json_decode($geocode);

//print_r($jsonArr);

//die();


//echo $output['lat'];



//die();




/*$data = DB::table('testing1')
         ->insert([

         'address' =>$output['address'],

         'lat'=>$output['lat'],

         'longitude'=>$output['lng'],

      ]);

 */
 //echo "lat lng saved ";


}


            

	}
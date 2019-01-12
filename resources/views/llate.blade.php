
API key
AIzaBcDeFgHiJkLmNoPqRsTuVwXyZ&callback=initialize

AIzaSyAy-VF8m9gntTZl38wWdmUZ5dkExmnV3gM

last
AIzaSyB8Hrd1XcZTUAzEfvUeUFl-vPgeS6vl8oE


            $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address=573/1,+Jangli+Maharaj+Road,+Deccan+Gymkhana,+Pune,+Maharashtra,+India&sensor=false');

         $output= json_decode($geocode);

         var_dump($output);

         die();

         $lat = $output->results[0]->geometry->location->lat;

         $long = $output->results[0]->geometry->location->lng;



          //$lat=$_POST['latitude'];

             //$long=$_POST['longitude'];

            $address=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$long&key=AIzaSyAy-VF8m9gntTZl38wWdmUZ5dkExmnV3gM");
            
             $json_data=json_decode($address);

            $full_address=$json_data->results[0]->formatted_address;



            $data = DB::insert([

               'lat'=>$request->input('lat'),
               'longitude'=>$request->input('long'),
               

               'address'=>$request->input('address'),

            ]);



  }


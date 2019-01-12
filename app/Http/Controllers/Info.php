<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

class Info extends Controller
{
    

    public function profile1(User $user)

    {


       return view('proffile');
        


      //  $user = Auth::user();

        //$user= Auth::user()->id;

      //  return view('proffile')->with('user',$user);


    }





public function store(Request $request)

{


        $year = $request->input('year');

        $month = $request->input('month');

        $date = $request->input('date');

        $birthday = $year.'-'.$month.'-'.$date;

        $request->merge([

            'birthday' => $birthday,
        ]);


        $user1 = new User;


        $data = array(

            'title'=>$request->input('title'),


            'mname'=>$request->input('mname'),
            
            'lame'=>$request->input('lname'),
            
            'zipcode'=>$request->input('fcode'),
            
            'phone_number'=>$request->input('pnumber'),
            
            'dob'=>$birthday
            

        );


     //   echo "<pre>";


  // print_r($data);

   // die();


   // $result=   $user->update($data);


        $id = Auth::user()->id;
    
    
            $result=   $user1->where('id', $id)
                            ->update($data);
                    
            
            //$user->save($data);


            return redirect('/profile');
        //echo "data updated";




        /*$user->title = request('title');

        $user->mname = request('mname');

        $user->lame = request('lname');

        $user->zipcode = request('zipcode');

        $user->phone_number = request('pnumber');

        $user->dob = $birthday;

        $user->save(); */

// $user->user_id = auth()->user()->id;
      

}

/*    public function store(Request $request)

    {

        $year = $request->input('year');

        $month = $request->input('month');

        $day = $request->input('day');

        $birthday = $year.'-'.$month.'-'.$day;

        $request->merge([
            'birthday' => $birthday,
        ]);
 





        $user = new User;

        //$user->fname = Auth::user()->fname;

       // $user->email = Auth::user()->email;


        $user->title=$request->input('title');

        //$user->title=$request->input('fname');

       // $user->fname=$request->input('fname');

        $user->mname=$request->input('mname');

        $user->lame=$request->input('lname');

        $user->zipcode=$request->input('fcode');

        $user->phone_number=$request->input('pnumber');

        $user->dob=$birthday;

        $user->save();


    }



*/



    public function index()

    {


    	return view('sign');
    }

   
    public function beau()

    {


    	return view('beau');


    }
 



     public function filter()

    {


    	return view('filter');


    }


   /* public function edit($id)

    {

        $user  = User::find('id');


        //return view('proffile')->with('user', $user);

    } */






}

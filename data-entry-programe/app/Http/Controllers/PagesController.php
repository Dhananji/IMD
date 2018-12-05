<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;
class PagesController extends Controller
{
    public function about()
    {
    	return view('about');


    }

    public function insert(Request $request)
    {
    	//return view('insert');

 	    $data = ['date'=>$request->date,
    			 'name'=>$request->name,
    			 'description'=>$request->description,
    			 'amount'=>$request->amount,
    			 'fee'=>$request->fee];
    			 DB::table('user')->insert($data);
    			 echo "Record inserted successfully.<br/>";
    }



   //public function save(Request $request)
  //  {
    	//dump($request->all());
    //	$data = ['date'=>$request->date,
    			// 'name'=>$request->name,
    			// 'description'=>$request->description,
    			// 'amount'=>$request->amount,
    			// 'fee'=>$request->fee];
    			// DB::table('user')->insert($data);
    		//	 echo "Record inserted successfully.<br/>";
   // }//

   // public function insert()
   // {
   // 	return view('about',['payment'=>Payment::all()]);
    //}
}

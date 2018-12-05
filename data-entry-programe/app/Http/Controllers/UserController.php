<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    	 public function insertform(){
         return view('new');

         public function insert(Request $request){

 	    $data = ['date'=>$request->date,
    			 'name'=>$request->name,
    			 'description'=>$request->description,
    			 'amount'=>$request->amount,
    			 'fee'=>$request->fee];
    			 DB::table('user')->insert($data);
    			 echo "Record inserted successfully.<br/>";

 	}

}


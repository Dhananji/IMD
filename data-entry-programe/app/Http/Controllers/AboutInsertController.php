<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user;

use App\Http\Controllers\Controller;

class AboutInsertController extends Controller{

    public function insertform(){
      		return view('about');
    }
	
	public function get(Request $request){
		$data = ['date'=>$request->date,
    			 'name'=>$request->name,
    			 'description'=>$request->description,
    			 'amount'=>$request->amount,
    			 'fee'=>$request->fee];
    			 DB::table('user')->insert($data);
    			 echo "Record inserted successfully.<br/>";

	}


	public function calculate()
	{
		
	}


    public function store(Request $request){

 	    $data = ['date'=>$request->date,
    			 'name'=>$request->name,
    			 'description'=>$request->description,
    			 'amount'=>$request->amount,
    			 'fee'=>$request->fee];
    			 DB::table('user')->insert($data);
    			 echo "Record inserted successfully.<br/>";

 	}



}
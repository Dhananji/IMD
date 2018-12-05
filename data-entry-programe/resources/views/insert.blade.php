<?php

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
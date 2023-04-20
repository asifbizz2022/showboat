<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{ 
    public function index()
    {
        echo "index";
    }

    public function user_register(Request $request){ 

        // print "<pre>";
        // print_r($request->all());
        // die();
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'email'=>'required',
            'pan'=>'required',
            'adhar'=>'required',
        ]);
        $link = 'http://localhost/admin-layout/admin-cast-layout/storage/app/user_image/';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('user_image', $imageName);  
        }

        $result = DB::table('user_list')->insert(
            [
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'pan'=>$request->input('pan'),
                'adhar'=>$request->input('adhar'),
                'address'=>$request->input('address'),
                'image'=>$link.$imageName,
            ]
        );

        if($result){
            return back()->with('message','Task Added Successfully');
        }

    }

    public function get_user_data()
    {
      
    }
    
}

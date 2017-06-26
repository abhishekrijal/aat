<?php

namespace AAT\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Image;

class UserProfileController extends Controller
{
    public function profile(){

    	return view('/app/user', array('user' => Auth::user() ));
    }

    public function update_avatar( Request $request ){

    	//handle Upload Image.
    	
    	if($request->hasFile('avatar')){

    		$avatar = $request->file('avatar');
    		$filename = time().'.'. $avatar->getClientOriginalExtension();

    		Image::make($avatar)->resize(300,300)->save( public_path( '/uploads/avatars/'.$filename ) );

    		$user = Auth::user();

    		$user->avatar = $filename;

    		$user->save();
    	}

    	return view('/app/user', array('user' => Auth::user() ));

    }
}

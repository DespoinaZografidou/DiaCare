<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function ShowProfile(){
        return view('profile');
    }

    public function UpdateProfile(Request $request){

        $id=Auth::User()->id;
        if($request->file('image')!=null){
            $image = $request->file('image');
            $filename = time() . '_' .$image->getClientOriginalName();
            // Move the uploaded file to a desired directory
            $image->move(public_path('profile_pics'), $filename);

            User::where('id', $id)->update([

                'profile_pic'=>'profile_pics/'.$filename
            ]);
            // if there is not a new profile update only the email of he user
        }
        return redirect()->back()->with('message',"Your profile has been successfully updated!");
    }
}

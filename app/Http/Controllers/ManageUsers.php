<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// Διαχειριση Χρηστών του συστήματος
class ManageUsers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkIfAdmin');
    }

    public function ShowUsersByRole($title){
        $data=User::where('role', $title)->paginate(10);

       return view('ManageUsers',['users'=>$data,'title'=>$title]);
    }

    public function AddDoctors(Request $request){
        $firstname= $request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $password=$request->input('password');

        User::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'role'=>'Doctor',
            'profile_pic'=>"profile_pics/default_pic.jpg",
            'password' => Hash::make($password)
        ]);
        return redirect()->back()->with('message',"The new doctor has been successfully added!");
    }

    public function DeleteUser(Request $request){
        $user_id=$request->input('id');
        $user = User::find($user_id);
        if ($user) {
            $user->delete();
        }


        return redirect()->back()->with('message',"The selected user has been successfully deleted!");
    }
}

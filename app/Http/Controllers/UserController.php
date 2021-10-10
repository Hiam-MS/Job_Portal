<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function editform()

    {
        $person = auth()->user()->GetPerson;

        return view('user.EditProfile');
    }





    public function updateprofile(Request $Request){

$Request->validate([
            'name'=> ['required', 'string', 'max:255'] ,
            'email'=>  'string|nullable|unique:users',
            // 'mobile'=> ['required', 'string', 'max:10', 'unique:users'] ,
           
           
          
        ]);



    $user = User::find(Auth::id());

    $user->name =  $Request->input("name");
    $user->mobile  = $Request->input("mobile");
    $user->email  =  $Request->input("email");
    $user->save();
    return view('welcome');

         
        

      

        // $hashPassword= Auth::user()->password;
        // if(Hash::check($Request->input("oldpassword") , $hashPassword)){

        //     $user = User::find(Auth::id());
        //     $user->password = Hash::make($Request->input("password"));
        //     $user->save();
        //     Auth::logout();
        //     return redirect()->route('login')->with('successMsg', ' تم تغيير كلمة المرور بنجاح');
        // }
        // else
        // return redirect()->back()->with('erorrMsg', ' كلمة المرور القديمة خاطئة');



 


    }

public function Deleteprofile()
    {
        $user = User::find(Auth::id());

         $res=$user->delete();
  if ($res){
    
    return view('welcome');
}else{
    
    return redirect()->back()->with('erorrDelteProfile', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}

}

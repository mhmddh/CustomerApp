<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;


class LoginController extends Controller
{
    public function login(Request $request){
        
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = $request->password;
        
        $user = User::where('username', '=', 'admin')->first();
        if($username==$user->username && Hash::check($password, $user->password)){
        //correct password
        $customers =  Customer::paginate(5);
        return view('customers.index',[
            'customers' => $customers
        ]);

        } 
        //incorrect password
        return view('welcome'); 
      }

      public function logout(){
        return view('welcome'); 
      }
    }


        

    
    
    
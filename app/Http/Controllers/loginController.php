<?php

namespace App\Http\Controllers;

use Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\person;
use Auth;
use PharIo\Manifest\Email;

class loginController extends Controller
{

    public function signupView() //showsignup page
    {
        return view('signup');
    }
    public function loginView()//showlogin page
    {
        return view('login');
    }

    public function adduser() // adds a  new user to the database
    {
        $data = request()->validate([
                'username' => 'required|min:3',
                'password' => 'required|min:3',
                'email' => 'required|email'
        ]);
        //person::create($data);
        $ANewUser = new person();
       $ANewUser->name = request('username');
        $ANewUser->password = Hash::make(request('password'));
        $ANewUser->email = request('email');

        if ($ANewUser->save())
        {
            return view('welcome');
        }

        //person::create($data);
        //$ANewUser->save();
        //dd(request(['username','password','email']));

    }


    public function loginuser(Request $request) // allow a user to log in
    {
        $request-> validate([
            'login'=>'required',
            'password'=>'required',
        ]);


        $user = $request->login;
        $password =$request->password;
        if (filter_var($user,FILTER_VALIDATE_EMAIL))
        {
            //$userflied = 'email';
            //return $userflied = $Auser->email;
            $userflied = 'email';
        }
        else
        {
            //return $userflied = $Auser->name;
            $userflied = 'name';
        }

        if (Auth::attempt([$userflied => $user, 'password' => $password])) {
            return view('home');
        }
        else
        {
            return redirect()->to('/login')
        ->withErrors([
            Lang::get('auth.failed'),
        ]);
        }












        /*$qry = person::where('name',$request->login)->first();
         /*$qry = person::where([
             ['name',$request->login],
             ['email',$request->login],
             ])->first();*/

           /*if ($qry != null){
                if(Hash::check($request->password, $qry->password)){
                    return view('home');
                }
                return view('login');
           }*/






    }


























}

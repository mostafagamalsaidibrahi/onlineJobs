<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class SharedController extends Controller
{
    // sign up function
    public function signUp (Request $request){
        if($request->isMethod('post')){

            // validation
            $fullnameValue = $request->input('fullname');
            $usernameValue = $request->input('username');
            $passwordValue = $request->input('password');
            $repasswordValue = $request->input('repassword');
            if($fullnameValue == "" || $usernameValue == "" || $passwordValue == ""){
                echo "<script>window.alert(\"Please Complete Your Data\");</script>";
            }else if($passwordValue == $repasswordValue){
            $newUser = new User();
            $newUser->fullname = $request->input('fullname');
            $newUser->username = $request->input('username');
            $newUser->password = $request->input('password');
            $newUser->type = $request->input('type');
            $newUser->save();
            echo "<script>window.alert(\"Account is Maked Please Wait For Accepting Your Account By Admin\");</script>";
            return redirect('login');
            }else{
                echo "<script>window.alert(\"Password Not Match\");</script>";
            }
            return view('main.sign_up');
        }else{
            return view('main.sign_up');
        }

    }

    // login function
    public function login (Request $request){

        $username = $request->input('username');
        $password = $request->input('password');





        // Admin Login Action
        $checkLoginAdmin = DB::table('users')
            ->where(['username'=>$username ,'password'=>$password , 'type'=> "admin" ,  'status' => "1"])->get();

        if(count($checkLoginAdmin) > 0 ){

            $data = $request->input('username');
            $file = fopen('dataAuth.txt' , 'w');
            fwrite($file , $data);
            fclose($file);

            return redirect('admin_index');
        }else{
            $checkLoginAdmin = DB::table('users')
                ->where(['username'=>$username ,'password'=>$password , 'type'=> "admin" ,  'status' => "0"])->get();
            if(count($checkLoginAdmin) > 0 ){
                echo "<script>window.alert(\"Please Wait Until Accepting Your Account\");</script>";
                return view('main.login');
            }
            // User Login Action
            else{
                // Check If User Accepted Or Not
                $checkLoginUser = DB::table('users')
                    ->where(['username'=>$username ,'password'=>$password , 'type'=> "user" ,  'status' => "1"])->get();
                if(count($checkLoginUser) > 0 ){

                    $data = $request->input('username');
                    $file = fopen('dataAuth.txt' , 'w');
                    fwrite($file , $data);
                    fclose($file);
                    return redirect('user_index');
                }else{
                    $checkLoginAdmin = DB::table('users')
                        ->where(['username'=>$username ,'password'=>$password , 'type'=> "user" ,  'status' => "0"])->get();
                    if(count($checkLoginAdmin) > 0 ){
                        echo "<script>window.alert(\"Please Wait Until Accepting Your Account\");</script>";
                        return view('main.login');
                    }
                    // Work Owner
                    else{
                        $checkLoginUser = DB::table('users')
                            ->where(['username'=>$username ,'password'=>$password , 'type'=> "work_owner" ,  'status' => "1"])->get();
                        if(count($checkLoginUser) > 0 ){

                            $data = $request->input('username');
                            $file = fopen('dataAuth.txt' , 'w');
                            fwrite($file , $data);
                            fclose($file);
                            return redirect('workOwner_index');
                        }else{
                            $checkLoginAdmin = DB::table('users')
                                ->where(['username'=>$username ,'password'=>$password , 'type'=> "work_owner" ,  'status' => "0"])->get();
                            if(count($checkLoginAdmin) > 0 ){
                                echo "<script>window.alert(\"Please Wait Until Accepting Your Account\");</script>";
                                return view('main.login');
                            }else{
                                echo "<script>window.alert(\"Username Or Password Is Wrong\");</script>";
                                return view('main.login');
                            }
                        }
                    }
                }
            }
        }
    }

    // logout function
    public function logout (Request $request){}

}




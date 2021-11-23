<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // show all users
    public function showAllUsers(){
        $newUser=  DB::table('users')->where(['status' => 0])->get();
        $arr = Array('newUser'=>$newUser);
        return view('admin.show_all_users' ,$arr);
    }

    //delete user
    public function deleteUser($id){
        DB::table('users')->where('id' , $id)->delete();
        return redirect('show_all_users');
    }

    // Accept user
    public function acceptUser($id){
        DB::table('users')->where('id', $id)->update(array('status' => 1));
        return redirect('show_all_users' );
    }

    // Create New Admin
    public function createNewAdmin(Request $request){
        if($request->isMethod('post')){

            // validation
            $fullnameValue = $request->input('fullname');
            $usernameValue = $request->input('username');
            $passwordValue = $request->input('password');
            $repasswordValue = $request->input('repassword');
            if($fullnameValue == "" || $usernameValue == "" || $passwordValue == "" ||
                $fullnameValue == " " || $usernameValue == " " || $passwordValue == " "){
                echo "<script>window.alert(\"Please Complete Your Data\");</script>";
            }else if($passwordValue == $repasswordValue){
                $newAdmin = new User();
                $newAdmin->fullname = $request->input('fullname');
                $newAdmin->username = $request->input('username');
                $newAdmin->password = $request->input('password');
                $newAdmin->type = 'admin';
                $newAdmin->status = 1 ;
                $newAdmin->save();
                echo "<script>window.alert(\"Account is Maked\");</script>";
                return redirect('create_new_admin');
            }else{
                echo "<script>window.alert(\"Password Not Match\");</script>";
            }
            return view('admin.create_new_admin');
        }else{
            return view('admin.create_new_admin');
        }

    }

    // Get Statistics
    public function getStatistics (){
        $newAllUser=  DB::table('users')->count();
        $arr1 = Array('newUser1'=>$newAllUser);

        $newUser1=  DB::table('users')->where(['type'=>'admin'])->count();
        $arr1 = Array('newUser1'=>$newUser1);

        $newUser2=  DB::table('users')->where(['type'=>'user'])->count();
        $arr2 = Array('newUser2'=>$newUser2);

        $newUser3 = DB::table('users')->where(['type'=>'work_owner'])->count();
        $arr3 = Array('newUser3'=>$newUser3);

        $newAcceptedJobs = DB::table('jobs')->where(['status'=>'1'])->count();
        $arr4 = Array('newAcceptedJobs'=>$newAcceptedJobs);
        $newRejectedJobs = DB::table('jobs')->count();
        $arr4 = Array('newRejectedJobs'=>$newRejectedJobs);

        return view('admin.statistics' )
            ->with(['newAllUser' => $newAllUser])
            ->with(['newUser1'=>$newUser1])
            ->with(['newUser2'=>$newUser2])
            ->with(['newUser3'=>$newUser3])
            ->with(['newAcceptedJobs'=>$newAcceptedJobs])
            ->with(['newRejectedJobs'=>$newRejectedJobs]);
    }

    // show All Jobs
    public function showAllJobs(){
        $newJob=  DB::table('jobs')->where(['status' => 0])->get();
        $arr = Array('newJob'=>$newJob);
        return view('admin.show_all_jobs' ,$arr);
    }

    //delete job
    public function deleteJob($id){
        DB::table('jobs')->where('jId' , $id)->delete();
        return redirect('show_all_jobs');
    }

    // Accept job
    public function acceptJob($id){
        DB::table('jobs')->where('jId', $id)->update(array('status' => 1));
        return redirect('show_all_jobs' );
    }
}

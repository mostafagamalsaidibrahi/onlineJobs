<?php

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkOwnerController extends Controller
{
    // Adding new Job
    public function addJob (Request $request){
       if($request->isMethod('POST')){


           $read = file('dataAuth.txt');
           foreach ($read as $read) {}
           $companyname = $request->input('companyName');
           $jobField = $request->input('jobField');
           $jobDescription = $request->input('jobDesc');
           $notes = $request->input('notes');

           // Validation
           if($companyname == "" || $jobField == "" || $jobDescription == "" || $notes == ""){
               echo "<script>window.alert(\"Please Complete Your Data\");</script>";
           }else{
               $newJob = new jobs();
               $newJob->username = $read;
               $newJob->company_name = $request->input('companyName');
               $newJob->job_description = $request->input('jobField');
               $newJob->job_field = $request->input('jobDesc');
               $newJob->notes = $request->input('notes') ;
               $newJob->save();
               echo "<script>window.alert(\"Account is Maked\");</script>";
               return  redirect('add_job')  ;
           }
       }
       return view('work_owner.add_job');
    }

    // Show My Uploaded Jobs
    public function showMyJobs (Request $request){

        $read = file('dataAuth.txt');
        foreach ($read as $read) {}

        $newJob=  DB::table('jobs')->where(['username' => $read , 'status' => 1 ])->get();
        $arr = Array('newJob'=>$newJob);


        return view('work_owner.show_my_jobs' ,$arr);
    }

    public function showUsersWhoUpplied (Request $request , $id){
        $newUppliedUser=  DB::table('upplied_jobs')->where(['jId' => $id , 'status' => '0'])->get();
        $arr = Array('newUppliedUser'=>$newUppliedUser);
        return view('work_owner.show_users_who_upplied' , $arr);
    }

    //delete user
    public function deleteUser($id){
        DB::table('upplied_jobs')->where('uJId' , $id)->delete();
        return redirect('show_my_jobs');
    }

    // Accept user
    public function acceptUser($id){
        DB::table('upplied_jobs')->where('uJId', $id)->update(array('status' => 1));
        return redirect('show_my_jobs' );
    }

}

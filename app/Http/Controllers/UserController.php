<?php

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Location;

class UserController extends Controller
{
   // Show All Jobs For Uppling these
    public function showJobsForupply (Request $request){
        $newJob=  DB::table('jobs')->where(['status' => 1])->get();

        $arr = Array('newJob'=>$newJob);

        return view('user.upply_jobs' , $arr);
    }

    // Make Upply For Job
    public function makeUpply($id){

        // Check If Job Upplied From The same user or not
        $checkJobUppling = DB::table('upplied_jobs')
            ->where(['jId' => $id])->get();

        if(count($checkJobUppling) > 0 ){
            // return view('user.upply_jobs');
            $result = "Done Ya Ba4a";
            session()->flash('result' , $result);
            return redirect('upply_jobs');

        }else{
            $read = file('dataAuth.txt');
            foreach ($read as $read){}
            DB::table('upplied_jobs')->insert(
                ['jId' => $id , 'username' => $read]
            );
            return redirect('upply_jobs' );
        }
    }
}

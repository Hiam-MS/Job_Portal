<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Person;
use App\Models\ApplyedJob;
use DB;

class ApplicantController extends Controller
{

    public function applyedJob()
    {
        $id = auth()->user()->GetPerson->id;
        $person =auth()->user()->GetPerson;
      

        $jobs = DB::table('applyed_jobs')
        ->join('jobs', 'applyed_jobs.job_id', '=', 'jobs.id')
        ->when($id, function ($query) use ($id) {
                return $query->where('applyed_jobs.person_id', $id);
            })
        ->orderBy('applyed_jobs.created_at', 'desc')
        ->get();
        return view('person.applyedJob',compact('jobs','person'));

    }



    public function storeApplyedJob(Request $request)
    {
        

            $Applyedjob =new ApplyedJob ;
            $Applyedjob->job_id=  $request->input('job');
            $Applyedjob->person_id= auth()->user()->GetPerson->id;
            $Applyedjob->status='pennding';

            $Applyedjob->save();
            

            return redirect()->route('applyedJob');

    }
  



}

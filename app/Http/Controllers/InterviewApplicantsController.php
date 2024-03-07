<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interview_applicants;

class InterviewApplicantsController extends Controller
{
    public function listall(Request $request){

        $applicants = interview_applicants::all();

        return response()->json($applicants);
    }

    public function getById(Request $request){

        $applicant = interview_applicants::findorfail($request->id);
        return response()->json($applicant);
    }
    public function adding(Request $request){
        $applicants = new interview_applicants;

        $applicants->name = $request->name;
        $applicants->age = $request->age;
        $applicants->yearofexperience = $request->yearofexperience;

        $applicants->save();

        return response()->json('Added Successfully');
    }

    public function edit(Request $request){

        $applicants = interview_applicants::findorfail($request->id);

        $applicants->name = $request->name;
        $applicants->age = $request->age;
        $applicants->yearofexperience = $request->yearofexperience;

        $applicants->update();

        return response()->json('Updated Successfully');
    }


    public function delete(Request $request){

        $applicants = interview_applicants::findorfail($request->id)->delete();

        return response()->json('Deleted Successfully');
    }
}

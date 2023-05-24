<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregnant;

class PregnantController extends Controller
{
    public function add_pregnant()
    {
        return view('add_pregnant');
    }

    public function list_pregnant()
    {
        $Pregnant = Pregnant::all();
        return view('list_pregnant', compact('Pregnant'));
    }

    public function destroy($id)
    {
        
        $delete = Pregnant::where('PregnantID',$id)->delete();
        return redirect()->route('list_pregnant');
    }

    public function store(Request $request)
    {
        $message = [
            'result' =>false,
            'message' =>'please contact admin'
        ];

        if(isset($request->PregnantID)){
            //diri ang update/edit na code
            $pregnant =    [
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'Height' => $request->Height,
            'BirthDate' => $request->BirthDate,
            'Blood' => $request->Blood,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'Mobile' => $request->Mobile,
            'BloodPressure' => $request->BloodPressure,
            'Urinalysis' => $request->Urinalysis,
            'Weight' => $request->Weight,
            'Date' => $request->Date,
            ];
            $update = PregnantID::where('PregnantID',$request->PregnantID)->update($pregnant);
            if($update){
                $message['result'] = true;
                $message['message'] = 'Successfully updated.';
            } else {
                $message['message'] = 'Failed updating pregnant.';
            }
            return json_encode($message);
            } else
            {
            // diri ang save na code
            $pregnant =    [
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'Height' => $request->Height,
            'BirthDate' => $request->BirthDate,
            'Blood' => $request->Blood,
            'Email' => $request->Email,
            'Address' => $request->Address,
            'Mobile' => $request->Mobile,
            'BloodPressure' => $request->BloodPressure,
            'Weight' => $request->Weight,
            'Urinalysis' => $request->Urinalysis,
            'Date' => $request->Date,
            ];
        if(empty($request->FirstName))
        {
            return view('add_pregnant')->with('Error', 'FirstName is required');
        }

        if(empty($request->LastName))
        {
            return view('add_pregnant')->with('Error', 'LastName is required');
        }
        $Filter = Pregnant::where('FirstName', $request->FirstName)
        ->where('MiddleName', $request->MiddleName)
        ->where('LastName', $request->LastName)
        ->where('BloodPressure', $request->BloodPressure)
        ->where('Weight', $request->Weight)
        ->where('Date', $request->Date)
        ->where('Blood', $request->Blood)->first();

        if($Filter)
        {
            return view('add_pregnant')->with('Error', 'Pregnant info already exist.');
        } else
        {
            $save = Pregnant::insert($pregnant);
            if($save){
                return view('add_pregnant')->with('Success', 'Successfully save');
            } else {
                return view('add_pregnant')->with('Error', 'Invvalid');
            }
        }
        }
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Control;
use Illuminate\Support\Facades\Auth;

class ControlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()){

            $user = Auth::user();
        $user_email = $user->email;
        if (Auth::user()->role == 1) {
            $id = Patient::where('email', 'LIKE', '%' . $user_email . '%')->first()->id;
            $controls = Control::where('patient_id', 'LIKE', '%' . $id . '%')->get();
        } else {
            $id = Doctor::where('email', 'LIKE', '%' . $user_email . '%')->first()->id;
            $controls = Control::where('doctor_id', 'LIKE', '%' . $id . '%')->get();
        };

        return view('/controls', ['controls' => $controls]);
        }   
        else return view ('login');     
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $user_email = $user->email;
        if (Auth::user()->role == 1) {
            $id = Patient::where('email', 'LIKE', '%' . $user_email . '%')->first()->id;
            $patients = Patient::where('id', 'LIKE', '%' . $id . '%')->get();
            $doctor_id = Patient::where('id', 'LIKE', '%' . $id . '%')->first()->doctor_id;
            $doctors = Doctor::where('id', 'LIKE', '%' . $doctor_id . '%')->get();
        } else {
            $id = Doctor::where('email', 'LIKE', '%' . $user_email . '%')->first()->id;
            $patients = Patient::where('doctor_id', 'LIKE', '%' . $id . '%')->get();
            $doctors = Doctor::where('id', 'LIKE', '%' . $id . '%')->get();
        }

        return view('addcontrol', ['patients' => $patients, 'doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Control::create($request->only(
            'name',
            'description',
            'patient_id',
            'doctor_id',
        ));
        return redirect('/addcontrol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Control;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ControlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {

            $user = Auth::user();
            $user_email = $user->email;
            if (Auth::user()->role == 1) {
                $id = Patient::where('email', 'LIKE', $user_email)->first()->id;
                $controls = Control::where('patient_id', 'LIKE', $id)->whereDate('control_date', '<=', Carbon::now())->sortable()->paginate(255);
                $newcontrols = Control::where('patient_id', 'LIKE', $id)->whereDate('control_date', '>', Carbon::now())->sortable()->paginate(255);
            } else {
                $id = Doctor::where('email', 'LIKE', $user_email)->first()->id;
                $controls = Control::where('doctor_id', 'LIKE', $id)->whereDate('control_date', '<=', Carbon::now())->sortable()->paginate(255);
                $newcontrols = Control::where('doctor_id', 'LIKE', $id)->whereDate('control_date', '>', Carbon::now())->sortable()->paginate(255);
            };
            return view('controls', compact(['controls', 'newcontrols']));
        } else return view('login');
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
            $id = Patient::where('email', 'LIKE', $user_email)->first()->id;
            $patients = Patient::where('id', 'LIKE',  $id)->get();
            $doctor_id = Patient::where('id', 'LIKE',  $id)->first()->doctor_id;
            $doctors = Doctor::where('id', 'LIKE',  $doctor_id)->get();
        } else {
            $id = Doctor::where('email', 'LIKE',  $user_email)->first()->id;
            $patients = Patient::where('doctor_id', 'LIKE', $id)->get();
            $doctors = Doctor::where('id', 'LIKE', $id)->get();
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
            'control_date',
            'description',
            'status',
            'patient_id',
            'doctor_id',
        ));
        return redirect('addcontrol');
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
    public function edit($id, $patient_id)
    {        
        $patient = Patient::where('id', 'LIKE', $patient_id)->first();
        $control = Control::where('id', 'LIKE', $id)->first();
        return view('editcontrol', ['control' => $control, 'patient' => $patient]);
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
        $control = Control::find($id);
        $control->name = $request->name;
        $control->control_date = $request->control_date; 
        $control->description = $request->description;
        $control->status = $request->status;
        $control->save();
        return redirect('/');    }

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

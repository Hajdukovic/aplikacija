<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Control;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = DB::select('select * from locations');
        $doctors = Doctor::get();
        return view('addpatient', ['locations' => $locations, 'doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Patient::create($request->only(
            'name',
            'surname',
            'birth_date',
            'address',
            'location_id',
            'doctor_id',
            'gender',
            'email',
            'phone'
        ));
        return redirect('addpatient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $user_email = $user->email;
        $id = Doctor::where('email', 'LIKE', $user_email)->first()->id;
        $patients = Patient::where('doctor_id', 'LIKE', $id)->get();

        return view('patient', ['patients' => $patients]);
    }

    public function controlsshow(Request $request)
    {
        $patient_id = $request->patient_id;
        $start_date = $request->control_date1;
        $end_date = $request->control_date2;

        $patients = Patient::where('id', 'LIKE', $patient_id)->get();
        $controls = Control::where('patient_id', 'LIKE',  $patient_id)->whereBetween('created_at', [$start_date, $end_date])->get();

        return view('controlsshow', ['patients' => $patients, 'controls' => $controls]);
    }

    public function patientsshow()
    {
        $patients = Patient::get();
        return view('patientsshow', ['patients' => $patients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::get();
        $locations = Location::get();
        $patient = Patient::where('id', 'LIKE', $id)->first();
        return view('patientedit', [
            'patient' => $patient,
            'doctors' => $doctors,
            'locations' => $locations
        ]);
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
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->birth_date = $request->birth_date;
        $patient->address = $request->address;
        $patient->location_id = $request->location_id;
        $patient->doctor_id = $request->doctor_id;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->save();
        return redirect('/');
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

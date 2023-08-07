<?php

namespace App\Http\Controllers;

use App\Training;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TrainingUserController extends Controller
{

    public function index()
    {
        $trainings = Training::all();

        return view('traininguser.index', compact('trainings'));
    }


    public function create(Request $request)
    {
        if($request->all()){
            $nipnik = $request->nip_nik;
        }else{
            $nipnik = Auth::user()->nip_nik;
        }

        $biodatapegawai = User::find($nipnik);

        return view('traininguser.create', compact('nipnik', 'biodatapegawai'));;
    }



    public function store(Request $request)
    {
        // dd($request->all());

        $extension = $request->certificate_file->extension();
        if ($extension == "pdf"){

        $fileName = $request->certificate_file->getClientOriginalName();
        $trainings= Training::create([
            'training_id' => $request->training_id,
            'nip_nik' => $request->nip_nik,
            'training_name' => $request->training_name,
            'type_of_training' => $request->type_of_training,
            'place' => $request->place,
            'hour' => $request->hour,
            'year' => $request->year,
            'certificate_file' => $request->certificate_file->storeAs('certificate_file', $fileName,'public'),

        ]);
        return redirect('/profildiri')->with(['success' => 'Data Berhasil Disimpan']);
    }
    else{
        echo "<script>alert('ekstensi file salah')</script>";
        $biodatapegawai = User::pluck('real_name','nip_nik');
        return view('traininguser.create', compact('biodatapegawai'));;
    }

    }

    public function show($training_id)
    {
        $trainings = Training::find($training_id);
        return view('traininguser.show', compact('trainings'));
    }


    public function edit($id)
    {
        $trainings = Training::find($id);
        $biodatapegawai = User::find($trainings->nip_nik);
        $nip_nik = $biodatapegawai->nip_nik;
        return view('traininguser.edit', compact('trainings','biodatapegawai','nip_nik'));
    }

    public function update(Request $request, $id)
    {
        $extension = $request->certificate_file->extension();
        if ($extension == "pdf"){
        $trainings = Training::find($id);
        $trainings->update([
        // 'training_id' => $request->training_id,
        'nip_nik' => $request->nip_nik,
        'training_name' => $request->training_name,
        'type_of_training' => $request->type_of_training,
        'place' => $request->place,
        'hour' => $request->hour,
        'year' => $request->year,
        'certificate_file' => $request->certificate_file,
        ]);
    }else{
        echo "<script>alert('ekstensi file salah')</script>";
        $trainings = Training::find($id);
        $biodatapegawai = User::find($trainings->nip_nik);
        $nip_nik = $biodatapegawai->nip_nik;
        return view('traininguser.edit', compact('trainings','biodatapegawai','nip_nik'));
    }



        return redirect()->route('profildiri.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id)
    {
        $trainings = training::find($id);
        $trainings->delete();

        return redirect()->route('profildiri.index')->with(['error' => 'Data berhasil dihapus']);
    }
}

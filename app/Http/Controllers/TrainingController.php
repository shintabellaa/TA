<?php

namespace App\Http\Controllers;

use App\Training;
use App\User;
use Illuminate\Http\Request;


class TrainingController extends Controller
{

    public function index()
    {
        $trainings = Training::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('training.index', compact('trainings'));
    }


    public function create()
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        return view('training.create', compact('biodatapegawai'));;
    }



    public function store(Request $request)
    {
        // dd($request->all());
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
        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function show($training_id)
    {
        $trainings = Training::find($training_id);
        return view('training.show', compact('trainings'));
    }


    public function edit($id)
    {
        $trainings = Training::find($id);
        $biodatapegawai = User::pluck('real_name','nip_nik');
        return view('training.edit', compact('trainings','biodatapegawai'));
    }

    public function update( Request $request, $id)
    {
        $trainings = Training::find($id);
        $trainings->update([

        'nip_nik' => $request->nip_nik,
        'training_name' => $request->training_name,
        'type_of_training' => $request->type_of_training,
        'place' => $request->place,
        'hour' => $request->hour,
        'year' => $request->year,
        'certificate_file' => $request->certificate_file,
        ]);


        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }

    public function destroy($id)
    {
        $trainings = training::find($id);
        $trainings->delete();

        return redirect()->back();
    }
}

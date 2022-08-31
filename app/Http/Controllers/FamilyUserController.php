<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Family;
use App\User;
use App\Education;



class FamilyUserController extends Controller
{

    public function index(){
        $biodatakeluarga = Family::get();
        // $regencies = Regency::all();
        return view ('biodatakeluargauser._form', compact('biodatakeluarga'));
    }

    public function create()
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $biodatakeluarga = Family::all();
        $education = Education::pluck('level','education_id');
        return view('biodatakeluargauser.create', compact('biodatapegawai','biodatakeluarga','education'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

      
        Family::create([
            'id_number' => $request->id_number,
            'nip_nik' => $request->nip_nik,
            'name' => $request->name,
            'relationship'=>$request->relationship,
            'phone_number'=>$request->phone_number,
            'birth_date'=>$request->birth_date,
            'birth_place'=>$request->birth_place,
            'occupation'=>$request->occupation,
            'last_education'=>$request->last_education,
            'npwp_no'=>$request->npwp_no,


        ]);

        return redirect('/profildiri');
    }


    public function show($id_number)
    {
        $biodatakeluarga = Family::find($id_number);

        return view('biodatakeluargauser.show', compact('biodatakeluarga'));
    }


    public function edit($id_number)
    {
        $biodatakeluarga = Family::find($id_number);
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $education = Education::pluck('level','education_id');
        return view('biodatakeluargauser.edit', compact('education','biodatapegawai','biodatakeluarga'));
    }


    public function update(Request $request, $id)
    {
        $biodatakeluarga = Family::find($id);
        $biodatakeluarga->update([
            'id_number' => $request->id_number,
            'nip_nik' => $request->nip_nik,
            'name' => $request->name,
            'relationship'=>$request->relationship,
            'phone_number'=>$request->phone_number,
            'birth_date'=>$request->birth_date,
            'birth_place'=>$request->birth_place,
            'occupation'=>$request->occupation,
            'last_education'=>$request->last_education,
            'npwp_no'=>$request->npwp_no,
        ]);

        return redirect()->route('profildiri.index');
    }

    public function destroy($id)
    {
        $biodatakeluarga = Family::find($id);
        $biodatakeluarga->delete();

        return redirect()->route('profildiri.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Family_Details;
use Illuminate\Http\Request;
use App\District;
use App\Family;
use App\User;


class FamilyController extends Controller
{

    public function index(){
        $biodatakeluarga = User::get();
        // $regencies = Regency::all();
        return view ('biodatakeluarga.index', compact('biodatakeluarga'));
    }

    public function create()
    {
        return view('biodatakeluarga.create');
    }


    public function store(Request $request)
    {
        Family::create([
            'id_number' => $request->no_id,
            'nip/nik' => $request->nip/nik,
            'name' => $request->nama,
            'relationship'=>$request->hubungan,
            'phone_no'=>$request->nohp,
            'birth_date'=>$request->tanggallahir,
            'birth_place'=>$request->tempatlahir,
            'status'=>$request->status,
            'occupation'=>$request->pekerjaan,
            'last_education'=>$request->pendidikanterakhir,
            'npwp_no'=>$request->npwp,


        ]);
        return redirect()->route('biodatakeluarga.index');
    }


    public function show(Functional $functional)
    {
        //
    }


    public function edit(Functional $functional)
    {
        $biodatakeluarga = Family::find($id);
        return view('biodatakeluarga.edit', compact('biodatakeluarga'));
    }


    public function update(Request $request, Functional $functional)
    {
        $biodatakeluarga = Family::find($id);
        $biodatakeluarga->update([
            'id_number' => $request->no_id,
            'nip/nik' => $request->nip/nik,
            'name' => $request->nama,
            'relationship'=>$request->hubungan,
            'phone_no'=>$request->nohp,
            'birth_date'=>$request->tanggallahir,
            'birth_place'=>$request->tempatlahir,
            'status'=>$request->status,
            'occupation'=>$request->pekerjaan,
            'last_education'=>$request->pendidikanterakhir,
            'npwp_no'=>$request->npwp,
        ]);

        return redirect()->route('biodatakeluarga.index');
    }

    public function destroy(Functional $functional)
    {
        $biodatakeluarga = Family::find($id);
        $biodatakeluarga->delete();

        return redirect()->route('biodatakeluarga.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Functional_Details;
use App\Functional;
use App\User;
use Illuminate\Http\Request;

class FunctionalDetailsController extends Controller
{
    public function index()
    {
        $fungsionaldetail = Functional_Details::all();
        return view('fungsionaldetail.index', compact('fungsionaldetail'));
    }


    public function create(Request $request)
    {
       $nipnik = $request->nip_nik;
       $biodatapegawai = User::pluck('real_name','nip_nik');
       $fungsionaldetail = Functional_Details::pluck('functional_id');
       $fungsional = Functional::pluck('information','functional_id');
        return view('fungsionaldetail.create', compact('nipnik','biodatapegawai','fungsional','fungsionaldetail'));
    }


    public function store(Request $request)
    {

        // dd( $request->sk_file->getClientOriginalName());
        // dd($request->all());

        $fileNamee = $request->sk_file->getClientOriginalName();
        $fungsionaldetail= Functional_Details::create([
            'functional_id'=>$request->input('functional_id'),
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            'sk_file' => $request->sk_file->storeAs('sk_file', $fileNamee,'public'),

        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }


    public function show($functional_id)
    {
        $fungsionaldetail = Functional_Details::find($functional_id);
        return view('fungsionaldetail.show', compact('fungsionaldetail'));
    }


    public function edit($functional_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $fungsionaldetail = Functional_Details::find($functional_id);
        $fungsional = Functional::pluck('information','functional_id');
         return view('fungsionaldetail.edit', compact('biodatapegawai','fungsional','fungsionaldetail'));
    }


    public function update(Request $request, $functional_id)
    {
        $fileName = $request->sk_file->getClientOriginalName();
        $fungsionaldetail = Functional_Details::find($functional_id);
        $fungsionaldetail->update([
            'functional_id'=>$request->functional_id,
            'nip_nik'=>$request->nip_nik,
            'tmt'=>$request->tmt,
            'sign_by'=>$request->sign_by,
            'sk_no'=>$request->sk_no,
            'sk_date'=>$request->sk_date,
            'status'=>$request->status,
            'sk_file' => $request->sk_file->storeAs('sk_file_fungsional', $fileName,'public'),

        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }


    public function destroy($id)
    {
        $fungsionaldetail = Functional_Details::find($id);
        $fungsionaldetail->delete();

        return redirect()->back();
    }


}


<?php

namespace App\Http\Controllers;

use App\Functional_Details;
use App\Functional;
use App\User;
use Illuminate\Http\Request;

class FunctionalUserController extends Controller
{
    public function index()
    {
        $fungsionaldetails = Functional_Details::all();
        return view('fungsionaluser.index', compact('fungsionaldetails'));
    }


    public function create(Request $request)
    {

       $biodatapegawai = User::pluck('real_name','nip_nik');
       $fungsionaldetails = Functional_Details::pluck('functional_id');
       $fungsional = Functional::pluck('information','functional_id');
        return view('fungsionaluser.create', compact('biodatapegawai','fungsional','fungsionaldetails'));
    }


    public function store(Request $request)
    {

        // dd( $request->sk_file->getClientOriginalName());
        // dd($request->all());

        $fileNamee = $request->sk_file->getClientOriginalName();
        $fungsionaldetails= Functional_Details::create([
            'functional_id'=>$request->input('functional_id'),
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            'sk_file' => $request->sk_file->storeAs('sk_file', $fileNamee,'public'),

        ]);
        return redirect('/profildiri');
    }


    public function show($functional_id)
    {
        $fungsionaldetails= Functional_Details::find($functional_id);
        return view('biodatapribadi.show', compact('fungsionaldetails'));
    }


    public function edit($functional_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $fungsionaldetails= Functional_Details::find('functional_id');
        $fungsional = Functional::pluck('information','functional_id');
         return view('fungsionaluser.edit', compact('biodatapegawai','fungsional','fungsionaldetails'));
    }


    public function update(Request $request, $functional_id)
    {
        $fileName = $request->sk_file->getClientOriginalName();
        $fungsionaldetails = Functional_Details::find($functional_id);
        $fungsionaldetails->update([
            'functional_id'=>$request->functional_id,
            'nip_nik'=>$request->nip_nik,
            'tmt'=>$request->tmt,
            'sign_by'=>$request->sign_by,
            'sk_no'=>$request->sk_no,
            'sk_date'=>$request->sk_date,
            'status'=>$request->status,
            'sk_file' => $request->sk_file->storeAs('sk_file', $fileName,'public'),

        ]);

        return redirect()->route('fungsionaluser.index');
    }


    public function destroy($id)
    {
        $fungsionaldetails = Functional::find($id);
        $fungsionaldetails->delete();

        return redirect()->route('profildiri.index');
    }


}


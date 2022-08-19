<?php

namespace App\Http\Controllers;

use App\Structural_Details;
use App\Structural;
use App\User;
use Illuminate\Http\Request;

class StructuralUserController extends Controller
{
    public function index()
    {
        $strukturaldetails = Structural_Details::all();
        return view('strukturaluser.index', compact('strukturaldetails'));

    }

    public function create(Request $request)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $struktural = Structural::pluck('information','structural_id');
        return view('strukturaluser.create', compact('biodatapegawai', 'struktural'));

    }



    public function store(Request $request)
    {
        $fileName = $request->file('sk_file')->getClientOriginalName();
        $strukturaldetails= Structural_Details::create([
            'structural_id'=>$request->input('structural_id'),
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            // 'sk_file'=>$request->input('sk_file'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file', $fileName,'public'),
        ]);
        return redirect('/profildiri');
    }


    public function show($id)
    {
        $strukturaldetails = Structural_Details::find($id);
        return view('strukturaluser.show', compact('strukturaldetails'));
    }


    public function edit($structural_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $strukturaldetails = Structural::find($structural_id);
        // $strukturaldetails = Structural_Details::pluck('nip_nik','tmt','sign_by','sk_no','sk_date','status','sk_file','structural_id');
        $struktural = Structural::pluck('information','structural_id');

        return view('strukturaluser.edit', compact('strukturaldetails', 'biodatapegawai', 'struktural'));

    }


    public function update(Request $request, $structural_id)
    {
        $strukturaldetails = Structural_Details::find($structural_id);
        $strukturaldetails->update([
            // 'structural_id'=>$request->structural_id,
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            'sk_file'=>$request->input('sk_file'),
        ]);
        return redirect()->route('strukturaluser.index');
    }

    public function destroy($id)
    {
        $strukturaldetails = Structural::find($id);
        $strukturaldetails->delete();
        return redirect()->route('profildiri.index');
    }

}

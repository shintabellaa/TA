<?php

namespace App\Http\Controllers;

use App\Structural_Details;
use App\Structural;
use App\User;
use Illuminate\Http\Request;

class StructuralDetailsController extends Controller
{
    public function index()
    {
        $strukturaldetail = Structural_Details::all();
        return view('strukturaldetail.index', compact('strukturaldetail'));

    }

    public function create(Request $request)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $struktural = Structural::pluck('information','structural_id');
        return view('strukturaldetail.create', compact('biodatapegawai', 'struktural'));

    }



    public function store(Request $request)
    {
        $fileName = $request->file('sk_file')->getClientOriginalName();
        $strukturaldetail= Structural_Details::create([
            'structural_id'=>$request->input('structural_id'),
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            // 'sk_file'=>$request->input('sk_file'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file_struktural', $fileName,'public'),
        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }


    public function show($id)
    {
        $strukturaldetail = Structural_Details::find($id);

        return view('strukturaldetail.show', compact('strukturaldetail'));
    }


    public function edit($structural_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $struktural = Structural::pluck('information','structural_id');
        $strukturaldetail = Structural_Details::find($structural_id);
        return view('strukturaldetail.edit', compact('biodatapegawai','strukturaldetail','struktural'));
    }


    public function update(Request $request, $structural_id)
    {
        $fileName = $request->file('sk_file')->getClientOriginalName();
        $strukturaldetail = Structural_Details::find($structural_id);
        $strukturaldetail->update([
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            // 'sk_file'=>$request->input('sk_file'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file_struktural', $fileName,'public'),
        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }

    public function destroy($id)
    {
        $strukturaldetail = Structural_Details::find($id);
        $strukturaldetail->delete();
        return redirect()->back();
    }
}

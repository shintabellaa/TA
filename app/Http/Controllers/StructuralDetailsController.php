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
        $nipnik = $request->nip_nik;
        $biodatapegawai = User::find($nipnik);
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
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')])->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function show($id)
    {
        $strukturaldetail = Structural_Details::find($id);

        return view('strukturaldetail.show', compact('strukturaldetail'));
    }


    public function edit($structural_id)
    {
        $structuraldetail = Structural_Details::join('structurals', 'structural_details.structural_id', '=', 'structurals.structural_id')
        ->select('structural_details.*', 'structurals.*')->where('structural_details.structural_id', '=', $structural_id)->first();
        $biodatapegawai = User::find($structuraldetail->nip_nik);
        $strukturaldetail = Structural_Details::find($structural_id);
        $struktural = Structural::pluck('information','structural_id');
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
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')])->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id)
    {
        $strukturaldetail = Structural_Details::find($id);
        $strukturaldetail->delete();
        return redirect()->back()->with(['error' => 'Data Berhasil Dihapus']);
    }
}

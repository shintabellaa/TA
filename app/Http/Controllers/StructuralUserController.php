<?php

namespace App\Http\Controllers;

use App\Structural_Details;
use App\Structural;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StructuralUserController extends Controller
{

    public function index()
    {
        $strukturaldetails = Structural_Details::all();
        return view('strukturaluser.index', compact('strukturaldetails'));
    }

    public function create(Request $request)
    {
        if($request->all()){
            $nipnik = $request->nip_nik;
        }else{
            $nipnik = Auth::user()->nip_nik;
        }

        $biodatapegawai = User::find($nipnik);
        $struktural = Structural::pluck('information','structural_id');
        return view('strukturaluser.create', compact('biodatapegawai', 'struktural'));
    }

    public function store(Request $request)
    {
        $check = Structural_Details::where('structural_id', '=', $request->input('structural_id'))->where( 'nip_nik', '=', $request->input('nip_nik'))->first();
        // dd( $request->sk_file->getClientOriginalName());
        // dd($request->all());
        if($check){
            return redirect()->back()->with(['warning' => 'Data Sudah Ada']);
        }else{

        $extension = $request->sk_file->extension();
        if ($extension == "pdf"){

        $fileName = $request->file('sk_file')->getClientOriginalName();
        $strukturaldetails= Structural_Details::create([
            'structural_id'=>$request->input('structural_id'),
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file_struktural', $fileName,'public'),
        ]);
        return redirect('/profildiri')->with(['success' => 'Data Berhasil Disimpan']);
    }
    else{
        echo "<script>alert('ekstensi file salah')</script>";
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $struktural = Structural::pluck('information','structural_id');
        return view('strukturaluser.create', compact('biodatapegawai', 'struktural'));
    }

    }
    }

    public function show($id)
    {
        $strukturaldetails = Structural_Details::find($id);
        return view('strukturaluser.show', compact('strukturaldetails'));
    }




    public function edit($structural_id)
    {
        $strukturaldetails = Structural_Details::join('structurals', 'structural_details.structural_id', '=', 'structurals.structural_id')
        ->select('structural_details.*', 'structurals.*')->where('structural_details.structural_id', '=', $structural_id)->first();
        $biodatapegawai = User::find($strukturaldetails->nip_nik);
        $struktural = Structural::pluck('information','structural_id');
        $nip_nik = $biodatapegawai->nip_nik;

        return view('strukturaluser.edit', compact('strukturaldetails','biodatapegawai','nip_nik', 'struktural'));
    }

    public function update(Request $request, $structural_id)
    {
        $extension = $request->sk_file->extension();
        if ($extension == "pdf"){
        $fileName = $request->file('sk_file')->getClientOriginalName();
        $strukturaldetails = Structural_Details::find($structural_id);
        $strukturaldetails->update([
            'nip_nik'=>$request->input('nip_nik'),
            'tmt'=>$request->input('tmt'),
            'sign_by'=>$request->input('sign_by'),
            'sk_no'=>$request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'status'=>$request->input('status'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file', $fileName,'public'),
        ]);
        }else{
            echo "<script>alert('ekstensi file salah')</script>";
            $strukturaldetails = Structural_Details::join('structurals', 'structural_details.structural_id', '=', 'structurals.structural_id')
            ->select('structural_details.*', 'structurals.*')->where('structural_details.structural_id', '=', $structural_id)->first();
            $biodatapegawai = User::find($strukturaldetails->nip_nik);
            $struktural = Structural::pluck('information','structural_id');
            $nip_nik = $biodatapegawai->nip_nik;

            return view('strukturaluser.edit', compact('strukturaldetails','biodatapegawai','nip_nik', 'struktural'));
        }
        return redirect('/profildiri')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id)
    {
        $strukturaldetails = Structural_Details::find($id);
        $strukturaldetails->delete();
        return redirect()->route('profildiri.index')->with(['error' => 'Data Berhasil Dihapus']);
    }

}

<?php

namespace App\Http\Controllers;

use App\Functional;
use App\Functional_Details;
use Illuminate\Http\Request;


class FunctionalController extends Controller
{

    public function index()
    {
         //load data
         $fungsional = Functional::all();
         //buka halaman dan kirim data, kirim data = compact
         return view('fungsional.index', compact('fungsional'));
    }

    public function create()
    {
        return view('fungsional.create');
    } 

    // public function store(Request $request)
    // {
    //     Functional::create([
    //         'information' => $request->information,
    //     ]);
    //     return redirect()->route('fungsional.index');
    // }


    public function store(Request $request){

        $fungsional = Functional::create([
            'functional_id'=> $request->input('functional_id'),
            'information'=> $request->input('information'),
        ]);
        // dd($fungsional());
        // $file = $request->file('foto');
        // $file->move($tujuan_upload,$file->getClientOriginalName());
        // dd($fungsionaldetail);



        return redirect()->route('fungsional.index');
    }


    public function show($functional_id)
    {
        $fungsional = Functional::find($functional_id);
        return view('fungsional.show', compact('fungsional'));
    }


    public function edit( $functional_id)
    {
        $fungsional = Functional::find($functional_id);
        $fungsionaldetail = Functional_Details::pluck('nip_nik','tmt','sign_by','sk_no','sk_date','status','sk_file','functional_id');

        return view('fungsional.edit', compact('fungsional','fungsionaldetail'));
    }


    public function update(Request $request, $id)
    {
        $fungsional = Functional::find($id);
        $fungsional->update([

            'nip_nik'=> $request->nip_nik,

            'information' => $request->information,
            'tmt' => $request->tmt,
            'sign_by'=> $request->sign_by,
            'sk_no' => $request->sk_no,
            'sk_date'=> $request->sk_date,
            'status' => $request->status,
            'sk_file' => $request->sk_file,

        ]);

        return redirect()->route('fungsional.index');
    }

    public function destroy( $functional_id)
    {
        $fungsional = Functional::find($functional_id);
        $fungsional->delete();

        return redirect()->route('fungsional.index');
    }

}

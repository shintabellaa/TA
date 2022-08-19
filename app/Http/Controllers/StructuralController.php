<?php

namespace App\Http\Controllers;

use App\Structural_Details;
use App\Structural;
use Illuminate\Http\Request;


class StructuralController extends Controller
{
    public function index()
    {
        // //load data
        $struktural = Structural::all();

        // //buka halaman dan kirim data, kirim data = compact
        return view('struktural.index', compact('struktural'));

    }

    public function create()
    {
        return view('struktural.create');
    }

    public function store(Request $request)
    {
        $struktural = structural::create([

            'structural_id'=> $request->input('structural_id'),
            'information'=> $request->input('information'),
        ]);
        // dd($fungsional());

        // $file = $request->file('foto');
        // $file->move($tujuan_upload,$file->getClientOriginalName());
        // $strukturaldetail= Structural_Details::create([
        //     'structural_id'=>$request->structural_id,
        //     'nip_nik'=>$request->input('nip_nik'),
        //     'tmt'=>$request->input('tmt'),
        //     'sign_by'=>$request->input('sign_by'),
        //     'sk_no'=>$request->input('sk_no'),
        //     'sk_date'=>$request->input('sk_date'),
        //     'status'=>$request->input('status'),
        //     'sk_file'=>$request->input('sk_file'),
        //     // 'foto'=>$file->getClientOriginalName(),


        // ]);

        // // dd($request->all());
        // Structural::create([
        //     'structural_id' => $request->structural_id,
        //     'name' => $request->name,
        //     'entry_date' => $request->entry_date
        // ]);
        return redirect()->route('struktural.index');
    }

    public function show($structural_id)
    {
        $struktural = Structural::find($structural_id);
        return view('struktural.show', compact('struktural'));
    }

    public function edit($structural_id)
    {
        $struktural = Structural::find($structural_id);
        $strukturaldetail = Structural_Details::pluck('nip_nik','tmt','sign_by','sk_no','sk_date','status','sk_file','structural_id');
        return view('struktural.edit', compact('struktural', 'strukturaldetail'));

    }




    public function update(Request $request, $id)
    {
        $struktural = Structural::find($id);
        $struktural->update([
            'information'=> $request->input('information'),

        ]);
        return redirect()->route('struktural.index');
    }

    public function destroy($structural_id)
    {
        $struktural = Structural::find($structural_id);
        $struktural->delete();

        return redirect()->route('struktural.index');
    }

}

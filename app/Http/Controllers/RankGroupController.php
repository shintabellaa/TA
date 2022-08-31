<?php

namespace App\Http\Controllers;

use App\Rank_Group;
use Illuminate\Http\Request;
use App\User;

class RankGroupController extends Controller
{

    public function index()
    {
        $pangkatgolongan = Rank_Group::all();
        return view ('pangkatgolongan.index', compact('pangkatgolongan'));

    }


    public function create()
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $pangkatgolongan = Rank_Group::all();
        return view('pangkatgolongan.create', compact('biodatapegawai','pangkatgolongan'));

    }

    public function store(Request $request)
    {
        // $fileName = $request->file('sk_file')->getClientOriginalName();
        $pangkatgolongan = Rank_Group::create([
            'nip_nik' =>$request->input('nip_nik'),
            'name'=>$request->input('name'),
            'tmt' => $request->input('tmt'),
            'sk_no' => $request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'sign_by'=>$request->input('sign_by'),
            'status'=>$request->input('status'),
            'sk_file' => $request->input('sk_file'),
            // 'sk_file' => $request->file('sk_file')->storeAs('sk_file', $fileName,'public'),
        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }


    public function show($rank_group_id)
    {
        $pangkatgolongan = Rank_Group::find($rank_group_id);
        return view('pangkatgolongan.show', compact('pangkatgolongan'));
    }


    public function edit($rank_group_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $pangkatgolongan = Rank_Group::find($rank_group_id);
        return view('pangkatgolongan.edit', compact('pangkatgolongan','biodatapegawai'));
    }


    public function update(Request $request,$rank_group_id)
    {
        // dd($request->all());
        $fileName = $request->file('sk_file')->getClientOriginalName();
        $pangkatgolongan = Rank_Group::find($rank_group_id);
        $pangkatgolongan->update([
            'nip_nik' =>$request->input('nip_nik'),
            'name'=>$request->input('name'),
            'tmt' => $request->input('tmt'),
            'sk_no' => $request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'sign_by'=>$request->input('sign_by'),
            'status'=>$request->input('status'),
            // 'sk_file'=>$request->input('sk_file'),
            'sk_file' => $request->file('sk_file')->storeAs('sk_file_rankgroup', $fileName,'public'),
        ]);
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]);
    }

    public function destroy($id)
    {
        $pangkatgolongan = Rank_Group::find($id);
        $pangkatgolongan->delete();

        return redirect()->back();
    }
}

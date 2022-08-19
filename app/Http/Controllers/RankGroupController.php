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
        return view ('pangkatgolongan.create');
    }

    public function store(Request $request)
    {
        // $fileName = $request->sk_file->getClientOriginalName();
        $pangkatgolongan = Rank_Group::create([
            'nip_nik' =>$request->nip_nik,
            'name'=>$request->name,
            'tmt' => $request->tmt,
            'sk_no' => $request->sk_no,
            'sk_date'=>$request->sk_date,
            'sign_by'=>$request->sign_by,
            'status'=>$request->status,
            'sk_file' => $request->sk_file,
        ]);
        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function show($rank_group_id)
    {
        $pangkatgolongan = Rank_Group::find($rank_group_id);
        return view('pangkatgolongan.show', compact('pangkatgolongan'));
    }


    public function edit($id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $pangkatgolongan = Rank_Group::find($id);
        return view('pangkatgolongan.edit', compact('pangkatgolongan','biodatapegawai'));
    }


    public function update(Request $request,$id)
    {
        $pangkatgolongan = Rank_Group::find($id);
        $pangkatgolongan->update([
            // 'nip/nik' =>$request->nip_nik,
            'tmt' => $request->tmt,
            'sk_no' => $request->sk_no,
            'sk_date'=>$request->sk_date,
            'decided_by'=>$request->decided_by,
            'basic_rules'=>$request->basic_rules,
            'sk_file'=>$request->sk_file,

        ]);
        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }



    public function destroy($id)
    {
        $pangkatgolongan = Rank_Group::find($id);
        $pangkatgolongan->delete();

        return redirect()->back();
    }
}

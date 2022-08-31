<?php

namespace App\Http\Controllers;

use App\Rank_Group;
use Illuminate\Http\Request;
use App\User;

class RankGroupUserController extends Controller
{

    public function index()
    {
        $pangkatgolongan = Rank_Group::all();
        return view ('pangkatgolonganuser.index', compact('pangkatgolongan'));

    }


    public function create()
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $pangkatgolongan = Rank_Group::all();
        return view('pangkatgolonganuser.create', compact('biodatapegawai','pangkatgolongan'));
    }

    public function store(Request $request)
    {

        $extension = $request->sk_file->extension();
        if ($extension == "pdf"){

        $fileName = $request->file('sk_file')->getClientOriginalName();
        $pangkatgolongan = Rank_Group::create([
            'nip_nik' =>$request->nip_nik,
            'name'=>$request->name,
            'tmt' => $request->tmt,
            'sk_no' => $request->sk_no,
            'sk_date'=>$request->sk_date,
            'sign_by'=>$request->sign_by,
            'status'=>$request->status,
            'sk_file' => $request->file('sk_file')->storeAs('sk_file_rankgroup', $fileName,'public'),
        ]);
        return redirect('/profildiri');
    }
    else{
        echo "<script>alert('ekstensi file salah')</script>";
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $pangkatgolongan = Rank_Group::all();
        return view('pangkatgolonganuser.create', compact('biodatapegawai','pangkatgolongan'));
    }
    }


    public function show($id)
    {
        $pangkatgolongan = Rank_Group::find($id);
        return view('pangkatgolonganuser.show', compact('pangkatgolongan'));
    }


    public function edit($id)
    {
        $pangkatgolongan = Rank_Group::find($id);
        return view('pangkatgolonganuser.show', compact('pangkatgolongan'));
    }


    public function update(Request $request,$id)
    {
        $fileName = $request->certificate_file->getClientOriginalName();
        $pangkatgolongan = Rank_Group::find($id);
        $pangkatgolongan->update([
            // 'nip/nik' =>$request->nip_nik,
            'tmt' => $request->input('tmt'),
            // 'nip_nik'=>$request->input('nip_nik'),
            'sk_no' => $request->input('sk_no'),
            'sk_date'=>$request->input('sk_date'),
            'decided_by'=>$request->input('decided_by'),
            'basic_rules'=>$request->input('basic_rules'),
            // 'sk_file'=>$request->input('sk_file'),
            'sk_file' => $request->sk_file->storeAs('certificate_file', $fileName,'public'),

        ]);
        return redirect()->route('pangkatgolonganuser.index');
    }

    public function destroy($rank_group_id)
    {
        $pangkatgolongan = Rank_Group::find($rank_group_id);
        $pangkatgolongan->delete();

        return redirect()->route('profildiri.index');
    }
}

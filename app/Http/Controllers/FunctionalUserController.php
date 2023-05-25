<?php

namespace App\Http\Controllers;

use App\Functional_Details;
use App\Functional;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FunctionalUserController extends Controller
{
    public function index()
    {
        $fungsionaldetails = Functional_Details::all();
        return view('fungsionaluser.index', compact('fungsionaldetails'));
    }


    public function create(Request $request)
    {
        if($request->all()){
            $nipnik = $request->nip_nik;
        }else{
            $nipnik = Auth::user()->nip_nik;
        }
       $biodatapegawai = User::find($nipnik);
       $fungsionaldetail = Functional_Details::pluck('functional_id');
       $fungsional = Functional::pluck('information','functional_id');

        //   dd($biodatapegawai);
        return view('fungsionaluser.create', compact('nipnik','biodatapegawai','fungsional','fungsionaldetail'));
    }

    public function store(Request $request)
    {
        $check = Functional_Details::where('nip_nik', '=', $request->input('nip_nik'))->where('functional_id', '=', $request->input('functional_id'))->first();
        // dd( $request->sk_file->getClientOriginalName());
        // dd($check);
        if($check){
            return redirect()->back()->with(['warning' => 'Data Sudah Ada']);
        }else{
        $extension = $request->sk_file->extension();
        if ($extension == "pdf"){

            $fileNamee = $request->sk_file->getClientOriginalName();
            $fungsionaldetails= Functional_Details::create([
                'functional_id'=>$request->input('functional_id'),
                'nip_nik'=>$request->input('nip_nik'),
                'tmt'=>$request->input('tmt'),
                'sign_by'=>$request->input('sign_by'),
                'sk_no'=>$request->input('sk_no'),
                'sk_date'=>$request->input('sk_date'),
                'status'=>$request->input('status'),
                'sk_file' => $request->sk_file->storeAs('sk_file_fungsional', $fileNamee,'public'),
            ]);
            return redirect('/profildiri')->with(['success' => 'Data Berhasil Disimpan']);
        }
        else{
            echo "<script>alert('ekstensi file salah')</script>";
            $biodatapegawai = User::pluck('real_name','nip_nik');
            $fungsionaldetails = Functional_Details::pluck('functional_id');
            $fungsional = Functional::pluck('information','functional_id');
            return view('fungsionaluser.create', compact('biodatapegawai','fungsional','fungsionaldetails'));
        }
    }
    }

    public function show($functional_id)
    {
        $fungsionaldetails= Functional_Details::find($functional_id);
        return view('fungsionaluser.show', compact('fungsionaldetails'));
    }


    // public function edit($functional_id)
    // {
    //     $biodatapegawai = User::pluck('real_name','nip_nik');
    //     $fungsionaldetails= Functional_Details::find('functional_id');
    //     $fungsional = Functional::pluck('information','functional_id');
    //      return view('fungsionaluser.edit', compact('biodatapegawai','fungsional','fungsionaldetails'));
    // }


    public function edit($functional_id)
    {
        // $fungsionaldetails = Functional_Details::join('functionals', 'functional_details.functional_id', '=', 'functionals.functional_id')
        // ->select('functional_details.*', 'functionals.*')->where('functional_details.functional_id', '=', $functional_id)->first();

        $fungsionaldetail = Functional_Details::find($functional_id);
        $biodatapegawai = User::find($fungsionaldetail->nip_nik);
        $fungsional = Functional::pluck('information','functional_id');
        $nip_nik = $biodatapegawai->nip_nik;

        return view('fungsionaluser.edit', compact('fungsionaldetail','biodatapegawai','nip_nik', 'fungsional'));
    }



    public function update(Request $request, $functional_id)
    {
        $extension = $request->sk_file->extension();
        if ($extension == "pdf"){
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
    }else{
            echo "<script>alert('ekstensi file salah')</script>";
            $fungsionaldetail = Functional_Details::find($functional_id);
        $biodatapegawai = User::find($fungsionaldetail->nip_nik);
        $fungsional = Functional::pluck('information','functional_id');
        $nip_nik = $biodatapegawai->nip_nik;

        return view('fungsionaluser.edit', compact('fungsionaldetail','biodatapegawai','nip_nik', 'fungsional'));
    }

        return redirect()->route('profildiri.index')->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function destroy($id)
    {
        $fungsionaldetails = Functional_Details::find($id);
        $fungsionaldetails->delete();

        return redirect()->route('profildiri.index')->with(['error' => 'Data Berhasil Dihapus']);
    }


}


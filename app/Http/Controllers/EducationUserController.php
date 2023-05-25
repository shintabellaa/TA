<?php

namespace App\Http\Controllers;

use App\Education_Details;
use Illuminate\Http\Request;
use App\User;
use App\Education;
use Illuminate\Support\Facades\Auth;

class EducationUserController extends Controller
{

    public function index()
    {
        $educationdetail = Education_Details::all();
        return view('educationuser.index', compact('educationdetail'));
    }

    public function create(Request $request)
    {
        $nipnik = Auth::user()->nip_nik;
        $biodatapegawai = User::find($nipnik);
        $education = Education::pluck('level','education_id');
        $education_id = null;

        // dd($biodatapegawai);

        return view('educationuser.create', compact('nipnik','education','biodatapegawai', 'education_id'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $check = Education_Details::where('education_id', '=', $request->input('educationselect'))->where( 'nip_nik', '=', $request->input('nip_nik'))->first();
        // dd( $request->sk_file->getClientOriginalName());
        // dd($check);
        if($check){
            return redirect()->back()->with(['warning' => 'Data Sudah Ada']);
        }else{

        $extension = $request->certificate_file->extension();
        if ($extension == "pdf"){

        $fileName = $request->certificate_file->getClientOriginalName();
        $educationdetail= Education_Details::create([
            'education_details_id'=>$request->input('education_details_id'),
            'education_id'=>$request->input('educationselect'),
            'nip_nik'=>$request->input('nip_nik'),
            'name'=>$request->input('name'),
            'major'=>$request->input('major'),
            'graduation_year'=>$request->input('graduation_year'),
            'country'=>$request->input('country'),
            'dean_headmaster'=>$request->input('dean_headmaster'),
            'certificate_file' => $request->certificate_file->storeAs('certificate_file', $fileName,'public'),

        ]);
        return redirect('/profildiri')->with(['success' => 'Data Berhasil Disimpan']);
    }
    else{
        echo "<script>alert('ekstensi file salah')</script>";
        $nipnik = $request->nip_nik;
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $education = Education::pluck('level','education_id');

        return view('educationuser.create', compact('nipnik','education','biodatapegawai'));
    }
    }
    }
    public function show($id)
    {
        $educationdetail = Education_Details::find($id);
        $education = Education::pluck('level','education_id');
        return view('educationuser.show', compact('educationdetail',"education"));
    }

    public function edit($education_details_id)
    {
        $educationdetail = Education_Details::find($education_details_id);
        $biodatapegawai = User::find($educationdetail->nip_nik);
        $nip_nik = $biodatapegawai->nip_nik;
        $education = Education::pluck('level','education_id');
        $education_id = $educationdetail->education_id;
        return view('educationuser.edit', compact('educationdetail','biodatapegawai','nip_nik', 'education', 'education_id'));
    }


    public function update(Request $request,$id)
    {
        // dd($request->all());
        $extension = $request->certificate_file->extension();
        if ($extension == "pdf"){
        $fileName = $request->certificate_file->getClientOriginalName();
        $educationdetail = Education_Details::find($id);
        $educationdetail->update([
            'education_id'=>$request->input('educationselect'),
            // 'nip_nik'=>$request->input('nip_nik'),
            'name'=>$request->input('name'),
            'major'=>$request->input('major'),
            'graduation_year'=>$request->input('graduation_year'),
            'country'=>$request->input('country'),
            'dean_headmaster'=>$request->input('dean_headmaster'),
            'certificate_file' => $request->certificate_file->storeAs('certificate_file', $fileName,'public'),
        ]);
        }else{
            echo "<script>alert('ekstensi file salah')</script>";
            $educationdetail = Education_Details::find($id);
            $biodatapegawai = User::find($educationdetail->nip_nik);
            $nip_nik = $biodatapegawai->nip_nik;
            $education = Education::pluck('level','education_id');
            $education_id = $educationdetail->education_id;

            return view('educationuser.edit', compact('educationdetail','biodatapegawai','nip_nik', 'education', 'education_id'));
        }

        // return redirect()->route('biodatapegawai.index',['nip_nik']);
        return redirect()->route('profildiri.index')->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function destroy($id)
    {

        $educationdetail = Education_Details::find($id);
        $educationdetail->delete();

        return redirect()->route('profildiri.index')->with(['error' => 'Data Berhasil Dihapus']);
    }
}

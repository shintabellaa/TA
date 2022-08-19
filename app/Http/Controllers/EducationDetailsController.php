<?php

namespace App\Http\Controllers;

use App\Education_Details;
use Illuminate\Http\Request;
use App\User;
use App\Education;

class EducationDetailsController extends Controller
{

    public function index()
    {
        $educationdetail = Education_Details::all();
        return view('educationdetail.index', compact('educationdetail'));
    }


    public function create(Request $request)
    {
        $nipnik = $request->nip_nik;
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $education = Education::pluck('level','education_id');

        return view('educationdetail.create', compact('nipnik','education','biodatapegawai'));

    }


    public function store(Request $request)
    {
        // dd($request->all());
        // dd( $request->sk_file->getClientOriginalName());
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
        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function show($id)
    {
        $educationdetail = Education_Details::find($id);

        return view('educationdetail.show', compact('educationdetail'));
    }


    public function edit($education_details_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $educationdetail = Education_Details::find($education_details_id);
        $education = Education::pluck('level','education_id');

        return view('educationdetail.edit', compact('educationdetail','biodatapegawai','education'));
    }


    public function update(Request $request,$id)
    {
        // dd($request->all());
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

        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function destroy($id)
    {

        $educationdetail = Education_Details::find($id);
        $educationdetail->delete();

        return redirect()->back();
    }
}

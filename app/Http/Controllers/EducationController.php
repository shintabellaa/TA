<?php

namespace App\Http\Controllers;

use App\Education;
use App\Education_Details;
use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;


class EducationController extends Controller
{

    public function index()
    {
        // $education = Education::all();

        $url = "http://localhost/ta/public/api/education?api-key=xddHIyF6x21VyfTO4pwaP3ArUqFiGfoQRrDE64hv";
        $url_encode = urlencode($url);


        try {
            $client = new Client();
            // dd("Hello 1");
            $res = $client->request('GET',$url);

            // dd("Hello 3");
            $json = $res->getBody();
            $education = json_decode($json, true);

            $education = collect($education)->map(function ($s){
                return (object) $s;
            });
            // dd($struktural);

        }catch(Exception $e){
            dd($e->getMessage());
        }

        return view('education.index', compact('education'));
    }


    public function create()
    {

        $biodatapegawai = User::pluck('real_name','nip_nik');
        return view('education.create', compact('biodatapegawai'));;
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $education= Education::create([
            'education_id' => $request->input('education_id'),
            'level' => $request->input ('level'),
        ]);


        // $educationdetail= Education_Details::create([
        //     'education_details_id' => $request->input('education_details_id'),
        //     'education_id' => $request->input('education_id'),
        //     'nip_nik' => $request->input('nip_nik'),
        //     'name' => $request->input('name'),
        //     'major' => $request->input('major'),
        //     'graduation_year' => $request->input('graduation_year'),
        //     'country' => $request->input('country'),
        //     'dean_headmaster' => $request->input('dean_headmaster'),
        // ]);
        // dd($educationdetail);
        return redirect()->route("education.index")->with(['success' => 'Data Berhasil Disimpan']);


    }


    public function show($education_id)
    {
        $education = Education::find($education_id);
        return view('education.show', compact('education'));
    }


    public function edit($education_id)
    {
        $education = Education::find($education_id);
        // $educationdetail = Education_Details::pluck('education_details_id','nip_nik','name','major','graduation_year','country','dean_headmaster','certificate_file');

        return view('education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $education = Education::find($id);
        $education->update([
            'level' => $request->input('level'),
        ]);
        return redirect()->route('education.index') ->with(['success' => 'Data Berhasil Disimpan']);
    }


    // public function update(Request $request, $id)
    // {
    //     $fileName = $request->certificate_file->getClientOriginalName();
    //     $education = Education::find($id);
    //     $education->update([

    //         'education_id' => $request->input('education_id'),
    //         'nip_nik' => $request->input('nip_nik'),
    //         'name' => $request->input('name'),
    //         'major' => $request->input('major'),
    //         'graduation_year' => $request->input('graduation_year'),
    //         'country' => $request->input('country'),
    //         'dean_headmaster' => $request->input('dean_headmaster'),
    //         'certificate_file' => $request->input('certificate_file')->storeAs('certificate_file', $fileName,'public'),
    //     ]);
    //     return redirect()->route('education.index');
    // }


    public function destroy($education_id)
    {
        $education = Education::find($education_id);
        $education->delete();

        return redirect()->route('education.index')->with(['error' => 'Data Berhasil Dihapus']);
    }
}

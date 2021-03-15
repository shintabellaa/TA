<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\District;
use App\Regency;
use App\Address_Details;

class BiodatapribadiController extends Controller
{
    public function index(){
        // dd(public_path());
        $biodatapribadi = User::get();
        $regencies = Regency::all();
        return view ('biodatapegawai.biodatapribadi', compact('biodatapribadi','regencies'));
        // return view ('biodatapegawai.biodatapribadi', [
        //     'biodatapribadi' => $biodatapribadi
        // ]);

    }
    public function indexlist(){
        // dd(public_path());
        $biodatapribadi = User::all();
        $regencies = Regency::all();
        return view ('biodatapegawai.pegawai', compact('biodatapribadi','regencies'));
        // return view ('biodatapegawai.biodatapribadi', [
        //     'biodatapribadi' => $biodatapribadi
        // ]);

    }


    public function get_kecamatan(Request $request)
    {
        $kecamatan = District::where('regency_id',$request->kabupaten_kota)->get();
        return response()->json([
            "kecamatan" => $kecamatan,
        ]);
    }

    public function store(Request $request)
    {

        $file = $request->file('upload_gambar');
        // dd($file->getClientOriginalName());

        // nama file
        // echo 'File Name: '.$file->getClientOriginalName();

        // ekstensi file
        // echo 'File Extension: '.$file->getClientOriginalExtension();

        $tujuan_upload = public_path().'\data_file';

        // dd($tujuan_upload);

         // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());


        $user= User::create([
            'nip_nik'=> $request->nip_nik,
            'nidn'=>$request->nidn,
            'title_ahead'=>$request->gelardepan,
            'real_name'=>$request->nama,
            'back_title'=>$request->gelarbelakang,
            'birth_place'=>$request->tempatlahir,
            'birth_date'=>$request->tanggallahir,
            'blood_group'=>$request->golongandarah,
            'height'=>$request->tinggibadan,
            'weight'=>$request->tinggibadan,
            'handicap'=>$request->cacat,
            'email'=>$request->email,
            'id_card_number'=>$request->noktp,
            'npwp'=>$request->nonpwp,
            'role_id'=>3,
            'username'=>$request->nip_nik,
            'password'=>$request->nip_nik,
            'bpjs'=>$request->nobpjs,
            'gender'=>$request->jeniskelamin,
            'religion'=>$request->agama,
            'marital_status'=>$request->statusperkawinan,
            'citizen_status'=>$request->statuskewarganegaraan,
            'retirement_age_limit'=>$request->bataspensiun,
            'employee_status'=>$request->statuspegawai,
            'photo' => $file->getClientOriginalName(),
        ]);

        $hitung_detail = Address_Details::count('address__details_id');
        if($hitung_detail == 0)
        {
            $count = 1;
        }
        else
        {
            $count = $hitung_detail + 1;
        }

        $address_detail= Address_Details::create([
            'address__details_id'=> "ADDRESS-".$count,
            'nip/nik'=> $request->nip_nik,
            'district_id'=> $request->kecamatan,
            'street'=>$request->jalan,
            'phone_number'=>$request->notelepon,
        ]);


        return redirect()->back();

    }

}

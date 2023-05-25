<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\District;
use App\Regency;
use App\Address_Details;
use App\Role;
use App\Training;
use App\Education;
use App\Education_Details;
use App\Functional_Details;
use Auth;

class ProfilDiriUserController extends Controller
{
    public function index(){
        $profildiri = User :: with([
           'address_details'=>function($q){

            return $q->with(['district', 'district.regency'])->orderby('address_details_id', 'desc')->limit(1);
           }

        ])->find(Auth::user()->nip_nik);

        $education = User::leftJoin('education_details','education_details.nip_nik', '=', 'users.nip_nik')
        ->leftJoin('education','education.education_id', '=', 'education_details.education_id')
        ->where('education_details.nip_nik', Auth::user()->nip_nik)->get();

        $training = User::leftJoin('trainings','trainings.nip_nik', '=', 'users.nip_nik')
        ->where('trainings.nip_nik', Auth::user()->nip_nik)->get();

        $struktural_details = User::leftJoin('structural_details','structural_details.nip_nik', '=', 'users.nip_nik')
        ->leftJoin('structurals','structurals.structural_id', '=', 'structural_details.structural_id')
        ->where('structural_details.nip_nik', Auth::user()->nip_nik)->get();

        $rank_group = User::leftJoin('rank_groups','rank_groups.nip_nik', '=', 'users.nip_nik')
        ->where('rank_groups.nip_nik', Auth::user()->nip_nik)->get();

        $mutasi = User::leftJoin('employee_transfers','employee_transfers.nip_nik', '=', 'users.nip_nik')
        ->leftJoin('work_units','work_units.work_unit_id', '=', 'employee_transfers.work_unit_id')
        ->where('employee_transfers.nip_nik', Auth::user()->nip_nik)->get();

        $family = User::leftJoin('family','family.nip_nik', '=', 'users.nip_nik')
        ->where('family.nip_nik', Auth::user()->nip_nik)->get();

        $fungsional = User::leftJoin('functional_details','functional_details.nip_nik', '=', 'users.nip_nik')
        ->leftJoin('functionals','functionals.functional_id', '=', 'functional_details.functional_id')
       ->where('functional_details.nip_nik', Auth::user()->nip_nik)->get();

        $role = Role::get();
        // dd($biodatapegawai);
        $regencies = Regency::all();

        if(Auth::user()->role_id == 1){
            return redirect()->route('home');
        }else{
            return view ('profildiriuser.index', compact('profildiri','regencies','role','mutasi','education','training','struktural_details','rank_group','family','fungsional'));
        }
        // return view ('biodatapegawai.biodatapribadi', [
        //     'biodatapribadi' => $biodatapribadi
        // ]);

    }
    public function indexlist(){
        // dd(public_path());
        $profildiri = User::all();
        $role = Role::get();
        $regencies = Regency::all();

        return view ('profildiri.index', compact('profildiri','regencies','role'));
        // return view ('biodatapegawai.biodatapribadi', [
        //     'biodatapribadi' => $biodatapribadi
        // ]);

    }
    public function add(Request $request)
    {
        $nipnik = $request->nip_nik;
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $education = Education::pluck('level','education_id');

        return view('educationdetail.create', compact('nipnik','education','biodatapegawai'));

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
        $fileName = $request->upload_gambar->getClientOriginalName();
        dd($request->all());

        $user= User::create([

            'nip_nik'=> $request->nip_nik,
            'nidn'=>$request->nidn,
            'title_ahead'=>$request->title_ahead,
            'real_name'=>$request->real_name,
            'back_title'=>$request->back_title,
            'birth_place'=>$request->birth_place,
            'birth_date'=>$request->birth_date,
            'blood_group'=>$request->blood_group,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'id_card_number'=>$request->id_card_number,
            'npwp'=>$request->npwp,
            'role_id'=>$request->roleselect,
            'username'=>$request->nip_nik,
            'password'=>bcrypt($request->nip_nik),
            'bpjs'=>$request->bpjs,
            'gender'=>$request->gender,
            'religion'=>$request->religion,
            'marital_status'=>$request->marital_status,
            'citizen_status'=>$request->citizen_status,
            'retirement_age_limit'=>$request->retirement_age_limit,
            'employee_status'=>$request->employee_status,
            'photo' => $request->upload_gambar->storeAs('photo', $fileName,'public'),
        ]);

        // $district= District::create([
        //     'district_id'=>$request->district_id,
        //     'regency_id'=>$request->regency_id,
        //     'district_name'=>$request->district_name,

        // ]);
         $address= Address_Details::create([
             'address_detail_id'=>$request->address_detail_id,
             'nip_nik'=>$request->nip_nik,
             'district_id'=>$request->districts,
             'address'=>$request->address,
         ]);

        //  $regency= Regency::create([
        //     'regency_id'=>$request->regencies,
        //    'regency_name'=>$request->regencies,
        //  ]);



        $hitung_detail = Address_Details::count('address_details_id');
        if($hitung_detail == 0)
        {
            $count = 1;
        }
        else
        {
            $count = $hitung_detail + 1;
        }

// dd([  'address_details_id'=> "ADDRESS-".$count,
// 'nip_nik'=> $request->nip_nik,
// 'district_id'=> $request->districts,
// 'address'=>$request->address,
// 'phone_number'=>$request->phone_number,]);
// dd($address_detail);
        $address_detail= Address_Details::create([
            'address_details_id'=> "ADDRESS-".$count,
            'nip_nik'=> $request->nip_nik,
            'district_id'=> $request->districts,
            'address'=>$request->address,

        ]);



        return redirect()->route("profildiri.index")->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit($nip_nik){
        $profildiri=User::find($nip_nik);
        $regencies = Regency::pluck('regency_name','regency_id');
        $districts = District::pluck('district_name','district_id');
        $role = Role::pluck('nama_role');

        return view('profildiri.edit', compact('profildiri','regencies', 'districts','role'));

    }


    public function update(Request $request)
    {
        // dd($request->all());
        $fileName = $request->upload_gambar->getClientOriginalName();
        // $biodatapegawai=User::find($id);
        $profildiri= User::where("nip_nik",$request->nip_nik)->update([
            'nidn'=>$request->input('nidn'),
            'title_ahead'=>$request->input('title_ahead'),
            'real_name'=>$request->input('real_name'),
            'back_title'=>$request->input('back_title'),
            'birth_place'=>$request->input('birth_place'),
            'birth_date'=>$request->input('birth_date'),
            'blood_group'=>$request->input('blood_group'), 
            'height'=>$request->input('height'),
            'weight'=>$request->input('weight'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email'),
            'id_card_number'=>$request->input('id_card_number'),
            'npwp'=>$request->input('npwp'),
            'role_id'=>$request->input('roleselect'),
            'username'=>$request->input('nip_nik'),
            'bpjs'=>$request->input('bpjs'),
            'gender'=>$request->input('gender'),
            'religion'=>$request->input('religion'),
            'marital_status'=>$request->input('marital_status'),
            'citizen_status'=>$request->input('citizen_status'),
            'retirement_age_limit'=>$request->input('retirement_age_limit'),
            'employee_status'=>$request->input('employee_status'),
            'photo' => $request->upload_gambar->storeAs('photo', $fileName,'public'),
            ]);
            // 'photo' => $file->getClientOriginalName(),
            $address= Address_Details::where("address_details_id",$request->address_details_id)->update([

                'district_id'=>$request->input('districts'),
                'address'=>$request->input('address'),
            ]);


            return redirect()->route("profildiri.index")->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($nip_nik)
    {
        // $profildiri=User::where('nip_nik', '=', '$nip_nik')->delete();
        $profildiri = User::find($nip_nik);
        $profildiri->delete();
        // Session::flash('message', 'Successfully deleted the data!');
        return redirect()->back()->with(['error' => 'Data Berhasil Dihapus']);
    }


    public function create()
    {
        $regencies = Regency::pluck('regency_name','regency_id');
        $districts = District::pluck('district_name','district_id');
        $role = Role::pluck('nama_role');

        return view('profildiri.create', compact('regencies','districts','role'))->with(['error' => 'Data Berhasil Dihapus']);
    }


    public function show($id)
    {

        $profildiri = User::find($id);
        $address = $profildiri->address_details->first();
        $regency = $profildiri->address_details->first()->district->regency;
        $district = $profildiri->address_details->first()->district;
        // dd($address);
        // dd($biodatapegawai->address_details->first()->district);
        return view('profildiri.show', compact('profildiri', 'address', 'district', 'regency'));


    }
}

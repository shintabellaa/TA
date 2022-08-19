<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\District;
use App\Regency;
use App\Address_Details;
use Illuminate\Support\Facades\Auth;

class DataDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $nip_nik)
    {
        // $biodatapegawai=Auth::user();
        // // dd($biodatapegawai);
        // $regencies = Regency::all();
        // return view ('datadiri', compact('biodatapegawai','regencies'));

        // $address = Address_Details ::all();
        // return view ('datadiri', compact('biodatapegawai','address'));
        // // return view ('biodatapegawai.biodatapribadi', [
        // //     'biodatapribadi' => $biodatapribadi
        // // ]);

        $biodatapegawai = Auth::user($nip_nik);
        $address = $biodatapegawai->address_details->first();
        $regency = $biodatapegawai->address_details->first()->district->regency;
        $district = $biodatapegawai->address_details->first()->district;
        // dd($address);
        // dd($biodatapegawai->address_details->first()->address);
        return view('datadiri', compact('biodatapegawai', 'address', 'district', 'regency'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

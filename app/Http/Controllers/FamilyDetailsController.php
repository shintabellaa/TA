<?php

namespace App\Http\Controllers;

use App\Family_Details;
use Illuminate\Http\Request;
use App\District;
use App\Regency;

class FamilyDetailsController extends Controller
{

    public function index(){
        $biodatakeluarga = User::get();
        $regencies = Regency::all();
        return view ('biodatapegawai.biodatapribadi', compact('biodatapribadi','regencies'));
    }

    
}

//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     // public function index()
//     // {
//     //     //
//     // }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     // public function create()
//     // {
//     //     //
//     // }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//     //  */
//     // public function store(Request $request)
//     // {
//     //     //
//     // }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Family_Details  $family_Details
//      * @return \Illuminate\Http\Response
//      */
//     // public function show(Family_Details $family_Details)
//     // {
//     //     //
//     // }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Family_Details  $family_Details
//      * @return \Illuminate\Http\Response
//      */
//     // public function edit(Family_Details $family_Details)
//     // {
//     //     //
//     // }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Family_Details  $family_Details
//      * @return \Illuminate\Http\Response
//      */
//     // public function update(Request $request, Family_Details $family_Details)
//     // {
//     //     //
//     // }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Family_Details  $family_Details
//      * @return \Illuminate\Http\Response
//      */
// //     public function destroy(Family_Details $family_Details)
// //     {
// //         //
// //     }
// // }

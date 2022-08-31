<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Regency;
use Illuminate\Http\Request;

class PegawaiAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodataPegawai = User::with([
            'address_details.district.regency',
            'education_details',
            'functional_details',
            'structural_details',
            'employee_transfer',
            'training',
            'rank_group',
            'family'])->get();

            $biodataFilter = $biodataPegawai->except('role_id');

        return $biodataFilter;
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

<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Regency;
use App\Structural_Details;
use App\Functional_Details;
use App\Education_Details;
use App\Employee_transfer;
use App\Rank_group;
use Illuminate\Http\Request;

class PegawaiAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//    dd($request->all());

        $biodataPegawai = User::with([
            'address_details.district.regency',
            'education_details',
            'education_details.education',
            'functional_details',
            'functional_details.functional',
            'structural_details',
            'structural_details.structural',
            'employee_transfer',
            'employee_transfer.work_unit',
            'training',
            'rank_group',
            'family'])


            ->when($request->has('structural'), function ($q) use ($request)
            {
                $query=Structural_Details::select('nip_nik')->where('structural_id', $request['structural']);
                return $q->wherein('nip_nik', $query);
            })

            ->when($request->has('functional'), function ($q) use ($request)
            {
                $query=Functional_Details::select('nip_nik')->where('functional_id', $request['functional']);
                return $q->wherein('nip_nik', $query);
            })

            ->when($request->has('education'), function ($q) use ($request)
            {
                $query=Education_Details::select('nip_nik')->where('education_id', $request['education']);
                return $q->wherein('nip_nik', $query);
            })

            ->when($request->has('work_unit'), function ($q) use ($request)
            {
                $query=Employee_transfer::select('nip_nik')->where('work_unit_id', $request['work_unit']);
                return $q->wherein('nip_nik', $query);
            })

            ->when($request->has('rank_group'), function ($q) use ($request)
            {
                $query=Rank_group::select('nip_nik')->where('rank_group_id', $request['rank_group']);
                return $q->wherein('nip_nik', $query);
            })



            ->when($request->has('user'), function ($q) use ($request)
            {
                $query=User::select('nip_nik')->where('nip_nik', $request['user']);
                return $q->wherein('nip_nik', $query);
            })


            ->get();

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

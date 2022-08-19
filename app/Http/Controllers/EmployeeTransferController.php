<?php

namespace App\Http\Controllers;

use App\Employee_Transfer;
use App\Work_Unit;
use App\User;
use Illuminate\Http\Request;

class EmployeeTransferController extends Controller
{

    public function index()
    {
        $employee_transfer = Employee_Transfer::get();
        $work_unit = Work_Unit::get();
        $employee_transfer = Employee_Transfer::all();
        return view('mutasi.index', compact('employee_transfer','work_unit'));
    }


    public function create(Request $request)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $work_unit = Work_Unit::pluck('name','work_unit_id');
        return view('mutasi.create', compact('biodatapegawai','work_unit'));
    }


    public function store(Request $request)
    {
        $fileNamee = $request->sk_file->getClientOriginalName();
        Employee_Transfer::create([
            'employee_transfer_id' => $request->employee_transfer_id,
            'work_unit_id' => $request->work_unit_id,
            'nip_nik' => $request->nip_nik,
            'employee_transfer_date' => $request->employee_transfer_date,
            'sk_no' => $request->sk_no,
            'sign_by' => $request->sign_by,
            'sk_file' => $request->sk_file->storeAs('sk_file_mutasi', $fileNamee,'public'),
        ]);
        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function show($employee_transfer_id)
    {
        $work_unit = Work_Unit::get();
        $employee_transfer = Employee_Transfer::find($employee_transfer_id);
        return view('mutasi.show', compact('employee_transfer','work_unit'));
    }


    public function edit( $employee_transfer_id)
    {
        $biodatapegawai = User::pluck('real_name','nip_nik');
        $employee_transfer = Employee_Transfer::find($employee_transfer_id);
        $work_unit = Work_Unit::pluck('name','work_unit_id');
        return view('mutasi.edit', compact('employee_transfer','work_unit','biodatapegawai'));
    }


    public function update( Request $request, $employee_transfer_id)
    {
        $employee_transfer= Employee_Transfer::find($employee_transfer_id);
        $employee_transfer->update([

            'nip_nik' => $request->nip_nik,
            'employee_transfer_date' => $request->employee_transfer_date,
            'sk_no' => $request->sk_no,
            'sign_by' => $request->sign_by,
            'sk_file' => $request->sk_file,
        ]);

        return redirect()->route('biodatapegawai.index',['nip_nik']);
    }


    public function destroy($employee_transfer_id)
    {
        $employee_transfer = Employee_Transfer::find($employee_transfer_id);
        $employee_transfer->delete();

        return redirect()->back();
    }
}

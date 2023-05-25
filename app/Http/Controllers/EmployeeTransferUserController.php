<?php

namespace App\Http\Controllers;

use App\Employee_Transfer;
use App\Work_Unit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeTransferUserController extends Controller
{

    public function index()
    {
        $employee_transfer = Employee_Transfer::get();
        $work_unit = Work_Unit::get();
        $employee_transfer = Employee_Transfer::all();
        return view('mutasiuser.index', compact('employee_transfer','work_unit'));
    }




    public function create(Request $request)
    {
        if($request->all()){
            $nipnik = $request->nip_nik;
        }else{
            $nipnik = Auth::user()->nip_nik;
        }
        $biodatapegawai = User::find($nipnik);
        $work_unit = Work_Unit::pluck('name','work_unit_id');
        return view('mutasiuser.create', compact('biodatapegawai','work_unit'));
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
        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')]) ->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function show($employee_transfer_id)
    {
        $work_unit = Work_Unit::get();
        $employee_transfer = Employee_Transfer::find($employee_transfer_id);
        return view('mutasiuser.show', compact('employee_transfer','work_unit'));
    }


    public function edit( $employee_transfer_id)
    {
        $employee_transfer = Employee_Transfer::find($employee_transfer_id);
        $biodatapegawai = User::find($employee_transfer->nip_nik);
        $work_unit = Work_Unit::pluck('name','work_unit_id');
        return view('mutasiuser.edit', compact('employee_transfer','work_unit','biodatapegawai'));
    }


    public function update( Request $request, $employee_transfer_id)
    {
        $fileNamee = $request->sk_file->getClientOriginalName();
        $employee_transfer= Employee_Transfer::find($employee_transfer_id);
        $employee_transfer->update([
            'nip_nik' => $request->nip_nik,
            'employee_transfer_date' => $request->employee_transfer_date,
            'work_unit_id' => $request->work_unit_id,
            'sk_no' => $request->sk_no,
            'sign_by' => $request->sign_by,
            'sk_file' => $request->sk_file->storeAs('sk_file_mutasi', $fileNamee,'public'),
        ]);

        return redirect()->route('biodatapegawai.show', ['biodatapegawai' => $request->input('nip_nik')])->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function destroy($employee_transfer_id)
    {
        $employee_transfer= Employee_Transfer::find($employee_transfer_id);
        $employee_transfer->delete();

        return redirect()->route('biodatapegawai.show',Auth::user()->nip_nik)->with(['error' => 'Data Berhasil Dihapus']);
    }
}

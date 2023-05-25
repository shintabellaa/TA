<?php

namespace App\Http\Controllers;

use App\Work_Unit;
use Illuminate\Http\Request;

class WorkUnitController extends Controller
{
    public function index()
    {
        //load data
        $work_units = Work_Unit::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('unitkerja.index', compact('work_units'));
    }

    public function create()
    {
        $work_units = Work_Unit::all();
        return view('unitkerja.create');
    }

    public function store(Request $request)
    {
        Work_Unit::create([
            'name' => $request->name,


        ]);
        return redirect()->route('unitkerja.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function show($id)
    {
        $work_unit = Work_Unit::find($id);
        return view('unitkerja.show', compact('work_unit'));
    }

    public function edit($id)
    {
        $work_unit = Work_Unit::find($id);
        return view('unitkerja.edit', compact('work_unit'));
    }

    public function update(Request $request, $id)
    {
        $work_unit = Work_Unit::find($id);
        $work_unit->update([

            'name' => $request->name,
        ]);
        return redirect()->route('unitkerja.index')->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function destroy($id)
    {
        $work_unit = Work_Unit::find($id);
        $work_unit->delete();

        return redirect()->route('unitkerja.index')->with(['error' => 'Data Berhasil Dihapus']);
    }
}

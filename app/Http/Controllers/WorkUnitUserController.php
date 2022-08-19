<?php

namespace App\Http\Controllers;

use App\Work_Unit;
use Illuminate\Http\Request;

class WorkUnitUserController extends Controller
{
    public function index()
    {
        //load data
        $unitkerjauser = Work_Unit::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('unitkerjauser.index', compact('unitkerjauser'));
    }

    public function create()
    {
        $unitkerjauser = Work_Unit::all();
        return view('unitkerjauser.create');
    }

    public function store(Request $request)
    {
        Work_Unit::create([
            'name' => $request->name,


        ]);
        return redirect()->route('unitkerjauser.index');
    }

    public function show($id)
    {
        $unitkerjauser= Work_Unit::find($id);
        return view('unitkerjauser.show', compact('unitkerjauser'));
    }

    public function edit($id)
    {
        $unitkerjauser = Work_Unit::find($id);
        return view('unitkerjauser.edit', compact('unitkerjauser'));
    }

    public function update(Request $request, $id)
    {
        $unitkerjauser = Work_Unit::find($id);
        $unitkerjauser->update([

            'name' => $request->name,
        ]);
        return redirect()->route('unitkerjauser.index');

    }

    public function destroy($id)
    {
        $unitkerjauser = Work_Unit::find($id);
        $unitkerjauser->delete();

        return redirect()->route('unitkerjauser.index');
    }
}

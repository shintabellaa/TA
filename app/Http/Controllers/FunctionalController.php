<?php

namespace App\Http\Controllers;

use App\Functional;
use App\Functional_Details;
use Illuminate\Http\Request;


class FunctionalController extends Controller
{

    public function index1()
    {
         //load data
         $fungsionals = Functional::all();
         //buka halaman dan kirim data, kirim data = compact
         return view('fungsional.index', compact('fungsionals'));
    }


}

    public function create()
    {
        return view('fungsional.create');
    }


    public function store(Request $request)
    {
        Functional::create([
            'fungsional_id' => $request->fungsional_id,
            'name' => $request->name,
            'entry_date' => $request->entry_date
        ]);
        return redirect()->route('fungsional.index');
    }


    public function show(Functional $functional)
    {
        //
    }


    public function edit(Functional $functional)
    {
        $fungsional = Functional::find($id);
        return view('fungsional.edit', compact('fungsional'));
    }


    public function update(Request $request, Functional $functional)
    {
        $fungsional = Functional::find($id);
        $fungsional->update([
            'fungsional_id' => $request->fungsional_id,
            'name' => $request->name,
            'entry_date' => $request->entry_date
        ]);

        return redirect()->route('fungsional.index');
    }

    public function destroy(Functional $functional)
    {
        $fungsional = Functional::find($id);
        $fungsional->delete();

        return redirect()->route('fungsional.index');
    }
}

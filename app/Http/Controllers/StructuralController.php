<?php

namespace App\Http\Controllers;

use App\Structural_Details;
use Illuminate\Http\Request;


class StructuralController extends Controller
{
    public function index()
    {
        // //load data
        $strukturals = Structural_Details::join('structurals', 'structural_detail.structural_id','=', 'structurals.structural_id') ->get();
        // //buka halaman dan kirim data, kirim data = compact
        return view('struktural.index', compact('strukturals'));

    }

    public function create()
    {
        return view('struktural.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Structural::create([
            'structural_id' => $request->struktural_id,
            'name' => $request->name,
            'entry_date' => $request->entry_date
        ]);
        return redirect()->route('struktural.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $struktural = Structural::find($id);
        return view('struktural.edit', compact('struktural'));
    }

    public function update(Request $request, $id)
    {
        $struktural = Structural::find($id);
        $struktural->update([
            'struktural_id' => $request->struktural_id,
            'name' => $request->name,
            'entry_date' => $request->entry_date
        ]);

        return redirect()->route('struktural.index');
    }

    public function destroy($id)
    {
        $struktural = Structural::find($id);
        $struktural->delete();

        return redirect()->route('struktural.index');
    }
}

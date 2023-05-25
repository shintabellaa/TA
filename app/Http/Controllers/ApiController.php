<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Api;
use App\user;




class ApiController extends Controller
{
    public function index(){


        $api = Api::all();
        //buka halaman dan kirim data, kirim data = compact
        return view('api.index', compact('api'));
    }

    public function create()
    {
       $token= Str::random(40);
       $api = null;

        return view('api.create', compact('api','token'));
    }

    public function store(Request $request)
    {
        $api= Api::create([
            'id' => $request->input('id'),
            'name' => $request->input ('name'),
            'token' => $request->input ('token'),
        ]);
        return redirect()->route("api.index")->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function show($id)
    {
        $api = Api::find($id);
        return view('api.show', compact('api'));
    }

    public function edit($id)
    {
        $api = Api::find($id);
        // dd($api->token);
        return view('api.edit', compact('api'));

    }

    public function update(Request $request, $id)
    {
        $api = Api::find($id);
        $api->update([
            'name' => $request->input('name'),
            'token' => $request->input('token'),
        ]);
        return redirect()->route('api.index')->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function destroy($id)
    {
        $api = Api::find($id);
        $api->delete();

        return redirect()->route('api.index')->with(['error' => 'Data Berhasil Dihapus']);
    }

}

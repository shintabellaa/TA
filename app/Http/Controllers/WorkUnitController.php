<?php

namespace App\Http\Controllers;

use App\Work_Unit;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class WorkUnitController extends Controller
{
    public function index()
    {

        $work_units = Work_Unit::all();

        // $url = "http://localhost/ta/public/api/workunit?api-key=xddHIyF6x21VyfTO4pwaP3ArUqFiGfoQRrDE64hv";
        // // $url_encode = urlencode($url);


        // try {
        //     $client = new Client();
        //     // dd("Hello 1");
        //     $res = $client->request('GET',$url);

        //     // dd("Hello 3");
        //     $json = $res->getBody();
        //     $work_units = json_decode($json, true);

        //     $work_units = collect($work_units)->map(function ($s){
        //         return (object) $s;
        //     });
        //     // dd($struktural);

        // }catch(Exception $e){
        //     dd($e->getMessage());
        // }
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

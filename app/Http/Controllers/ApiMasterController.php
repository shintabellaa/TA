<?php

namespace App\Http\Controllers;

use App\Education;
use App\Structural;
use Illuminate\Http\Request;
use App\Functional;
use App\Work_Unit;

class ApiMasterController extends Controller
{
    public function struktural()
    {
        $data=Structural::get();
        // dd($data);
        return response(json_encode($data));
    }

    public function fungsional()
    {
        $data=Functional::get();
        return $data;
    }

    public function education()
    {
        $data=Education::get();
        return $data;
    }

    public function workunit()
    {
        $data=Work_Unit::get();
        return $data;
    }
}


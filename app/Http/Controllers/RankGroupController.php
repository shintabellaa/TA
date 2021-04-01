<?php

namespace App\Http\Controllers;

use App\Rank_Group;
use Illuminate\Http\Request;

class RankGroupController extends Controller
{

    public function index()
    {
        $pangkatgolongan = Rank_Group::all();
        return view ('pangkatgolongan.index', compact('pangkatgolongan'));

    }


    public function create()
    {
        return view ('pangkatgolongan.create');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rank_Group  $rank_Group
     * @return \Illuminate\Http\Response
     */
    public function show(Rank_Group $rank_Group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rank_Group  $rank_Group
     * @return \Illuminate\Http\Response
     */
    public function edit(Rank_Group $rank_Group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rank_Group  $rank_Group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rank_Group $rank_Group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rank_Group  $rank_Group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rank_Group $rank_Group)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\OwnerDistinct;
use Illuminate\Http\Request;

class OwnerDistinctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_distincts = OwnerDistinct::all();
        return view('owner_distinct/index',['owner_distincts'=>$owner_distincts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OwnerDistinct  $ownerDistinct
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerDistinct $ownerDistinct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OwnerDistinct  $ownerDistinct
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnerDistinct $ownerDistinct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OwnerDistinct  $ownerDistinct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OwnerDistinct $ownerDistinct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OwnerDistinct  $ownerDistinct
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnerDistinct $ownerDistinct)
    {
        //
    }
}

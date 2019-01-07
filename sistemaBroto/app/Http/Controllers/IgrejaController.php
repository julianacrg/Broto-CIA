<?php

namespace App\Http\Controllers;

use App\Igrejas;
use App\Orcamentos;
use Illuminate\Http\Request;

class IgrejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = Orcamentos:: orderBy('evento')->get();
        return view('cadastrarIgreja', compact('orcamentos'));
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
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function show(Igrejas $igrejas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function edit(Igrejas $igrejas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igrejas $igrejas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Igrejas  $igrejas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igrejas $igrejas)
    {
        //
    }
}
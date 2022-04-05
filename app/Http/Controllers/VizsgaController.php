<?php

namespace App\Http\Controllers;

use App\Models\Vizsga;
use Illuminate\Http\Request;

class VizsgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vizsgas = Vizsga::orderBy('id')->get();
        return view('index', [ 'vizsgas' => $vizsgas]);
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
     * @param  \App\Models\Vizsga  $vizsga
     * @return \Illuminate\Http\Response
     */
    public function show(Vizsga $vizsga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vizsga  $vizsga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vizsga $vizsga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vizsga  $vizsga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vizsga $vizsga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vizsga  $vizsga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vizsga $vizsga)
    {
        //
    }
}

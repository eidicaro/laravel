<?php

namespace App\Http\Controllers;

use App\Models\proprietario;
use App\Http\Requests\StoreproprietarioRequest;
use App\Http\Requests\UpdateproprietarioRequest;

class ProprietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietarios = Proprietario::all();
        return $proprietarios;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproprietarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(proprietario $proprietario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proprietario $proprietario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproprietarioRequest $request, proprietario $proprietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proprietario $proprietario)
    {
        //
    }
}

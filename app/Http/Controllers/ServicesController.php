<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Requests\StoreServicesControllerRequest;
use App\Http\Requests\UpdateServicesControllerRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services', ['pageTitle' => 'Services']);
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
     * @param  \App\Http\Requests\StoreServicesControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesController  $servicesController
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesController $servicesController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesController  $servicesController
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesController $servicesController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicesControllerRequest  $request
     * @param  \App\Models\ServicesController  $servicesController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesControllerRequest $request, ServicesController $servicesController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesController  $servicesController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesController $servicesController)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\MainPageBanner as ResourcesMainPageBanner;
use App\Models\MainPageBanner;
use Illuminate\Http\Request;

class ApiMainPageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ResourcesMainPageBanner(MainPageBanner::all());
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
     * @param  \App\Models\MainPageBanner  $mainPageBanner
     * @return \Illuminate\Http\Response
     */
    public function show(MainPageBanner $mainPageBanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainPageBanner  $mainPageBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainPageBanner $mainPageBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainPageBanner  $mainPageBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainPageBanner $mainPageBanner)
    {
        //
    }
}

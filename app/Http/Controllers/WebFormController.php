<?php

namespace App\Http\Controllers;

use App\Events\FormSended;
use App\Http\Requests\WebFormRequest;
use App\Models\WebForm;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event as FacadesEvent;

class WebFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$newForm =  WebForm::create([
            "email"=> "email",
            "phone"=> "phone",
            "description"=> "describe",
        ]);*/
        //return WebForm::all()->toArray();
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(WebFormRequest $request)
    public function store(Request $request)
    {
       
        $result = $request->only(["email","phone","describe"]);
        $filledForm =  WebForm::create([
            "email"=> $result["email"],
            "phone"=> $result["phone"],
            "description"=> $result["describe"],
        ]);

        FormSended::dispatchIf(($filledForm->id>0), $filledForm);
        
        if($filledForm->id>0)
            return true;
    
        return $request->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebForm  $webForm
     * @return \Illuminate\Http\Response
     */
    public function show(WebForm $webForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebForm  $webForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebForm $webForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebForm  $webForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebForm $webForm)
    {
        //
    }
}

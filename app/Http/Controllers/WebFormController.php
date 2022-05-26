<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebFormRequest;
use App\Models\WebForm;
use Illuminate\Http\Request;

class WebFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newForm =  WebForm::create([
            "email"=> "email",
            "phone"=> "phone",
            "description"=> "describe",
        ]);
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
       
       // $validated = $request->validated();
        /*
        $validated = $request->validate([
            'email' => 'required|unique:web_forms|max:255',
            'phone' => 'required',
            'describe' => 'required',
        ]);*/

         
        /*$errors = $validator->all()->errors();
        return $errors->toArray();
        */
        $result = $request->only(["email","phone","describe"]);
        $newForm =  WebForm::create([
            "email"=> $result["email"],
            "phone"=> $result["phone"],
            "description"=> $result["describe"],
        ]);
        if($newForm->id>0)
            return true;
        //
        //dd( $request );
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

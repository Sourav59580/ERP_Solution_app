<?php

namespace App\Http\Controllers\restApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company_registration;

class company extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $data;
     public $password;
    public function index()
    {
        //
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
       $this->data = $request->all();
       $this->password = array("password"=>bcrypt($this->data['password']));
       $this->data = array_replace($this->data,$this->password);

       Company_registration::create($this->data);
       return response()->view('congrats',array("notice"=>"We have sent your url and password to your email"))->header('Content-Type',"text/html")->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $this->data = Company_registration::where("company_name",$id)->get();

       if(count($this->data) !=0){
         return response(array("notice","Data found !"),200)->header("Content-Type","application/json");  
         
       }else{
        return response(array("notice","Data not found !"),404)->header("Content-Type","application/json");  
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

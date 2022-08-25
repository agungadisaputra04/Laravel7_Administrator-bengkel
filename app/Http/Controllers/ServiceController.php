<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service= Service::orderBy('id_service', 'DESC')->paginate(5);      
           return view('service.index', compact('service')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service=new Service;
        $service->id_service=$request->id_service;
        $service->nama=$request->nama;
        $service->keterangan=$request->keterangan;
        $service->harga=$request->harga;
        $service->save();
        return redirect()->route('service.index')->with('messege', 'Data service baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_service)
    {
        $service=Service::findOrFail($id_service);
        return view('service.index', compact('service')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_service)
    {
        $service = Service::findOrFail($id_service);
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_service)
    {
        $serviceUpdate=$request->all();
        $service = Service::findOrFail($id_service);
        $service->update($serviceUpdate);
       return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_service)
    {
        $service = Service::findOrFail($id_service);
        $service->delete();
     return redirect()->route('service.index')
       ->with('message', 'Data service berhasil dihapus!');
    }
}




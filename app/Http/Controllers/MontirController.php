<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\models\Montir;

class MontirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $montir= Montir::orderBy('id_montir', 'DESC')->paginate(5);      
           return view('montir.index', compact('montir')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('montir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $montir=new Montir;
        $montir->id_montir=$request->id_montir;
        $montir->nama=$request->nama;
        $montir->alamat=$request->alamat;
        $montir->jenis_kelamin=$request->jenis_kelamin;
        $montir->no_hp=$request->no_hp;
        $montir->email=$request->email;
        $montir->save();
        return redirect()->route('montir.index')->with('messege', 'Data montir baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_montir)
    {
        $montir=Montir::findOrFail($id_montir);
        return view('montir.index', compact('montir')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_montir)
    {
        $montir = montir::findOrFail($id_montir);
        return view('montir.edit', compact('montir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_montir)
    {
        $montirUpdate=$request->all();
       $montir = montir::findOrFail($id_montir);
       $montir-> update($montirUpdate);
       return redirect('montir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_montir)
    {
        $montir = montir::findOrFail($id_montir);
        $montir->delete();
     return redirect()->route('montir.index')
       ->with('message', 'Data montir berhasil dihapus!');
    }
}

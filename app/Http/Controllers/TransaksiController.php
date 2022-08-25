<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi= Transaksi::orderBy('id_transaksi', 'DESC')->paginate(5);      
           return view('transaksi.index', compact('transaksi')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi=new Transaksi;
        $transaksi->id_transaksi=$request->id_transaksi;
        $transaksi->id_montir=$request->id_montir;
        $transaksi->jenis_service=$request->jenis_service;
        $transaksi->total_biaya=$request->total_biaya;
        $transaksi->tanggal=$request->tanggal;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('messege', 'Hore Data transaksi berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi)
    {
        $transaksi=Transaksi::findOrFail($id_transaksi);
        return view('transaksi.index', compact('transaksi')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_transaksi)
    {
        $transaksi = Transaksi::findOrFail($id_transaksi);
        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi)
    {
        $transaksiUpdate=$request->all();
       $transaksi = Transaksi::findOrFail($id_transaksi);
       $transaksi->update($transaksiUpdate);
       return redirect('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $transaksi = Transaksi::findOrFail($id_transaksi);
        $transaksi->delete();
     return redirect()->route('transaksi.index')
       ->with('message', 'Data transaksi berhasil dihapus!');
    }
}





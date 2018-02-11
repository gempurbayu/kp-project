<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;

class KostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kost = Kost::Latest()->paginate(5);;
        return view('admin.show',compact('kost'))->with([
     'kost' => $kost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kost = Kost::Latest();
        return view('admin.create',compact('kost'))->with([
     'kost' => $kost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Kost::create([
            'nama' => request('nama'),
            'nama_pemilik' => request('nama_pemilik'),
            'nohp' => request('nohp'),
            'alamat' => request('alamat'),
            'harga' => request('harga'),
            'tipe' => request('tipe'),
            'fasilitas' => request('fasilitas'),
            'jangka_waktu' => request('jangka_waktu'),
            'panjang' => request('panjang'),
            'lebar' => request('lebar'),  
            'sisa_kamar' => request('sisa_kamar'),
            'jumlah_kamar' => request('jumlah_kamar'),
            'deskripsi' => request('deskripsi'),    
        ]);
        return redirect()->view('admin.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kost = Kost::find($id);
        return view('admin.show',compact('kost'))->with([
     'kost' => $kost]);;
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
        $kost = Kost::find($id);
        $kost->delete();
        return redirect('admin.show')->with([
     'kost' => $kost]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use Image;

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
        $kost = Kost::Latest()->paginate(5);
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

        $this->validate($request, [

        'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG',

    ]);

            $kost = new Kost();
        $kost->nama = $request->get('nama');
        $kost->nama_pemilik = $request->get('nama_pemilik');
        $kost->nohp = $request->get('nohp');
        $kost->alamat = $request->get('alamat');
        $kost->harga = $request->get('harga');
        $kost->tipe = $request->get('tipe');
        $kost->fasilitas = $request->get('fasilitas');
        $kost->jangka_waktu = $request->get('jangka_waktu');
        $kost->panjang = $request->get('panjang');
        $kost->lebar = $request->get('lebar');
        $kost->sisa_kamar = $request->get('sisa_kamar');
        $kost->jumlah_kamar = $request->get('jumlah_kamar');
        $kost->deskripsi = $request->get('deskripsi');

       if($request->hasFile('images')){
            $images = $request->file('images');
            $filename = time() . '.' . $images->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($images)->resize(800, 400)->save($location);

            $kost->images = $filename;
        }
            $kost->save();

                return redirect('admin/kost/');

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
        return redirect('/admin/kost')->with([
     'kost' => $kost]);
    }
}

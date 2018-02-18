<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use App\Image;
use App\Kost_Images;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kost = Kost::Latest()->paginate(5);
        //page heading
        //return to our view
        return view('pages.welcome',compact('kost'))->with([
     'kost' => $kost]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        $hargamax=$request->hargamax;
        $hargamin=$request->hargamin;
        $tipe=$request->tipe;
        $jangka_waktu=$request->jangka_waktu; 

        $kost = Kost::Where('harga','<=', $hargamax)
        ->Where('harga','>=', $hargamin)
        ->Where('tipe','like', '%'.$tipe.'%')
        ->Where('jangka_waktu','like', '%'.$jangka_waktu.'%')
        ->paginate(4);

        return view('pages.cari',compact('kost'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

         $kost = Kost::where('slug',$slug)->first();
        if (!$kost) {
            return redirect('/')->withErrors('requested page not found');
        }
        $images = $kost->kost_images;
        return view('pages.showkost')->with([
     'kost' => $kost])->with(['images' => $images]);
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

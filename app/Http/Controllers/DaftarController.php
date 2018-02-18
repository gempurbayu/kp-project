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
        $kost = Kost::Latest()->paginate(3);
        //page heading
        //return to our view
        return view('pages.welcome',compact('kost'))->with([
     'kost' => $kost]);
    }

    public function lihat($id)
    {
                $kost_id = Kost::find($id);
        $images = Kost_Images::where('kost_id','like','%'.$kost_id.'%');
        return view('pages.showkost',compact('images'))->with([
     'kost' => $kost])->with(['images' => $images]);
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

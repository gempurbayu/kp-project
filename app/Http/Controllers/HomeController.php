<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use App\Image;
use App\Kost_Images;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
    }

     public function cari(Request $request)
    {
        $cari=$request->search;

        $kost = Kost::where('nama','like','%'.$cari.'%')
        ->orWhere('nama_pemilik','like','%'.$cari.'%')
        ->orWhere('alamat','like','%'.$cari.'%')
        ->paginate(4);

        return view('pages.cari2',compact('kost'));
    }
}

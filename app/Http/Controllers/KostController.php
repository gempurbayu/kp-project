<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use App\Image;
use App\Kost_Images;
use Images;

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
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

        

         if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $filename = time() . '.' . $cover->getClientOriginalExtension();
            $location = public_path('cover/' . $filename);
            Images::make($cover)->resize(800, 400)->save($location);

            $kost = Kost::create([
            'nama' => $request->get('nama'),
            'nama_pemilik' => $request->get('nama_pemilik'),
            'nohp' => $request->get('nohp'),
            'alamat' => $request->get('alamat'),
            'harga' => $request->get('harga'),
            'tipe' => $request->get('tipe'),
            'fasilitas' => $request->get('fasilitas'),
            'jangka_waktu' => $request->get('jangka_waktu'),
            'panjang' => $request->get('panjang'),
            'lebar' => $request->get('lebar'),
            'sisa_kamar' => $request->get('sisa_kamar'),
            'jumlah_kamar' => $request->get('jumlah_kamar'),
            'deskripsi' => $request->get('deskripsi'),
            'slug' => str_slug($request->get('nama') ),
            'images' => $filename
            ]);
        }

       $images = $request->file('images');

       foreach($images as $image)
       {
        $move = $image->move(public_path().'/images/', $image->getClientOriginalName());

        if($move)
        {
            
            $kost_image = Kost_Images::create([
                'kost_id' => $kost->id,
                'filename' => $image->getClientOriginalName()
                ]);
        }
       }
       return redirect('admin/kost/');


        /**
       if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
         }

         $kost->images=json_encode($data);

            $kost->save();

                return redirect('admin/kost/');

            */

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

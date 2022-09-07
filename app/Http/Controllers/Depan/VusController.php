<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vus;
use App\Models\Pendaftaran;
use Carbon\Carbon;

class VusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.depan.vus.index');
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
        $folderPath = public_path('storage/');
       
        $image_parts = explode(";base64,", $request->signed);
             
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
 
        $signature = uniqid() . '.'.$image_type;
           
        $file = $folderPath . $signature;
 
        file_put_contents($file, $image_base64);

        // Save in your data in database here.
        $daftar = new Pendaftaran; 
        $daftar->nama = $request->nama; 
        $daftar->kelas = $request->kelas; 
        $daftar->waktu = Carbon::now()->isoFormat('D MMMM Y'); 
        $daftar->noabsen = $request->noabsen; 
        $daftar->universitas = 'VICTORIA UNIVERSITY SYDNEY'; 
        $daftar->signed = $signature; 
        $daftar->save();
        // $jon = new Vus;
        // $jon->nama = $request->nama;
        // $jon->kelas = $request->kelas;
        // $jon->noabsen = $request->noabsen;
        // $jon->universitas = 'VUS';
        // $jon->signed = uniqid() . '.' . $image_type
        // $jon->save();

        return redirect()->route('daftarSukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

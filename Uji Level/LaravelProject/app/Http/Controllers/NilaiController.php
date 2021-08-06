<?php

namespace App\Http\Controllers;

use App\Models\NilaiModel;
use App\Models\KdModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = NilaiModel::all();

        return view('admin.nilai', ['nilai' => $nilai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kd = KdModel::all();
        $siswa = SiswaModel::all();
        
        return view('admin.addnilai', ['kd' => $kd, 'siswa' => $siswa]);
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
            'id_siswa' => 'required',
            'id_kd' => 'required',
            'tugas' => 'required',
            'uh' => 'required',
            'uts' => 'required',
            'uas' => 'required',
            'proses' => 'required',
            'produk' => 'required',
            'projek' => 'required',
        ]);
        NilaiModel::create([
            'nisn_siswa' => $request->id_siswa,
            'id_kd' => $request->id_kd,
            'tugas' => $request->tugas,
            'uh' => $request->uh,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'proses' => $request->proses,
            'produk' => $request->produk,
            'projek' => $request->projek,
        ]);
        return redirect('/nilai')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NilaiModel  $nilaiModel
     * @return \Illuminate\Http\Response
     */
    public function show(NilaiModel $nilaiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NilaiModel  $nilaiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NilaiModel $nilaiModel)
    {
        return view('admin.editnilai', compact('nilaiModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NilaiModel  $nilaiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NilaiModel $nilaiModel)
    {
        NilaiModel::where('id', $nilaiModel->id)
        ->update([
            'id_siswa' => $request->id_siswa,
            'id_matpel' => $request->id_matpel,
            'tugas' => $request->tugas,
            'uh' => $request->uh,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'proses' => $request->proses,
            'produk' => $request->produk,
            'projek' => $request->projek,
        ]);
        return redirect('/nilai')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NilaiModel  $nilaiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NilaiModel $nilaiModel)
    {
        NilaiModel::destroy($nilaiModel->id);
        return redirect('/nilai')->with('status', 'Data Berhasil DiHapus');
    }
}

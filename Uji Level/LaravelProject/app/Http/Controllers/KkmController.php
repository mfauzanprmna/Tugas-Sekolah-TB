<?php

namespace App\Http\Controllers;

use App\Models\KkmModel;
use App\Models\KdModel;
use App\Models\MatpelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kkm = KkmModel::all();
        $kd = DB::table('kd')->select('id');
        $guru = GuruModel::all()->where('nipd');

        return view('guru.kkm', ['kkm' => $kkm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.addkkm');
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
            'id_ked' => 'required',
            'kompleksitas' => 'required',
            'daya_dukung' => 'required',
            'intake' => 'required',
            'skala100' => 'required',
            'skala4' => 'required',
        ]);
        KkmModel::create([
            'id_kd' => $request->id_kd,
            'kompleksitas' => $request->kompleksitas,
            'daya_dukung' => $request->daya_dukung,
            'intake' => $request->intake,
            'skala100' => $request->skala100,
            'skala4' => $request->skala4,
        ]);
        return redirect('/kkm')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KkmModel  $kkmModel
     * @return \Illuminate\Http\Response
     */
    public function show(KkmModel $kkmModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KkmModel  $kkmModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KkmModel $kkmModel)
    {
        return view('guru.editkkm', compact('KkmModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KkmModel  $kkmModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KkmModel $kkmModel)
    {
        KkmModel::where('id', $kkmModel->id)
                    ->update([
                        'id_kd' => $request->id_kd,
                        'kompleksitas' => $request->kompleksitas,
                        'daya_dukung' => $request->daya_dukung,
                        'intake' => $request->intake,
                        'skala100' => $request->skala100,
                        'skala4' => $request->skala4,
                    ]);
                    return redirect('/kkm')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KkmModel  $kkmModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KkmModel $kkmModel)
    {
        KkmModel::destroy($kkmModel->id);
        return redirect('/kkm')->with('status', 'Data Berhasil DiHapus');
    }

    public function cetak_pdf()
    {
        $kkm = KkmModel::all();

        $pdf = PDF::loadview('guru.kkmpdf', ['kkm' => $kkm]);
        return $pdf->stream();
    }
}

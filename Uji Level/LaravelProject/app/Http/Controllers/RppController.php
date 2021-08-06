<?php

namespace App\Http\Controllers;

use App\Models\RppModel;
use Illuminate\Http\Request;
use PDF;

class RppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rpp = RppModel::all();

        return view('guru.rpp', ['rpp' => $rpp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.addrpp');
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
            'id_kd' => 'required',
            'tujuan_pembelajaran' => 'required',
            'ipk_pengetahuan' => 'required',
            'ipk_keterampilan' => 'required',
            'materi_pembelajaran' => 'required',
        ]);
        RppModel::create([
            'id_kd' => $request->id_kd,
            'tujuan_pembelajaran' => $request->tujuan_pembelajaran,
            'ipk_pengetahuan' => $request->ipk_pengetahuan,
            'ipk_keterampilan' => $request->ipk_keterampilan,
            'materi_pembelajaran' => $request->materi_pembelajaran,
        ]);
        return redirect('/rpp')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RppModel  $rppModel
     * @return \Illuminate\Http\Response
     */
    public function show(RppModel $rppModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RppModel  $rppModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RppModel $rppModel)
    {
        return view('guru.editrpp', compact('rppModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RppModel  $rppModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RppModel $rppModel)
    {
        RppModel::where('id', $rppModel->id)
                    ->update([
                        'id_kd' => $request->id_kd,
                        'tujuan_pembelajaran' => $request->tujuan_pembelajaran,
                        'ipk_pengetahuan' => $request->ipk_pengetahuan,
                        'ipk_keterampilan' => $request->ipk_keterampilan,
                        'materi_pembelajaran' => $request->materi_pembelajaran,
                    ]);
                    return redirect('/rpp')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RppModel  $rppModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RppModel $rppModel)
    {
        RppModel::destroy($rppModel->id);
        return redirect('/rpp')->with('status', 'Data Berhasil DiHapus');
    }

    public function cetak_pdf()
    {
        $rpp = RppModel::all();

        $pdf = PDF::loadview('guru.rpppdf', ['rpp' => $rpp]);
        return $pdf->stream();
    }
}

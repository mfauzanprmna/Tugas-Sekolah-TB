<?php

namespace App\Http\Controllers;

use App\Models\KiModel;
use Illuminate\Http\Request;

class KiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ki = KiModel::all();

        return view('guru.ki', ['ki' => $ki]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.addki');
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
            'nama_kompetensi' => 'required',
            'kode_kompetensi' => 'required',
            'id_matpel' => 'required',
        ]);
        KkmModel::create([
            'nama_kompetensi' => $request->nama_kompetensi,
            'kode_kompetensi' => $request->kode_kompetensi,
            'id_matpel' => $request->id_matpel,
        ]);
        return redirect('/ki')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KiModel  $kiModel
     * @return \Illuminate\Http\Response
     */
    public function show(KiModel $kiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KiModel  $kiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KiModel $kiModel)
    {
        return view('guru.editki', compact('kiModel'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KiModel  $kiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KiModel $kiModel)
    {
        KkmModel::where('id', $kkmModel->id)
                    ->update([
                        'nama_kompetensi' => $request->nama_kompetensi,
                        'kode_kompetensi' => $request->kode_kompetensi,
                        'id_matpel' => $request->id_matpel,
                    ]);
                    return redirect('/kkm')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KiModel  $kiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KiModel $kiModel)
    {
        KiModel::destroy($kiModel->id);
        return redirect('/ki')->with('status', 'Data Berhasil DiHapus');
    }
}

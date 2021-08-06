<?php

namespace App\Http\Controllers;

use App\Models\KursusModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = KursusModel::all();

        return view('admin.kursus', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = GuruModel::all();

        return view('admin.addkursus', compact('guru'));
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
            'kelas' => 'required',
            'paket_keahlian' => 'required',
            'ruangan' => 'required',
            'nipd_walas' => 'required',
            'tahun_pelajaran' => 'required',
        ]);

        $keahlian = $request->paket_keahlian;
        $kelas = $request->kelas;
        $kelassub = substr($kelas, -1, 1);
        $tahun = date('Y');
        $tahunsub = substr($tahun, 2, 2);
        $kursus = strtolower("$tahunsub$keahlian$kelassub");

        KursusModel::create([
            'id_kursus' => $kursus,
            'kelas' => $kelas,
            'paket_keahlian' => $keahlian,
            'ruangan' => $request->ruangan,
            'nipd_walas' => $request->nipd_walas,
            'tahun_pelajaran' => $request->tahun_pelajaran,
        ]);

        return redirect('/kursus')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KursusModel  $kursusModel
     * @return \Illuminate\Http\Response
     */
    public function show(KursusModel $kursusModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KursusModel  $kursusModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KursusModel $kursusModel)
    {
        return view('admin.editkursus', compact('kursusModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KursusModel  $kursusModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KursusModel $kursusModel)
    {
        KursusModel::where('id_kursus', $kursusModel->id_kursus)
                    ->update([
                        'kelas' => $request->kelas,
                        'paket_keahlian' => $request->paket_keahlian,
                        'ruangan' => $request->ruangan,
                        'nipd_walas' => $request->nipd_walas,
                        'tahun_pelajaran' => $request->tahun_pelajaran,
                    ]);
                    return redirect('/kursus')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KursusModel  $kursusModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KursusModel $kursusModel)
    {
        KursusModel::destroy($kursusModel->id_kursus);
        return redirect('/kursus')->with('status', 'Data Berhasil DiHapus');
    }
}

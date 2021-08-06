<?php

namespace App\Http\Controllers;

use App\Models\KdModel;
use App\Models\GuruModel;
use App\Models\MatpelModel;
use App\Models\User;
use Illuminate\Http\Request;

class KdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kd = KdModel::all();

        return view('guru.kd', ['kd' => $kd]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $guru = GuruModel::all();
        $matpel = MatpelModel::all();

        return view('guru.addkd', ['guru' => $guru, 'matpel' => $matpel]);
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
            'no_kdpeng' => 'required',
            'no_kdket' => 'required',
            'kd_pengetahuan' => 'required',
            'kd_keterampilan' => 'required',
            'materi_pokok' => 'required',
            'pembelajaran' => 'required',
            'penilaian' => 'required',
            'alokasi_waktu' => 'required',
            'sumber_belajar' => 'required',
            'semester' => 'required',
            'id_guru' => 'required',
            'id_matpel' => 'required',
        ]);
        KdModel::create([
            'no_kdpeng' => $request->no_kdpeng,
            'no_kdket' => $request->no_kdket,
            'kd_pengetahuan' => $request->kd_pengetahuan,
            'kd_keterampilan' => $request->kd_keterampilan,
            'materi_pokok' => $request->materi_pokok,
            'pembelajaran' => $request->pembelajaran,
            'penilaian' => $request->penilaian,
            'alokasi_waktu' => $request->alokasi_waktu,
            'sumber_belajar' => $request->sumber_belajar,
            'semester' => $request->semester,
            'id_guru' => $request->id_guru,
            'id_matpel' => $request->id_matpel,
        ]);
        return redirect('/kd')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KdModel  $kdModel
     * @return \Illuminate\Http\Response
     */
    public function show(KdModel $kdModel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KdModel  $kdModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KdModel $kdModel)
    {
        return view('guru.editkd', compact('kdModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KdModel  $kdModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KdModel $kdModel)
    {
        KdModel::where('id', $kdModel->id)
                    ->update([
                        'kd_pengetahuan' => $request->kd_pengetahuan,
                        'kd_keterampilan' => $request->kd_keterampilan,
                        'materi_pokok' => $request->materi_pokok,
                        'pembelajaran' => $request->pembelajaran,
                        'penilaian' => $request->penilaian,
                        'alokasi_waktu' => $request->alokasi_waktu,
                        'semester' => $request->semester,
                        'id_guru' => $request->id_guru,
                        'id_matpel' => $request->id_matpel,
                    ]);
                    return redirect('/kd')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KdModel  $kdModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KdModel $kdModel)
    {
        KdModel::destroy($kdModel->id);
        return redirect('/kd')->with('status', 'Data Berhasil DiHapus');
    }
}

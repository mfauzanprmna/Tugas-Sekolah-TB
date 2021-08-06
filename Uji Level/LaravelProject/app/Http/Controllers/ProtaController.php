<?php

namespace App\Http\Controllers;

use App\Models\ProtaModel;
use Illuminate\Http\Request;

class ProtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prota = ProtaModel::all();

        return view('guru.prota', ['prota' => $prota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.addprota');
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
            'tm_gasal' => 'required',
            'jp_gasal' => 'required',
            'tm_genap' => 'required',
            'jp_genap' => 'required',
        ]);
        NilaiModel::create([
            'id_kd' => $request->id_kd,
            'tm_gasal' => $request->tm_gasal,
            'jp_gasal' => $request->jp_gasal,
            'tm_genap' => $request->tm_genap,
            'jp_genap' => $request->jp_genap,
        ]);
        return redirect('/prota')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProtaModel  $protaModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProtaModel $protaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProtaModel  $protaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProtaModel $protaModel)
    {
        return view('guru.editprota', compact('protaModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProtaModel  $protaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProtaModel $protaModel)
    {
        NilaiModel::where('id', $nilaiModel->id)
        ->update([
            'id_kd' => $request->id_kd,
            'tm_gasal' => $request->tm_gasal,
            'jp_gasal' => $request->jp_gasal,
            'tm_genap' => $request->tm_genap,
            'jp_genap' => $request->jp_genap,
        ]);
        return redirect('/nilai')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProtaModel  $protaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProtaModel $protaModel)
    {
        ProtaModel::destroy($protaModel->id);
        return redirect('/prota')->with('status', 'Data Berhasil DiHapus');
    }
}

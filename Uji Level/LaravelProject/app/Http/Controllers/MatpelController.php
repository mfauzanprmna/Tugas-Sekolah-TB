<?php

namespace App\Http\Controllers;

use App\Models\MatpelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class MatpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matpel = MatpelModel::all();

        return view('admin.matpel', ['mapel' => $matpel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = GuruModel::all();
        
        return view('admin.addmatpel', ['guru' => $guru]);
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
            'nama_matpel' => 'required',
            'matpel_kelas' => 'required',
            'id_guru' => 'required',
        ]);
        MatpelModel::create([
            'nama_matpel' => $request->nama_matpel,
            'matpel_kelas' => $request->matpel_kelas,
            'id_guru' => $request->id_guru,
        ]);
        return redirect('/matpel')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatpelModel  $matpelModel
     * @return \Illuminate\Http\Response
     */
    public function show(MatpelModel $matpelModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatpelModel  $matpelModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MatpelModel $matpelModel)
    {
        return view('admin.editmatpel', compact('matpelModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatpelModel  $matpelModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatpelModel $matpelModel)
    {
        MatpelModel::where('id', $matpelModel->id)
                    ->update([
                        'nama_matpel' => $request->nama_matpel,
                        'matpel_kelas' => $request->matpel_kelas,
                        'id_guru' => $request->id_guru,
                    ]);
                    return redirect('/matpel')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatpelModel  $matpelModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatpelModel $matpelModel)
    {
        MatpelModel::destroy($matpelModel->id);
        return redirect('/matpel')->with('status', 'Data Berhasil DiHapus');
    }
}

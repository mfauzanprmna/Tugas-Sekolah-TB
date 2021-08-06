<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use App\Models\User;
use App\Models\KursusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Request\FormRequestStore;
use Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = SiswaModel::all();

        return view('admin.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KursusModel::all();

        return view('admin.addsiswa', ['kelas' => $kelas]);
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
            'nisn' => 'required|max:10',
            'nama' => 'required',
            'telepon' => 'required',
            'tingkat' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        SiswaModel::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'photo' => 'default.png',
            'tingkat' => $request->tingkat,
            'jurusan' => $request->jurusan,
            'id_kelas' => $request->kelas,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Siswa',
            'photo' => 'default.png',
        ]);

        return redirect('/siswa')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $siswaModel)
    {
        $kelas = KelasModel::all();

        return view('admin.editsiswa', compact('siswaModel'), ['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaModel $siswaModel)
    {
        $this->validate($request, [
            'nama' => 'required',
            'telepon' => 'required',
            'tingkat' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'id_kelas' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $awal = $siswaModel->photo;
        SiswaModel::where('nisn', $siswaModel->nisn)
                    ->update([
                        'nama' => $request->nama,
                        'telepon' => $request->telepon,
                        'photo' => $awal,
                        'tingkat' => $request->tingkat,
                        'jurusan' => $request->jurusan,
                        'kelas' => $request->kelas,
                        'id_kelas' => $request->id_kelas,
                        'email' => $request->email,
                        'password' => $request->password,
                    ]);
        DB::table('users')->where('email', $siswaModel->email)
                    ->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'role' => 'Siswa',
                        'photo' => $awal,
                    ]);
                    return redirect('/siswa')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SiswaModel $siswaModel)
    {
        $hapus = SiswaModel::findorfail($siswaModel->nisn);

        SiswaModel::destroy($siswaModel->nisn);
        DB::table('users')->where('email', $siswaModel->email)->delete();
        return redirect('/siswa')->with('status', 'Data Berhasil DiHapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Request\FormRequestStore;
use Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = GuruModel::all();

        return view('admin.guru', ['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addguru');
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
            'nipd' => 'required|max:11',
            'nama' => 'required',
            'bidang' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        GuruModel::create([
            'nipd' => $request->nipd,
            'nama' => $request->nama,
            'photo' => 'default.png',
            'bidang' => $request->bidang,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'photo' => 'default.png',
        ]);
        return redirect('/guru')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function show(GuruModel $guruModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(GuruModel $guruModel, User $user)
    {
        return view('admin.editguru', compact('guruModel', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuruModel $guruModel)
    {
        $awal = $guruModel->photo;

        GuruModel::where('nipd', $guruModel->nipd)
                    ->update([
                        'nama' => $request->nama,
                        'photo' => $awal,
                        'bidang' => $request->bidang,
                        'jabatan' => $request->jabatan,
                        'email' => $request->email,
                        'password' => $request->password,
                    ]);
        DB::table('users')->where('email', $guruModel->email)
                    ->update([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'role' => $request->role,
                        'photo' => $awal,
                    ]);
                    return redirect('/guru')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruModel  $guruModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuruModel $guruModel)
    {
        $hapus = GuruModel::findorfail($guruModel->nipd);

        $file = public_path('/img/').$hapus->photo;

        if (file_exists($file)) {
            @unlink($file);
        }

        GuruModel::destroy($guruModel->nipd);
        DB::table('users')->where('email', $guruModel->email)->delete();
        return redirect('/guru')->with('status', 'Data Berhasil DiHapus');
    }
}

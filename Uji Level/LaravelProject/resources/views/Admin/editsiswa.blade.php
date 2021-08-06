@extends('template.template')

@section('content')
<form action="/siswa/{{ $siswaModel->nisn }}" method="POST" class="mt-5 mx-5" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <h4>Update Data Siswa</h4>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="nama" type="text" class="form-control phone-number" value="{{ $siswaModel->nama }}">
        </div>
    </div>

    <div class="form-group">
        <label>Phone Number (US Format)</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="telepon" type="text" class="form-control phone-number" value="{{ $siswaModel->telepon }}">
        </div>
    </div>

    <div class="form-group">
        <label>Tingkat</label>
        <select name="tingkat" class="form-control selectric" value="{{ $siswaModel->tingkat }}">
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
        <select name="jurusan" class="form-control selectric" value="{{ $siswaModel->jurusan }}">
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="RPL">RPL</option>
            <option value="BC">BC</option>
            <option value="TEI">TEI</option>
        </select>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <select name="kelas" class="form-control">
                <option value="{{ $siswaModel->id_kelas }}"><--- Pilih Kelas ---></option>
                <option value="{{ $kelas->id_kelas }}">{{ $kelas->kelas }}</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Id Kelas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="id_kelas" type="text" class="form-control phone-number" value="{{ $siswaModel->id_kelas }}">
        </div>
    </div>

    <div class="form-group">
        <label>Email</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="email" type="text" class="form-control phone-number" value="{{ $siswaModel->email }}">
        </div>
    </div>

    <div class="form-group">
        <label>Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <input name="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" value="{{ $siswaModel->password }}">
        </div>
        <div id="pwindicator" class="pwindicator">
            <div class="bar"></div>
            <div class="label"></div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

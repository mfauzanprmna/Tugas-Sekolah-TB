@extends('template.template')

@section('content')
<form action="/siswa" method="POST" class="mt-5 mx-5" enctype="multipart/form-data">
    @csrf
    <h4>Input Data Siswa</h4>
    <div class="form-group">
        <label>NISN</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="nisn" type="text" class="form-control phone-number">
            @error('nisn')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Nama Lengkap</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="nama" type="text" class="form-control phone-number">
            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
            <input name="telepon" type="text" class="form-control phone-number">
            @error('telepon')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Tingkat</label>
        <select name="tingkat" class="form-control selectric">
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
        <select name="jurusan" class="form-control selectric">
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
                <option value=""><--- Pilih Kelas ---></option>
                @foreach( $kelas as $kls )
                <option value="{{ $kls->id_kursus }}">{{ $kls->kelas }}</option>
                @endforeach
            </select>
            @error('kelas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
            <input name="email" type="text" class="form-control phone-number">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
            <input name="password" type="password" class="form-control pwstrength" data-indicator="pwindicator">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

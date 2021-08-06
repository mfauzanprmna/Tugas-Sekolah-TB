@extends('template.template')

@section('content')
<form action="/guru" method="POST" class="mt-5 mx-5" enctype="multipart/form-data">
    @csrf
    <h4>Input Data Guru</h4>
    <div class="form-group">
        <label>NIPD</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="nipd" type="text" class="form-control phone-number">
            @error('nipd')
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
        <label>Bidang</label>
        <select name="bidang" class="form-control selectric">
            <option value=""><--- Piih Bidang ---></option>
            <option value="Kurikulum">Kurikulum</option>
            <option value="KKG">KKG</option>
            <option value="POKJA">POKJA</option>
            <option value="Admin">Admin</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <select name="jabatan" class="form-control selectric">
            <option value=""><--- Piih Jabatan ---></option>
            <option value="Waka">Waka</option>
            <option value="Ketua">Ketua</option>
            <option value="Kaprog">Kaprog</option>
            <option value="Sekretaris">Sekretaris</option>
            <option value="Walas">Walas</option>
            <option value="Guru">Guru</option>
            <option value="Admin">Admin</option>
        </select>
    </div>

    <div class="form-group">
        <label>Privilege</label>
        <select name="role" class="form-control selectric">
            <option value=""><--- Piih Privilege ---></option>
            <option value="Admin">Admin</option>
            <option value="Kaprog">Kaprog</option>
            <option value="Walas">Walas</option>
            <option value="Guru">Guru</option>
        </select>
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
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="password" type="password" class="form-control phone-number">
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

@extends('template.template')

@section('content')
<form action="/nilai/{{ $nilaiModel->id }}" method="POST" class="mt-5 mx-5">
    @csrf
    <h4>Input Data Nilai</h4>
    <div class="form-group">
        <label>Id Siswa</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="id_siswa" type="text" class="form-control phone-number" value="{{ $nilaiModel->id_siswa }}">
            @error('id_siswa')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Id Matpel</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="id_matpel" type="text" class="form-control phone-number" value="{{ $nilaiModel->id_matpel }}">
            @error('id_matpel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Tugas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="tugas" type="text" class="form-control phone-number" value="{{ $nilaiModel->tugas }}">
            @error('tugas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Ulangan Harian</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="uh" type="text" class="form-control phone-number" value="{{ $nilaiModel->uh }}">
            @error('uh')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Ulangan Tengah Semester</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="uts" type="text" class="form-control phone-number" value="{{ $nilaiModel->uts }}">
            @error('uts')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Ulangan Akhir Semester</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="uas" type="text" class="form-control phone-number" value="{{ $nilaiModel->uas }}">
            @error('uas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Proses</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="proses" type="text" class="form-control phone-number" value="{{ $nilaiModel->proses }}">
            @error('proses')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Produk</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="produk" type="text" class="form-control phone-number" value="{{ $nilaiModel->produk }}">
            @error('produk')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Projek</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="projek" type="text" class="form-control phone-number" value="{{ $nilaiModel->projek }}">
            @error('projek')
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

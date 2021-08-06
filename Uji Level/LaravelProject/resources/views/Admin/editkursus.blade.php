@extends('template.template')

@section('content')
<form action="/kursus/{{ $kursusModel->id_kursus }}" method="POST" class="mt-5 mx-5">
    @method('patch')
    @csrf
    <h4>Update Data Kelas</h4>
    <div class="form-group">
        <label>Kelas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="kelas" type="text" class="form-control phone-number" value="{{ $kursusModel->kelas }}">
        </div>
    </div>

    <div class="form-group">
        <label>Paket Keahlian</label>
        <select name="paket_keahlian" class="form-control selectric" value="{{ $kursusModel->paket_keahlian }}">
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="RPL">RPL</option>
            <option value="BC">BC</option>
            <option value="TEI">TEI</option>
        </select>
    </div>

    <div class="form-group">
        <label>Ruangan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="ruangan" type="text" class="form-control phone-number" value="{{ $kursusModel->ruangan }}">
        </div>
    </div>

    <div class="form-group">
        <label>Walas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <select name="walas" class="form-control">
                <option value="{{ $kursusModel->nipd_guru }}"><--- Pilih Wali Kelas ---></option>
                <option value="{{ $guru->nipd }}">{{ $guru->nama }}</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Tahun Pelajaran</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-phone"></i>
                </div>
            </div>
            <input name="tahun_pelajaran" type="text" class="form-control phone-number" value="{{ $kursusModel->tahun_pelajaran }}">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

@extends('template.template')

@section('content')
<form action="/kursus" method="POST" class="mt-5 mx-5">
    @csrf
    <h4>Input Data Kelas</h4>

    <div class="form-group">
        <label>Kelas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="kelas" type="text" class="form-control phone-number">
            @error('kelas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Paket Keahlian</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <select name="paket_keahlian" class="form-control">
                <option value="TKJ">TKJ</option>
                <option value="MM">MM</option>
                <option value="RPL">RPL</option>
                <option value="BC">BC</option>
                <option value="TEI">TEI</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label>Ruangan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="ruangan" type="text" class="form-control phone-number">
            @error('ruangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Walas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <select name="nipd_walas" class="form-control">
                @foreach ($guru as $gr)
                    <option value="{{ $gr->nipd }}">{{ $gr->nama }}</option>
                @endforeach
            </select>
            @error('nipd_walas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
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
            <input name="tahun_pelajaran" type="text" class="form-control phone-number">
            @error('tahun_pelajaran')
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

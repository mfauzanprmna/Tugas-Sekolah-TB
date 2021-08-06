@extends('template.template')

@section('content')
<form action="/matpel" method="POST" class="mt-5 mx-5">
    @csrf
    <h4>Input Data Kelas</h4>
    <div class="form-group">
        <label>Nama Matpel</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="nama_matpel" type="text" class="form-control phone-number">
            @error('nama_matpel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Matpel Kelas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="matpel_kelas" type="text" class="form-control phone-number">
            @error('matpel_kelas')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label>Guru</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <select name="id_guru" class="form-control">
                @foreach ($guru as $gr)
                    <option value="{{ $gr->nipd }}">{{ $gr->nama }}</option>
                @endforeach
            </select>
            @error('id_guru')
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

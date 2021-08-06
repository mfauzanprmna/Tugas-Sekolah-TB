@extends('template.template')

@section('content')
<form action="/matpel/{{ $matpelModel->id }}" method="POST" class="mt-5 mx-5">
    @method('patch')
    @csrf
    <h4>Update Data Mata Pelajaran</h4>
    <div class="form-group">
        <label>Nama Matpel</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="nama_matpel" type="text" class="form-control phone-number" value="{{ $matpelModel->nama_matpel }}">
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
            <input name="matpel_kelas" type="text" class="form-control phone-number" value="{{ $matpelModel->matpel_kelas }}">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

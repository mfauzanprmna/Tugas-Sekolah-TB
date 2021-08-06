@extends('template.template')

@section('content')
<form action="/rpp/{{ $rppModel->id }}" method="POST" class="mt-5 mx-5">
    @method('patch')
    @csrf
    <h4>Input Data RPP</h4>
    <div class="form-group">
        <label>Id KD</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="id_kd" type="text" class="form-control phone-number" value="{{ $rppModel->id_kd }}">
        </div>
    </div>

    <div class="form-group">
        <label>Tujuan Pembelajaran</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="tujuan_pembelajaran" type="text" class="form-control phone-number" value="{{ $rppModel->tujuan_pembelajaran }}">
        </div>
    </div>

    <div class="form-group">
        <label>IPK Pengetahuan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="ipk_pengetahuan" type="text" class="form-control phone-number" value="{{ $rppModel->ipk_pengetahuan }}">
        </div>
    </div>

    <div class="form-group">
        <label>IPK Keterampilan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="ipk_keterampilan" type="text" class="form-control phone-number" value="{{ $rppModel->ipk_keterampilan }}">
        </div>
    </div>

    <div class="form-group">
        <label>Materi Pembelajaran</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="materi_pembelajaran" type="text" class="form-control phone-number" value="{{ $rppModel->materi_pembelajaran }}">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

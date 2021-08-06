@extends('template.template')

@section('content')
<form action="/kkm/{{ $kkmModel->id }}" method="POST" class="mt-5 mx-5">
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
            <input name="id_kd" type="text" class="form-control phone-number" value="{{ $kkmModel->id_kd }}">
        </div>
    </div>

    <div class="form-group">
        <label>Kompleksitas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="Kompleksitas" type="text" class="form-control phone-number" value="{{ $kkmModel->kompleksitas }}">
        </div>
    </div>

    <div class="form-group">
        <label>Daya Dukung</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="daya_dukung" type="text" class="form-control phone-number" value="{{ $kkmModel->daya_dukung }}">
        </div>
    </div>

    <div class="form-group">
        <label>Intake</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="intake" type="text" class="form-control phone-number" value="{{ $kkmModel->intake }}">
        </div>
    </div>

    <div class="form-group">
        <label>Skala 100</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="skala100" type="text" class="form-control phone-number" value="{{ $kkmModel->skala100 }}">
        </div>
    </div>

    <div class="form-group">
        <label>Skala 4</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="skala4" type="text" class="form-control phone-number" value="{{ $kkmModel->skala44 }}">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

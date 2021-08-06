@extends('template.template')

@section('content')
<form action="/rpp" method="POST" class="mt-5 mx-5">
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
            <input name="id_kd" type="text" class="form-control phone-number">
        </div>
    </div>

    <div class="form-group">
        <label>kompleksitas</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="kompleksitas" type="text" class="form-control phone-number">
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
            <input name="daya_dukung" type="text" class="form-control phone-number">
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
            <input name="intake" type="text" class="form-control phone-number">
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
            <input name="skala100" type="text" class="form-control phone-number">
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
            <input name="skala4" type="text" class="form-control phone-number">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

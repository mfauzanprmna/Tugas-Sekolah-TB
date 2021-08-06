@extends('template.template')

@section('content')
<form action="/kd/{{ $kdModel->id }}" method="POST" class="mt-5 mx-5">
    @method('patch')
    @csrf
    <h4>Input Data KD</h4>
    <div class="form-group">
        <label>KD Pengetahuan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input name="kd_pengetahuan" type="text" class="form-control phone-number" value="{{ $kdModel->kd_pengetahuan }}">
        </div>
    </div>

    <div class="form-group">
        <label>KD Keterampilan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="kd_keterampilan" type="text" class="form-control phone-number" value="{{ $kdModel->kd_keterampilan }}">
        </div>
    </div>

    <div class="form-group">
        <label>Materi Pokok</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="materi_pokok" type="text" class="form-control phone-number" value="{{ $kdModel->materi_pokok }}">
        </div>
    </div>

    <div class="form-group">
        <label>Pembelajaran</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="pembelajaran" type="text" class="form-control phone-number" value="{{ $kdModel->pembelajaran }}">
        </div>
    </div>

    <div class="form-group">
        <label>penilaian</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="penilaian" type="text" class="form-control phone-number" value="{{ $kdModel->penilaian }}">
        </div>
    </div>

    <div class="form-group">
        <label>Alokasi Waktu</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="alokasi_waktu" type="text" class="form-control phone-number" value="{{ $kdModel->alokasi_waktu }}">
        </div>
    </div>

    <div class="form-group">
        <label>Sumber Belajar</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="sumber_belajar" type="text" class="form-control phone-number" value="{{ $kdModel->sumber_belajar }}">
        </div>
    </div>

    <div class="form-group">
        <label>Id Guru</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="id_guru" type="text" class="form-control phone-number" value="{{ $kdModel->id_guru }}">
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
            <input name="id_matpel" type="text" class="form-control phone-number" value="{{ $kdModel->id_matpel }}">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

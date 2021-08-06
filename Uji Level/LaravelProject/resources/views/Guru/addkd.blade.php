@extends('template.template')

@section('content')
<form action="/kd" method="POST" class="mt-5 mx-5">
    @csrf
    <h4>Input Data KD</h4>
    <div class="form-group">
        <label>No Kd Pengetahuan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="no_kdpeng" type="text" class="form-control phone-number">
        </div>
    </div>

    <div class="form-group">
        <label>No Kd Keterampilan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="no_kdket" type="text" class="form-control phone-number">
        </div>
    </div>

    <div class="form-group">
        <label>KD Pengetahuan</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <input type="text" class="form-control phone-number" name="kd_pengetahuan">
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
            <input type="text" class="form-control phone-number" name="kd_keterampilan">
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
            <input type="text" class="form-control phone-number" name="materi_pokok">
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
            <input type="text" class="form-control phone-number" name="pembelajaran">
        </div>
    </div>

    <div class="form-group">
        <label>Penilaian</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input type="text" class="form-control phone-number" name="penilaian">
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
            <input name="alokasi_waktu" type="text" class="form-control phone-number">
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
            <input type="text" class="form-control phone-number" name="sumber_belajar">
        </div>
    </div>

    <div class="form-group">
        <label>Semester</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input type="text" class="form-control phone-number" name="semester">
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
            <select name="id_guru" class="form-control phone-number">
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
        <label>Id Matpel</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <input name="id_matpel" type="text" class="form-control phone-number">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
    </div>
</form>
@endsection

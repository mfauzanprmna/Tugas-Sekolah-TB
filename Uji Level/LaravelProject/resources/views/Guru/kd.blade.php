@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/kd/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah KD</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md text-center">
                <thead>
                    <tr>
                        <th rowspan="2">Kd Ke</th>
                        <th colspan="2">Kompetisi Dasar</th>
                        <th rowspan="2">Materi Pokok</th>
                        <th rowspan="2">Pembelajaran</th>
                        <th rowspan="2">Penilain</th>
                        <th rowspan="2">Alokasi Waktu</th>
                        <th rowspan="2">Sumber Belajar</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Kd Pengetahuan</th>
                        <th>Kd Keterapilan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $kd as $k )
                    <tr>
                        <td>KD {{ $k->id }}</td>
                        <td>{{ $k->kd_pengetahuan }}</td>
                        <td>{{ $k->kd_keterampilan }}</td>
                        <td>{{ $k->materi_pokok }}</td>
                        <td>{{ $k->pembelajaran }}</td>
                        <td>{{ $k->penilaian }}</td>
                        <td>{{ $k->alokasi_waktu }}</td>
                        <td>{{ $k->sumber_belajar }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/kd/{{ $k->id }}/edit" class="btn btn-warning">Update</a>
                            <form action="/kd/{{ $k->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

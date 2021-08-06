@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/kursus/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah Kelas</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>Id Kelas</th>
                        <th>Kelas</th>
                        <th>Paket Keahlian</th>
                        <th>Ruangan</th>
                        <th>Walas</th>
                        <th>Tahun Pelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $kelas as $kls )
                    <tr>
                        <td>{{ $kls->id_kursus }}</td>
                        <td>{{ $kls->kelas }}</td>
                        <td>{{ $kls->paket_keahlian }}</td>
                        <td>{{ $kls->ruangan }}</td>
                        <td>{{ $kls->walas }}</td>
                        <td>{{ $kls->tahun_pelajaran }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/kursus/{{ $kls->id_kursus }}/edit" class="btn btn-warning">Update</a>
                            <form action="/kursus/{{ $kls->id_kursus }}" method="POST">
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

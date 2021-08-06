@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/nilai/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah Mata Pelajaran</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>Id Siswa</th>
                        <th>Id Matpel</th>
                        <th>Tugas</th>
                        <th>UH</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Proses</th>
                        <th>Produk</th>
                        <th>Proses</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $nilai as $nli )
                    <tr>
                        <td>{{ $nli->id_siswa }}</td>
                        <td>{{ $nli->id_matpel }}</td>
                        <td>{{ $nli->tugas }}</td>
                        <td>{{ $nli->uh }}</td>
                        <td>{{ $nli->uts }}</td>
                        <td>{{ $nli->uas }}</td>
                        <td>{{ $nli->proses }}</td>
                        <td>{{ $nli->produk }}</td>
                        <td>{{ $nli->projek }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/nilai/{{ $nli->id }}/edit" class="btn btn-warning">Update</a>
                            <form action="/nilai/{{ $nli->id }}" method="POST">
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

@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/matpel/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah Mata Pelajaran</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>Id Matpel</th>
                        <th>Nama Matpel</th>
                        <th>Matpel Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mapel as $mtpl )
                    <tr>
                        <td>{{ $mtpl->id }}</td>
                        <td>{{ $mtpl->nama_matpel }}</td>
                        <td>{{ $mtpl->matpel_kelas }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/matpel/{{ $mtpl->id }}/edit" class="btn btn-warning">Update</a>
                            <form action="/matpel/{{ $mtpl->id }}" method="POST">
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

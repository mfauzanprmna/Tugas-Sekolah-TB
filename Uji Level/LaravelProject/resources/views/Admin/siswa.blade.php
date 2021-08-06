@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/siswa/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah Siswa</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>No Telepon</th>
                        <th>Photo</th>
                        <th>Tingkat</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $siswa as $ssw )
                    <tr>
                        <td>{{ $loop->count }}</td>
                        <td>{{ $ssw->nisn }}</td>
                        <td>{{ $ssw->nama }}</td>
                        <td>{{ $ssw->telepon }}</td>
                        <td>
                            <img src="{{ asset('img/' . $ssw->photo) }}" alt="" width="150px">
                        </td>
                        <td>{{ $ssw->tingkat }}</td>
                        <td>{{ $ssw->jurusan }}</td>
                        <td>{{ $ssw->id_kelas }}</td>
                        <td>{{ $ssw->email }}</td>
                        <td>{{ $ssw->password }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/siswa/{{ $ssw->nisn }}/edit" class="btn btn-warning">Update</a>
                            <form action="/siswa/{{ $ssw->nisn }}" method="POST">
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

@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">

            <a href="/guru/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah Guru</s>
                </button>
            </a>
    
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>NIPD</th>
                        <th>Nama Lengkap</th>
                        <th>Foto</th>
                        <th>Bidang</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $guru as $gr )
                    <tr>
                        <td>{{ $gr->nipd }}</td>
                        <td>{{ $gr->nama }}</td>
                        <td>
                            <img src="{{asset('img/' . $gr->photo )}}" alt="" width="150px">
                        </td>
                        <td>{{ $gr->bidang }}</td>
                        <td>{{ $gr->jabatan }}</td>
                        <td>{{ $gr->email }}</td>
                        <td>{{ $gr->password }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/guru/{{ $gr->nipd }}/edit" class="btn btn-warning">Update</a>
                            <form action="/guru/{{ $gr->nipd }}" method="POST">
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

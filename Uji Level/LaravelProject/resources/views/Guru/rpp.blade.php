@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">
            
            <a href="/rpp/create" class="text-white">
                <button class="btn btn-primary my-5">
                    <span style="font-size: 15px;">Tambah RPP</s>
                </button>
            </a>
            <a href="/rpp/cetakpdf" class="text-white">
                <button class="btn btn-info my-5">
                    <span style="font-size: 15px;">Cetak PDF</s>
                </button>
            </a>
                
            <table class="table table-bordered table-md">
                <thead>
                    <tr>
                        <th>Id RPP</th>
                        <th>Id KD</th>
                        <th>Tujuan Pembelajaran</th>
                        <th>IPK Pengetahuan</th>
                        <th>IPK Keterampilan</th>
                        <th>Materi Pembelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $rpp as $rp )
                    <tr>
                        <td>{{ $rp->id }}</td>
                        <td>{{ $rp->id_kd }}</td>
                        <td>{{ $rp->tujuan_pembelajaran }}</td>
                        <td>{{ $rp->ipk_pengetahuan }}</td>
                        <td>{{ $rp->ipk_keterampilan }}</td>
                        <td>{{ $rp->materi_pembelajaran }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/rpp/{{ $rp->id }}/edit" class="btn btn-warning">Update</a>
                            <form action="/rpp/{{ $rp->id }}" method="POST">
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

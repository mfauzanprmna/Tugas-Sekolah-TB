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
                        <th>Id KD</th>
                        <th>kompleksitas</th>
                        <th>Daya Dukung</th>
                        <th>Intake</th>
                        <th>Skala 100</th>
                        <th>Skala 4</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $kkm as $km )
                    <tr>
                        <td>{{ $km->id_kd }}</td>
                        <td>{{ $km->kompleksitas }}</td>
                        <td>{{ $km->daya_dukung }}</td>
                        <td>{{ $km->intake }}</td>
                        <td>{{ $km->skala100 }}</td>
                        <td>{{ $km->skala4 }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Detail</a>
                            <a href="/kkm/{{ $km->id }}/edit" class="btn btn-warning">Update</a>
                            <form action="/kkm/{{ $km->id }}" method="POST">
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

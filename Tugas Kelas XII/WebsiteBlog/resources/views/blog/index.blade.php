@extends('template/template')

@section('content')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog</h1>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('blog.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{!! $blog->content !!}</td>
                                    <td class="text-center">
                                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info btn-circle">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <br>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-circle">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <br>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash">  </i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Blog belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>  
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
@endsection

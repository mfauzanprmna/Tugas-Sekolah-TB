@extends('template/boostrap')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <h1 class="text-center">{{ $blog->title }}</h1>
                    <div class="text-center">
                        <img src="{{ Storage::url('public/blogs/').$blog->image }}" width="30%" class="rounded">
                    </div>
                    <div>
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
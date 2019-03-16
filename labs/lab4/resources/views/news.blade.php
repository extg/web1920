@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($news as $post)
    <div class="row my-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ $post->slug }}">{{ $post->title }}</a>
                </div>

                <div class="card-body">
                    {{ $post->description }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
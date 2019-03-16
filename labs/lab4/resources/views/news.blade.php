@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-md-8">
            <h2>
                Recent posts
                <small>
                    <a class="text-muted" href="/add">Add new</a>
                </small>
            </h2>
        </div>
    </div>

    @foreach ($news as $post)
    <div class="row my-2">
        <div class="col-md-8">
            <div class="card bg-dark">
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

    {{ $news->links() }}
</div>
@endsection

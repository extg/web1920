@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-md-8">
            <h2>
                Recent posts
                <a href="/add" class="ce nr ags">Add new</a>
            </h2>
        </div>
    </div>

    @foreach ($news as $post)
    <div class="row my-2">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
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

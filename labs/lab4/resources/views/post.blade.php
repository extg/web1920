@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    {{ $post->title }}
                </div>

                <div class="card-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

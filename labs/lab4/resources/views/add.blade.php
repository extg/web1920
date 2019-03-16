@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-md-8">
            <form method="post" action="add">
                {{ csrf_field() }}
                <h2>
                    New post
                </h2>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" name="slug">
                    @if($errors->has('slug'))
                    <span class="help-block">{{ $errors->first('slug') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Short description</label>
                    <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="3" name="description"></textarea>
                    @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" id="content" rows="3" name="content"></textarea>
                    @if($errors->has('content'))
                    <span class="help-block">{{ $errors->first('content') }}</span>
                    @endif
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

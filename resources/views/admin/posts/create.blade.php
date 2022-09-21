@extends('layouts.app')

@section('content')
    <div class="container-lg mt-5">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <input type="text" class="form-control" id="author" name="author" required value="{{ old('author', $post->author) }}">
            </div>
            @include('admin.posts.include.form')
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
    </div>
@endsection
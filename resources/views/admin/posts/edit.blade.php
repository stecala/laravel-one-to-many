@extends('layouts.app')

@section('content')
    <div class="container-lg mt-5">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <input type="text" class="form-control" id="author" name="author" required value="{{ old('author', $post->author) }}" readonly>
            </div>
            @include('admin.posts.include.form')
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>
@endsection
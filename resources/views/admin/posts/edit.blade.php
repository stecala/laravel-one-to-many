@extends('layouts.app')

@section('content')
    <div class="container-lg mt-5">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
        
            @include('admin.posts.include.form')
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>
@endsection
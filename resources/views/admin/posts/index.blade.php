@extends('layouts.app')

@section('content')
    <div class="container-lg mt-5">
      @if (session('delete'))
        <div class="delete-div p-2 mb-3">
          Il post con id {{ session('delete') }} è stato eliminato!
        </div>
      @endif
      <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Add</a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->id }}</a></td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->post_date }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a></td>
                    <td>
                      <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    </td>
                </tr>
                @empty
                    
                @endforelse
                

            </tbody>
          </table>
          
    </div>


@endsection
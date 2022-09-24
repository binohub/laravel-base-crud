@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                @if (session('deleted'))   
                    <div class="alert alert-danger">
                        {{ session('deleted') }}
                    </div>
                @endif

                <table class="table table-dark table-borderless">
                    <thead>
                        <tr>
                            <th>id</td>
                            <th>title</td>
                            <th>author</td>
                            <th>
                                </td>
                    </thead>
                    <tbody>

                        @forelse ($posts as $post)
                            <tr>
                                <th>{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-primary">
                                        View
                                    </a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                                        Edit
                                    </a>
                                    <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h1 class="text-center">No Posts</h1>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

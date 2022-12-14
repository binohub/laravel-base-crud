@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form action="{{ route('admin.posts.store', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    @include('admin.posts.include.form')
                </form>

            </div>
        </div>
    </div>
@endsection

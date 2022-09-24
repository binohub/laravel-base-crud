@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                @if (session('created'))   
                    <div class="alert alert-success">
                        {{ session('created') }}
                    </div>
                @endif
                @if (session('updated'))   
                    <div class="alert alert-success">
                        {{ session('updated') }}
                    </div>
                @endif
                <div class="card bg-dark text-white">
                    <img src="{{ $post->image }}" class="card-img" alt="{{ $post->image }}">
                    <div class="card-img-overlay">
                        <h1 class="card-title text-uppercase">{{ $post->title }}</h1>
                        <h6 class="text-uppercase font-italic">{{ $post->author }}</h6>
                        <p class="card-text text-lowercase">{{ $post->description }}</p>
                        <p class="text-lowercase font-italic">{{ $post->date }}</p>
                    </div>
                    
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-sm btn-success">
                            Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            Remove
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

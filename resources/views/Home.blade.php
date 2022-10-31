@extends('Master.Layout')

@section('title')
    Home Page
@endsection

@section('style')
    <style>
        body {
            background-color: #000;
        }
    </style>
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card h-100">
                            <img src="{{ $post->image }}">
                            <div class="card-body">
                                <h2 class="card-title">{{ $post->title }}</h2>
                                <p class="card-text">{{ Str::limit($post->body) }}</p>
                                <a href="#" class="btn btn-primary">See</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center my-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        // alert('hello from home');
    </script>
@endsection

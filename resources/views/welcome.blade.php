@extends('Master.Layout')

@section('title')
    Welcome
@endsection

@section('style')
    <style>
        body {
            background-color: #d4d;
            color: white
        }
    </style>
@endsection

@section('content')
    <div class="row my-4">
        <div class="col-md-8">
            <h1>Hello From Welcome Page</h1>
        </div>
    </div>
@endsection



@section('script')
    <script>
        alert('hello from welcome');
    </script>
@endsection

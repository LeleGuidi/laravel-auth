@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <a href="{{route('admin.posts.create')}}"><button class="btn btn-primary"> Crea nuovo post</button></a>
        </div>
    </div>
@endsection
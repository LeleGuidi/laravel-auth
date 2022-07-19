@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Riassunto</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Pubblico</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post['id']}}</th>
                            <td>{{$post['title']}}</td>
                            <td>{{substr($post['content'], 0, 20)}}</td>
                            <td>{{$post['slug']}}</td>
                        </tr> 
                    @endforeach
                </tbody>
              </table>
            <a href="{{route('admin.posts.create')}}"><button class="btn btn-primary">Crea nuovo post</button></a>
        </div>
    </div>
@endsection
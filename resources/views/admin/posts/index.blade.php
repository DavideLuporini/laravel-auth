@extends('layouts.app');

@section('content')
    <div class="container">
        <header>
            <h1>
                My Posts
            </h1>
        </header>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">CONTENT</th>
                <th scope="col">DATE</th>
                <th scope="col">FEATURE</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)  
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td class="d-flex justify-content-start align-items-center">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>
                </td>
              </tr>
                  @empty
                  <h1>no post</h1>
                  @endforelse

            </tbody>
          </table>
          
    </div>
@endsection
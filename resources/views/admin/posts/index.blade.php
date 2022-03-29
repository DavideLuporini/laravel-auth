@extends('layouts.app');

@section('content')
    <div class="container">
        <header class="d-flex justify-content-center align-content-center my-3 ">
            <h1>
                My Posts
            </h1>
        </header>
        <hr>

        {{-- create new post --}}
        <div class="card">
            <a class="btn btn-success btn-lg" href="{{ route('admin.posts.create') }}">
               <span>Add New post</span>
                  <i class="fa-solid fa-plus"></i>
               </a>
            </div>
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

                {{-- show  --}}
                <td class="d-flex justify-content-start align-items-center">
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i></a>

                    <a class="btn btn-secondary btn-sm mx-3" href="{{ route('admin.posts.edit', $post->id) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                     </a>
                </td>
              </tr>
                  @empty
                  <h1>no post</h1>
                  @endforelse

            </tbody>
          </table>
          
    </div>
@endsection
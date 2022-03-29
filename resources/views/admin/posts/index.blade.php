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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)  
                <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
              </tr>
                  
                  @empty
                  <h1>no post</h1>
                  @endforelse

            </tbody>
          </table>
          
    </div>
@endsection
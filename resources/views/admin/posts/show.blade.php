@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="mb-3">{{$post->title}}</h1>
    <div class="clearfix">
    @if ($post->image)
     <img src="{{$post->image}}" alt="{{$post->title}}" class="float-right mr-2">
     @endif
     <p>{{$post->content}}</p>
     <time>{{$post->created_at}}</time>
     <div class="d-flex align-items-center justify-content-end">
    </div>
</div>
</div>
<div class="d-flex justify-content-end align-items-end my-5">
    <a href="{{route('admin.posts.index')}}" class="btn btn-sm btn-warning mr-5"> BACK</a>
</div>
@endsection
@extends('layouts.app');

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-12">
            <form method="POST" action="{{ route('admin.posts.store') }}">
               @csrf
               <div class="row text-center d-flex align-content-center justify-content-center flex-column">

                  <label for="title">Title</label>
                  <div class="col-12">
                     <input type="text" id="title" name="title" value="{{old('title')}}">
                  </div>

                  <label for="description">descripton</label>
                  <div class="col-12">
                     <textarea name="description" id="description">{{old('description')}}</textarea>
                  </div>

                  <div class="col-12 text-center">
                     <div class="h-100 w-100 d-flex justify-content-center align-items-start">
                        <button type="submit" class="btn btn-primary me-3">send</button>
                        <button type="reset" class="btn btn-warning">clear</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
@extends('layouts.layout')

@section('content')

<div class="container">
 <!-- first row -->
 {{-- <h1></h1> --}}
 @if(count($posts) > 0)
       @foreach($posts as $post)
       <div class="row">
         <!-- first item -->
         <div class="col-sm-12 col-md-12 mt-5">
           <div class="card">
             <div class="card-header">
             <h3>{{$post->title}}</h3>
             </div>
             <div class="card-body">
               <h5 class="card-title">Special title treatment</h5>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               <a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
             </div>
             <div class="card-footer text-muted">
                 <small>Written on {{$post->created_at}}</small>
             </div>
           </div>
         </div>
       </div>
       @endforeach
       {{$posts->links()}}
     @else
       <p> no posts found</p>
     @endif
  
</div>

<!-- footer -->
<div class="container-fluid footer">

</div>
<!-- end footer -->

@endsection















{{-- @extends('layouts.layout')

@section('content')

<h1>Posts</h1>
@if(count($posts) > 1)
      @foreach($posts as $post)
      <div class="row">
        <!-- first item -->
        <div class="col-sm-12 col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
            <h3>{{$post->title}}</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                <small>Written on {{$post->created_at}}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @else
      <p> no posts found</p>
    @endif

@endsection --}}
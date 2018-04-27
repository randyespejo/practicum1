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
             <h5 class="card-title">{{$post->title}}</h5>
             <p class="card-text">{{$post->body}}</p>
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

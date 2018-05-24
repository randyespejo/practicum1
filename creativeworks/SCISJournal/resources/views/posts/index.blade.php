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
           <div class="container">
             <div class="card-header">
             <h3>{{$post->category}}</h3>
             </div>
             <div class="body ml-2 mb-3 mt-3">
             <h5 class="card-title">{{$post->title}}</h5>
             <p class="card-text">{{str_limit($post->body,$limit= 200, $end='...')}}</p>
               <a href="/posts/{{$post->id}}" class="btn btn-primary">See Full Details</a>
             </div>
             <div class="card-footer text-muted mb-4">
             <small>Posted on {{$post->updated_at}} by {{$post->user->name}}</small>
             </div>
           </div>
         </div>
       </div>
       @endforeach
       {{$posts->links()}}
     @else
      <div class="text-center mt-5">
       <h3>No Posts Found</h3>
      </div>
     @endif

</div>

@endsection

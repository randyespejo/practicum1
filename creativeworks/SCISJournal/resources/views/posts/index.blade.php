@extends('layouts.layout')
{{-- @extends('layouts.app') --}}

@section('content')

<div class="container">
 <!-- first row -->
 {{-- <h1></h1> --}}
 @if(count($posts) > 0)
       @foreach($posts as $post)
       <div class="row">
         <!--Posts -->
         <div class="col-sm-12 col-md-12 mt-5">
           <div class="card">
             <div class="card-header">
             <h3>{{$post->category}}</h3>
             </div>
             <div class="card-body col-9">
             <h5 class="card-title">{{$post->title}}</h5>
             <iframe src="/storage/items/{{$post->item}}" width="100%" height="300"></iframe>
             {{-- <img style ="width:100%" src="/storage/items/{{$post->item}}" alt=""> --}}
             <p class="card-text">{{str_limit($post->body,$limit= 200, $end='...')}}</p>
               <a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
             </div>
             <div class="card-footer text-muted">
             <small>Posted on {{$post->updated_at}} by {{$post->user->name}}</small>
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

@endsection

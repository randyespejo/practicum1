@extends('layouts.layout')

@section('content')

<div class="container mt-5">
    <a href="/posts" class='btn btn-secondary'>Back</a>
 <!-- first row -->
       <div class="row">
         <!-- first item -->
         <div class="col-sm-12 col-md-12 mt-4">
           <div class="card">
             <div class="card-header">
             <h3>{{$post->category}}</h3>
             </div>
             <div class="card-body">
             <h5 class="card-title">{{$post->title}}</h5>
             <p class="card-text">{{$post->body}}</p>
             </div>
             <div class="card-footer text-muted">
                 <small>Posted on {{$post->updated_at}} by {{$post->user->name}}</small>
             </div>
           </div>
         </div>
       </div>
       @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
        <div class="row mt-4">
        <div class="col-2 ml-auto">
        <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
        </div>
        <div class="col-10 ml-auto">
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'text-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button('Delete',array('class' => 'btn btn-danger', 'type' => 'submit'))}}
            {!!Form::close()!!}
            </div>
        </div>
            @endif
            @endif
</div>
        
@endsection

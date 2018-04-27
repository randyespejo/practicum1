@extends('layouts.layout')

@section('content')

<div class="container">
    <a href="/posts" class='btn btn-light'>BACK</a>
 <!-- first row -->
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
             </div>
             <div class="card-footer text-muted">
                 <small>Written on {{$post->created_at}}</small>
             </div>
           </div>
         </div>
       </div>
       <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

      {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete',['btn btn-danger'])}}
      {!!Form::close()!!}
</div>

<!-- footer -->
<div class="container-fluid footer">

</div>
<!-- end footer -->

@endsection

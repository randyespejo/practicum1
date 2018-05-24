@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row mb-2">
                        <div class="col-6 text-left">
                            <h3>Your Posts</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        </div>
                    </div>

                    <div class="row">
                    @if(count($posts) > 0)
                    <table class="table">
                            <tr class="text-center">
                                <th>TITLE</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr class="text-center">
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::button('Delete',array('class' => 'btn btn-danger', 'type' => 'submit'))}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        <div class="container mt-3">
                            <div class="text-center">
                                <h5>You don't have posts yet!</h5>
                            </div>
                        </div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

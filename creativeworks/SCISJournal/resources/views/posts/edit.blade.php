@extends('layouts.layout')

@section('content')

{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}

<div class="container">
    <div class="row">
        <div class="col-2">

            </div>
            <div class="col-8">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-md-offset-2 mt-3">

                            <h1>Edit Post</h1>
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-12 mt-2">
                                        {{Form::label('title', 'Title')}}
                                        {{Form::text('title', $post->title,['id' => 'validationcustom01', 'class' => 'form-control', 'placeholder' => 'Title'])}}
                                        {{-- <label for="validationCustom01">Title</label>
                                        <input type="text" class="form-control" id="validationCustom01" required>
                                        <div class="invalid-feedback">
                                            This field is required!
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="category" class="col-md-12 mt-3 control-label">Choose Category</label>
                                    <div class="col-md-3">
                                        <select name="category">
                                            <option value="No Category">Choose...</option>
                                            <option value="Announcements">Announcements</option>
                                            <option value="Activities">Activities</option>
                                            <option value="Employment and Internship">Employment and Internship</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mt-3">
                                        {{Form::label('body', 'Description')}}
                                        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'place-holder' => 'Description'])}}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="input-group input-file mt-3">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Attach file...' />
                                        <span class="input-group-btn">
                                            <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="mt-3">
                                        {{Form::hidden('_method', 'PUT')}}
                                        {{Form::submit('Post', ['class' => 'btn btn-primary'])}}
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-2">

        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection

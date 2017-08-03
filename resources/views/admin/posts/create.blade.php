@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create A Post
        </div>
        <div class="panel-body">
                {{Form::open(['url' => 'post/store', 'files' => 'true'])}}
                {{csrf_field()}}

                {{Form::label('title','Title')}}
                {{Form::text('title')}}
                <hr>
                {{Form::label('featured', 'Image')}}
                {{Form::file('featured')}}
                <hr>
                {{Form::label('content', 'Content')}}
                <br>
                {{Form::textArea('content', 'Lorem Ipsum Life Here..', ['size' => '50x5'])}}
                <hr>
                <div class="text-center">
                {{Form::submit('submit',['class' => 'btn btn-success'])}}
                </div>


        </div>
    </div>


@stop

@extends('app')

@section('title', 'Articles')


        <!DOCTYPE html>
<html>
</head>
<h1>Edit: {!! $article->title !!}</h1>
<body>
@section('content')

	<h1>Edit: {!! $article->title !!}</h1>
    {!! Form::model($article,['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

    @include('articles._form',['submitButton' => 'Edit Article'])

    {!! Form::close() !!}

    @include('errors.list')
@stop
</body>
</html>

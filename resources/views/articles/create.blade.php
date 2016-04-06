@extends('app')

@section('title', 'Articles')


        <!DOCTYPE html>
<html>
</head>
<h1>Write an Article</h1>
<body>
@section('content')

    {!! Form::open(array('url' => 'articles')) !!}

	@include('articles._form',['submitButton' => 'Add Article'])

    {!! Form::close() !!}

    @include('errors.list')
@stop
</body>
</html>

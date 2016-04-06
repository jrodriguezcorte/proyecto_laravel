@extends('app')

@section('title', 'Articles')


        <!DOCTYPE html>
<html>
</head>
<h1>Articles</h1>
<body>
@section('content')
     @foreach($articles as $article)
        <article>
            <h2><a href="{{ action('ArticlesController@show', $article->id) }}">{{ $article->title }}</a></h2>
            <br>
        </article>
        <div class="body">
            {{ $article->body  }}
        </div>
     @endforeach
@stop
</body>
</html>
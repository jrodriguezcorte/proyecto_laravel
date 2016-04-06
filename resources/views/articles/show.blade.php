@extends('app')

@section('title', 'Articles')


        <!DOCTYPE html>
<html>
</head>
<h1>Articles</h1>
<body>
@section('content')
        <article>
            <h2>{{ $article->title }}</h2>
        </article>
        <div class="body">
            {{ $article->body  }}
        </div>

        @unless($article->tags->isEmpty())
        <h5>Tags:</h5>
        <ul>
            @foreach ($article->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
        @endunless
@stop
</body>
</html>
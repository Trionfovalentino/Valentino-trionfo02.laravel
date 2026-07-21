<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
</head>
<body>
    @include('navbar')

    <p><a href="{{ route('articles.index') }}">&larr; Torna all'elenco articoli</a></p>

    <h1>{{ $article['title'] }}</h1>
    <p><em>Categoria: {{ $article['category'] }}</em></p>
    
    <div style="margin-top: 20px;">
        <p>{{ $article['content'] }}</p>
    </div>
</body>
</html>
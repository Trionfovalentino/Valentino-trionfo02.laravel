<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <p><a href="{{ route('articles.index') }}">&larr; Torna all'elenco articoli</a></p>

    <h1>{{ $article['title'] }}</h1>
    <p><em>Categoria: {{ $article['category'] }}</em></p>
    
    <div style="margin-top: 20px;">
        <p>{{ $article['content'] }}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>{{ $article['title'] }}</h1>
<<<<<<< HEAD
    <p><em>Categoria: {{ $article['category'] }}</em></p>
    
    <div style="margin-top: 20px;">
        <p>{{ $article['content'] }}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
=======
    <p>{{ $article['body'] }}</p>

    <a href="{{ route('articles.index') }}">Torna alla lista degli articoli</a>
>>>>>>> cf6176d (Selfwork completato)
</body>
</html>

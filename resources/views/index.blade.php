<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tutti gli Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <h1>Elenco degli Articoli</h1>

    <ul>
        @foreach($articles as $article)
            <li>
                <h3>{{ $article['title'] }}</h3>
                <p><strong>Categoria:</strong> {{ $article['category'] }}</p>
                <p>{{ $article['summary'] }}</p>
                <a href="{{ route('articles.show', ['id' => $article['id']]) }}">Leggi l'articolo completo</a>
            </li>
            <br>
        @endforeach
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

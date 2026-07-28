<!DOCTYPE html>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tutti gli Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Tutti gli Articoli</h1>

    <ul>
        @foreach ($articles as $article)
            <li>
                <h3>{{ $article['title'] }}</h3>
                <p>{{ $article['description'] }}</p>
                <a href="{{ route('articles.show', ['id' => $article['id']]) }}">Leggi di più</a>
            </li>
        @endforeach
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

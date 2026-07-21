<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog con Controller - Home</title>
</head>
<body>
    @include('navbar')

    <h1>Benvenuto sul Blog Tech & Gaming!</h1>
    <p>Questo progetto utilizza i <strong>Controller</strong> in Laravel per separare la logica dalle rotte.</p>
    <p><a href="{{ route('articles.index') }}">Sfoglia tutti gli articoli &rarr;</a></p>
</body>
</html>
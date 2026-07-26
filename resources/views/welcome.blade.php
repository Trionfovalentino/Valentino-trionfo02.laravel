<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Blog con Controller - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('navbar')

    <h1>Benvenuto sul Blog Tech & Gaming!</h1>
    <p>Questo progetto utilizza i <strong>Controller</strong> in Laravel per separare la logica dalle rotte.</p>
    <p><a href="{{ route('articles.index') }}">Sfoglia tutti gli articoli &rarr;</a></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

{{-- A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
la quale mostrerà dei semplici contenuti, come ad esempio un titolo 'Homepage'.
Bonus:
Creiamo una seconda pagina definendo una nuova rotta nel file web.php stabilendo path e file blade.php associato. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuti in Laravel</h1>
    <a href="/rotta2.blade.php">BONUS</a>
</body>
</html>
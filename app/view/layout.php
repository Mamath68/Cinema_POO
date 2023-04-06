<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header>
        <nav>
            <ul class="ul">
                <li class="list"><a class="href" href="index.php">Accueil</a></li>
                <li class="list"><a class="href" href="index.php?action=listFilms">Films</a></li>
                <li class="list"><a class="href" href="index.php?action=listActeurs">Acteurs</a></li>
                <li class="list"><a class="href" href="index.php?action=listRealisateurs">Réalisateurs</a></li>
                <li class="list"><a class="href" href="index.php?action=listGenres">Genres</a></li>
            </ul>
            <!-- <button class="btn btn-primary" type="submit"><a class="href" href="#">ADD</a></button> -->
        </nav>
    </header>
    <main>
        <?= $contenu ?>
    </main>
    <footer>
        <nav>
            <ul class="ul">
                <li class="list"><a class="href" href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                <li class="list"><a class="href" href="https://twitter.com/?lang=fr" target="_blank">Twitter</a></li>
                <li class="list"><a class="href" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>
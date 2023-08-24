<?php
// <!-- Le format Timestamp UNIX est un format de mesure de date très utilisé en programmation -->
// <!-- Pour obtenir le Timestamp actuel en PHP, c’est-à-dire le nombre de secondes écoulées
// entre le 1er janvier 1970 à minuit GMT et le moment actuel, nous allons utiliser la fonction time(). -->
$currentTimestamp = time();
$dateStr = '2016-08-12 15:00:00';
// La fonction strtotime() essaye de lire une date au format anglais fournie par le paramètre time,
// et de la transformer en timestamp Unix (le nombre de secondes depuis le 1er Janvier 1970 à 00:00:00 UTC)
$defineTimestamp = strtotime($dateStr);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 4</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Les dates</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-1/exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-2/exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-4/index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-6/index.php">Exercice 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-7/index.php">Exercice 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-8/index.php">Exercice 8</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/TP/index.php">TP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-5">Exercice 4</h1>
                <p class="text-center fs-4">
                    Afficher le timestamp du jour. <br>
                    Afficher le timestamp du <strong>mardi 2 août 2016 à 15h00.</strong>
                </p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <p> timestamp du jour : <?php echo $currentTimestamp ?> </p>
            <p> Timestramp du mardi 2 août 2016 à 15H00 : <?php echo $defineTimestamp ?> </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
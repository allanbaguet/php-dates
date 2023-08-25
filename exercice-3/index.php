<?php
$date = new DateTime('now');
$dateFormatedFr = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
$dateFormatedEn = new IntlDateFormatter('en_EN', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
$dateFormated->setPattern('EEEE dd MMMM Y');
$dateFormatedEn->setPattern('EEEE dd MMMM Y');
$dateFr = $dateFormated->format($date);
$dateEn = $dateFormatedEn->format($date);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 3</title>
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
                        <a class="nav-link active" aria-current="page" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-4/index.php">Exercice 4</a>
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
                <h1 class="text-center p-5">Exercice 3</h1>
                <p class="text-center fs-4">
                    Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) <br>
                    <strong>Bonus</strong> : Le faire en français.
                </p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <!-- setlocale permet de modifier et de définir des information en local
            fr fra et fr_FR permet de couvrir un plus grand nombre système d'opération -->
            <!-- <?php setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']); ?> -->
            <p> la date courante avec le jour et le mois en toutes lettres et en français :
                <!-- %A -> jour de la semaine en toute lettre en anglais 
                %d -> jour du mois en 2 chiffres 
                %B -> mois de l'année en toute lettre 
                %Y -> l'année sur 4 chiffres
                utf8_encode -> permet aux caractères spéciaux d'être encodée correctement (ici août) -->
                <!-- ucwords permet de mettre les lettre en uppercase -->
                <?= ucwords($dateFr) ?> </p> 
            <p> et en anglais : 
                <?= ucwords($dateEn) ?> </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
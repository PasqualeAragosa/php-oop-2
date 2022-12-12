<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

// L'e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).


require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Type.php';

$products = [

    $gomitolo = new Product('Gomitolo', 'Gomitolo di lana pastello, 100% cotone, 10 colori pastello, gomitoli da 29 m, per lavori a maglia e uncinetto e per piccoli progetti di bricolage, Confezione da 10 x 29m', '9,99', new Category('Cat'), new Type('Giocattolo'), 'Lana Del Rey & Co.'),

    $ball = new Product('Palla', 'Palla per Cani con Funzione di Cura Dentale nubi per Cani Giocattolo in Gomma Naturale - Robusta Palla Giocattolo per Cani Grandi e Piccoli - Giocattolo da Masticare per Tratta Ø 7cm', '12,99', new Category('Dog'), new Type('Giocattolo'), 'Dog-eBall'),

    $bowl = new Product('Ciotola', 'Ciotola per Cani e Gatti in Acciaio Inossidabile,Ciotola Inclinabile per Gatti e Cuccioli, Ciotola per Animali Antiscivolo', '9,99', new Category('Cat'), new Type('Contenitore'), 'PetKit'),
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pet Shop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bs-5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pet Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dog</a></li>
                                <li><a class="dropdown-item" href="#">Cat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bowl</a></li>
                                <li><a class="dropdown-item" href="#">Feed</a></li>
                                <li><a class="dropdown-item" href="#">Pet's Bed</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="wrapper my-5">
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-3">
                            <div class="card" style="width: 18rem;">
                                <img src="./assets/img/Gomitolo.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->name ?></h5>
                                    <p class="card-text">
                                        <?= $product->descrption ?>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">€ <?= $product->price ?></li>
                                    <li class="list-group-item"><?= $product->brand ?></li>
                                    <li class="list-group-item"><?= $product->categories->get_name() ?></li>
                                    <li class="list-group-item"><?= $product->type->get_name() ?></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.col -->
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </main>

    <!-- Bs-5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
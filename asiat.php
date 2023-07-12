<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

    
    <?php
include('assets/exo_php/header.php')
?>
    
    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-light merriweather">Nos variétés</h3>
            </div>
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/asiatvegi.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                                cheeseburger, double steack, big burger...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/porcara.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">porc caramel</h5>
                            <p class="card-text">
                                chorizo, tartiflette, saumon...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/mer.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">fruits de mer</h5>
                            <p class="card-text">
                                truffes, carbonara, légumes...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/nems.png" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">nems</h5>
                            <p class="card-text">
                                sushis, nems, ramens...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/sushis.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">sushis</h5>
                            <p class="card-text">
                                boeuf, poisson, poulet...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">wrap</h5>
                            <p class="card-text">
                                poulet, boeuf, poisson...
                            </p>
                            <a class="btn btn-primary" href="wrap.php">Passer au wrap</a>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>
    
    <br><br>
    <?php
include('assets/exo_php/footer.php')
?>


		<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
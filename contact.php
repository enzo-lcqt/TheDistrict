<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />

    <style>
        body {
            background-color: rgba(0, 0, 0, 0.55);
        }
    </style>

</head>
<body>
    <nav class="cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase mx-4 py-3 fw-bolder" href="#">The District</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-4">
                        <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="decouvrir.html">Découvrir</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="btn btn-order rounded-0" href="#">Passer une commande</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <form id="monFormulaire" action="traitement_formulaire.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nom :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nom"
                                placeholder="Votre Nom :" required>
                            <div class="text-red">Ce champs est obligatoire</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput3" class="form-label">Prénom :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="exampleFormControlInput3" name="prenom"
                                placeholder="Votre Prénom :">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>


        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email :</label>
                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                placeholder="Votre Email :" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput2" class="form-label">Téléphone :</label>
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="telephone"
                                placeholder="Votre Téléphone :" required pattern="[0-9]{10}">
                            <div class="text-red">Ce champs est obligatoire</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>


        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre demande :</label>
                </div>
                <div class="col-11">
                    <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" name="demande"
                        placeholder="Votre demande:"></textarea>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="text-end">
                <button class="btn btn-primary" type="submit" onclick="validerFormulaire()">Envoyer</button>
            </div>
        </div>
    </form>


<script src="assets/js/contact.js"></script>
</body>
</html>
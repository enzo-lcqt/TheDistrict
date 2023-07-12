<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/commande.css">
</head>
<body>
    
<?php
include('assets/exo_php/header.php')
?>


<br><br><br><br><br><br><br><br>

    <form id="monFormulaire">
        <div class="col-12">
            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Nom et Prenom :</label>
                <div class="input-wrapper">
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Votre Nom et Prenom:" >
                    <div class="text-red">Ce champs est obligatoire</div>
                </div>
            </div>
        </div>
    
    <br><br>
    
    
          <div class="row g-5">
            <div class="col">
                <label for="exampleFormControlInput3" class="form-label" >Email :</label>
                <input type="mail" class="form-control"  id="exampleFormControlInput3" placeholder="example@gmail.com :" >
                <div class="text-red">Ce champs est obligatoire</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput2" class="form-label">Téléphone :</label>
                    <input type="text" class="form-control"  id="exampleFormControlInput2" placeholder="0123456789 :" >
                    <div class="text-red">Ce champs est obligatoire</div>
                </div>
            </div>
          </div>
          
    <br><br>
    
    <div class="col-12">
        <div class="form-group">
          <label for="exampleFormControlInput4" class="form-label">Votre adresse :</label>
          <div class="input-wrapper">
            <input type="text" class="form-control custom-height" id="exampleFormControlInput4" placeholder="Votre adresse :" >
            <div class="text-red">Ce champ est obligatoire</div>
          </div>
        </div>
      </div>
      
    <br>
    
    <div class="container-fluid">
        <div class="text-end">
            <button class="btn btn-primary" type="submit" onclick="validerCommande(event)">Payer</button>
        </div>
    </div>
    </form>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <?php
include('assets/exo_php/footer.php')
?>


<script src="assets/js/formulaire.js"></script>
</body>
</html>
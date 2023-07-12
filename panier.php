<!DOCTYPE html>
<html lang="fr-fr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mon Panier</title>
  <style>
    /* Styles CSS pour la mise en page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    img {
      max-width: 100px;
      max-height: 100px;
      margin-right: 10px;
    }
  </style>
</head>

<body>

<?php
include('assets/exo_php/header.php')
?>

  <h1>Mon Panier</h1>

  <h2>Produits sélectionnés :</h2>
  <ul id="panier-liste"></ul>

  <h2>Prix total :</h2>
  <p id="prix-total"></p>
  <button onclick="resetPanier()">Réinitialiser</button>

  <script>
    function resetPanier() {
      // Supprimer les données du sessionStorage
      sessionStorage.removeItem("panier");
      sessionStorage.removeItem("prixTotal");

      // Rediriger vers la page principale
      window.location.href = "plats.html";
    }

    document.addEventListener("DOMContentLoaded", function() {
      // Récupérer les données du sessionStorage
      var panier = JSON.parse(sessionStorage.getItem("panier")) || [];

      // Calculer le prix total
      var prixTotal = 0;
      panier.forEach(function(produit) {
        prixTotal += produit.prix;
      });
      
      // Enregistrer le prix total dans le sessionStorage
      sessionStorage.setItem("prixTotal", prixTotal);

      // Afficher les produits sélectionnés
      var panierListe = document.getElementById("panier-liste");
      panier.forEach(function(produit) {
        var li = document.createElement("li");


        var div = document.createElement("div");

        var h3 = document.createElement("h3");
        h3.textContent = produit.nom;
        div.appendChild(h3);

        var pDesc = document.createElement("p");
        pDesc.textContent = produit.description;
        div.appendChild(pDesc);

        var pPrix = document.createElement("p");
        pPrix.textContent = "Prix : " + produit.prix + "€";
        div.appendChild(pPrix);

        li.appendChild(div);
        panierListe.appendChild(li);
      });

      // Afficher le prix total
      var prixTotalElement = document.getElementById("prix-total");
      prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
    });
  </script>

<br><br>
<?php
include('assets/exo_php/footer.php')
?>


</body>

</html>
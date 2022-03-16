<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<title><?=$title?></title>
    </head>
    <body>
        <div class="container">
            <header>

<a href="index.php" class="link-secondary"><h1 >GESTION DES ETUDIANT</h1></a>  <br>
 </header>
             <div >
                <?= $content ?>
</div> <!-- #contenu --> <footer >
  <div class="container">

  </div>
  <div class="col-md-10 mx-auto">
<a  href="index.php?action=ajouter" class="btn btn-outline-secondary">AJOUTER ETUDIANT</a>
<a  href="index.php?action=afficher"  class="btn btn-outline-secondary">AFFICHER LISTE</a>

</footer>
</div> 
    </body>
</html>
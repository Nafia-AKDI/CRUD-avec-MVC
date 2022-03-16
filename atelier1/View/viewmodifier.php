<?php $this->title = "MODIFICATION"; 
?>
<html>
 <head> 
<title>INSCRIPTION</title>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
</body>
<div class="container">
  <div class="row my-4">
    <div class="col-md-10 mx-auto">
      <div class="card">
          <div class="card-header">Modifier un etudiant</div>
        <div class="card-body bg-light">
        <a  href="index.php?action=afficher" 
          class="btn btn-sm btn-secondary mr-2 mb-2">
          <i class="fas fa-home"></i></a>
          <!-- ici on a pas fait action parceque les donnees vont au meme fichier -->
          <form method="POST" >
         
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" class=
                "form-control" placeholder="Nom" value="<?php echo $etudiant->getNom(); ?>">
            </div>
            
            <div class="form-group">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" class=
                "form-control" placeholder="Prenom" value="<?php echo $etudiant->getPrenom(); ?>">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class=
                "form-control" placeholder="Age" value="<?php echo $etudiant->getAge(); ?>">
            </div>
            <div class="form-group">
                <label for="cne">Cne:</label>
                <input type="text" name="cne" class=
                "form-control" placeholder="Cne" value="<?php echo $etudiant->getCne(); ?>">
            </div>
<div class="mb-3" >
<INPUT class="btn btn-outline-info my-2" name="save"  type="submit" VALUE="MODIFIER"   class="form-control">

</div>
</form>
        </div>
      </div>
    </div>
  </div> 
</div>
</html>
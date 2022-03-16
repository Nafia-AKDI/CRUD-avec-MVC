<?php $this->title = "inscription"; ?>
<div class="container">
  <div class="row my-4">
    <div class="col-md-10 mx-auto">
      <div class="card">
          <div class="card-header">Ajouter un etudiant</div>
        <div class="card-body bg-light">
        <a  href="index.php?action=afficher" 
          class="btn btn-sm btn-secondary mr-2 mb-2">
          <i class="fas fa-home"></i></a>
          <!-- ici on a pas fait action parceque les donnees vont au meme fichier -->
        <form method="POST" >
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" class=
                "form-control" placeholder="Nom">
            </div>
            
            <div class="form-group">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" class=
                "form-control" placeholder="Prenom">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" class=
                "form-control" placeholder="Age">
            </div>
            <div class="form-group">
                <label for="cne">Cne:</label>
                <input type="text" name="cne" class=
                "form-control" placeholder="Cne">
            </div>
            <div class="mb-3">
<INPUT class="btn btn-outline-info my-2" type="submit" name="save"  VALUE="ENREGISTRER" class="form-control">
</div>
        </form>
        </div>
      </div>
    </div>
  </div> 
</div>


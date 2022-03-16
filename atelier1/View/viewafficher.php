<?php $this->title = "AFFICHAGE"; ?>


<div class="container">
  <div class="row my-4">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body bg-light">
        <a  href="index.php?action=ajouter"
          class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>         
          <table class="table table-hover">
            
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Cne</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
              <tr>
              <td><?= $etudiant->getId(); ?></td>
                <th scope="row">
                <a href="#"  >
                <?= $etudiant->getNom() ?></a>
                </th>
                <td><?= $etudiant->getPrenom(); ?></td>
                <td><?= $etudiant->getAge(); ?></td>
                <td><?= $etudiant->getCne(); ?></td>
                
                <td class="d-flex flex-row">
                  
                  <a href="index.php?action=modifier&id=<?php echo $etudiant->getId();?>" 
                  class="btn btn-primary " ><i class="fa fa-edit"></i>
                </a>
                    
                  
        
                  
                  <a href="index.php?action=supprimer&id=<?php echo $etudiant->getId();?>
                    "class="btn btn-danger mx-2"><i class="fa fa-trash"></i>
                </a>

                    
                  
                </td>
              </tr>
              <tr>
              
              <?php endforeach; ?>
            </tbody>
          </table>
     
        </div>
      </div>
    </div>
  </div> 
</div>
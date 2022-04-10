<?php include_once 'includes/header.php'; ?>
<div id="erreur">
    <p><?= $erreur; ?></p>
</div>

<div class="container">
    <div class="row">
        <div class="col-10 card shadow mx-auto mt-3">
            <div class="card-header text-center bg-dark text-light mt-2">
                <h3>Ajout d'un animal</h3>
            </div>
            <div class="card-content mt-3">
                <form method="post" action="animal/create.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="espece" class="form-label">Espece</label>
                        <input type="espece" class="form-control" name="espece" id="espece">
                    </div>
                    <div class="mb-3">
                        <label for="entree" class="form-label">Entrée</label>
                        <input type="entree" class="form-control" name="entree" id="entree">
                    </div>
                    <div class="mb-3">
                        <label for="sortie" class="form-label">Sortie</label>
                        <input type="sortie" class="form-control" name="sortie" id="sortie">
                    </div>
                    <div class="mb-3">
                        <label for="sexe" class="form-label">Sexe</label>
                        <input type="sexe" class="form-control" name="sexe" id="sexe">
                    </div>
                    <div class="mb-3">
                        <label for="parent" class="form-label">Parent</label>
                        <input type="parent" class="form-control" name="parent" id="parent">
                    </div>                    
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="photo" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="mb-3">
                        <label for="regime-alimentaire" class="form-label">Régime alimentaire</label>
                        <input type="regime-alimentaire" class="form-control" name="regime-alimentaire" id="regime-alimentaire">
                    </div>
                    <div class="mb-3">
                        <label for="traitement" class="form-label">Traitement</label>
                        <input type="traitement" class="form-control" name="traitement" id="traitement" >
                    </div>
                    <div class="mb-3">
                        <label for="enclos" class="form-label">Enclos</label>
                        <input type="enclos" class="form-control" name="enclos" id="enclos">
                    </div>
                    <div class="mb-3">
                        <label for="environnement" class="form-label">Environnement</label>
                        <input type="environnement" class="form-control" name="environnement" id="environnement">
                    </div>
                    <div class="mb-3">
                        <label for="deces" class="form-label">Décès</label>
                        <input type="deces" class="form-control" name="deces" id="deces">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-dark" name="ajouter" value="ajouter">Ajouter</button>
                    </div>
                    <div id="animalOk">
                        <p><?= $animalOk; ?></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>                               
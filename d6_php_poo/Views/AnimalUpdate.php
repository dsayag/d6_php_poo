<?php include_once 'includes/header.php'; ?>
<div id="erreur">
    <p><?= $erreur; ?></p>
</div>

<div class="container">
    <div class="row">
        <div class="col-10 card shadow mx-auto mt-3">
            <div class="card-header text-center bg-dark text-light mt-2">
                <h3>Modifier un animal</h3>
            </div>
            <div class="card-content mt-3">
                <form method="post">
                <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" placeholder="Login de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="espece" class="form-label">Espece</label>
                        <input type="espece" class="form-control" name="espece" id="espece" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="entree" class="form-label">Entrée</label>
                        <input type="entree" class="form-control" name="entree" id="entree" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="sortie" class="form-label">Sortie</label>
                        <input type="sortie" class="form-control" name="sortie" id="sortie" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="sexe" class="form-label">Sexe</label>
                        <input type="sexe" class="form-control" name="sexe" id="sexe" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="parent" class="form-label">Parent</label>
                        <input type="parent" class="form-control" name="parent" id="parent" placeholder="Mot de passe de l'utilisateur.">
                    </div>                    
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="photo" class="form-control" name="photo" id="photo" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="regime-alimentaire" class="form-label">Régime alimentaire</label>
                        <input type="regime-alimentaire" class="form-control" name="regime-alimentaire" id="regime-alimentaire" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="traitement" class="form-label">Traitement</label>
                        <input type="traitement" class="form-control" name="traitement" id="traitement" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="enclos" class="form-label">Enclos</label>
                        <input type="enclos" class="form-control" name="enclos" id="enclos" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="environnement" class="form-label">Environnement</label>
                        <input type="environnement" class="form-control" name="environnement" id="environnement" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="mb-3">
                        <label for="deces" class="form-label">Décès</label>
                        <input type="deces" class="form-control" name="deces" id="deces" placeholder="Mot de passe de l'utilisateur.">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-dark" name="maj">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'; ?>
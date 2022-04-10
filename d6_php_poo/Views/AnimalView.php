<?php include_once 'includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-16 card shadow mx-auto mt-3">
                <div class="card-header text-center bg-light text-light mt-2 header-img ">
                <header class="header-txt">
                    <h3>Liste des animaux</h3>
                </header>                    
                </div>
                <div class="my-2">
                    <a href="./index.php" class="float-start btn btn-warning">Accueil</a>
                    <a href="./index.php?p=animal/create"  class="float-end btn btn-success">Ajouter</a>
                </div>
                <div class="card-content">
                    <table class="table">
                        <thead class="table-dark zoo">
                            <tr>
                                <th scope="col"><h1>#</h1></th>
                                <th scope="col"><h1>Nom</h1></th>
                                <th scope="col"><h1>Age</h1></th>
                                <th scope="col"><h1>Espece</h1></th>
                                <th scope="col"><h1>Entrée</h1></th>
                                <th scope="col"><h1>Sortie</h1></th>
                                <th scope="col"><h1>Sexe</h1></th>
                                <th scope="col"><h1>Parent</h1></th>
                                <th scope="col"><h1>Photo</h1></th>
                                <th scope="col"><h1>Régime alimentaire</h1></th>
                                <th scope="col"><h1>traitement</h1></th>
                                <th scope="col"><h1>Enclos</h1></th>
                                <th scope="col"><h1>environnement</h1></th>
                                <th scope="col"><h1>Décès</h1></th>
                                <th scope="col" colspan="3"><h1>Actions</h1></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($animals as $animal) { ?>
                                <tr>
                                    <td><?= $animal["idAnimal"] ?></td>
                                    <td><?= $animal["nomAnimal"] ?></td>
                                    <td><?= $animal["ageAnimal"] ?></td>
                                    <td><?= $animal["especeAnimal"] ?></td>
                                    <td><?= $animal["dateEntreeAnimal"] ?></td>
                                    <td><?= $animal["dateSortieAnimal"] ?></td>
                                    <td><?= $animal["sexeAnimal"] ?></td>
                                    <td><?= $animal["parentAnimal"] ?></td>
                                    <td><img src="Img/animal/<?= $animal['nomAnimal'] ?>" width="100px" height="100px" /></td>
                                    <td><?= $animal["regimeAlimentaireAnimal"] ?></td>
                                    <td><?= $animal["traitementAnimal"] ?></td>
                                    <td><?= $animal["idEnclos"] ?></td>
                                    <td><?= $animal["environnementAnimal"] ?></td>
                                    <td><?= $animal["dateDecesAnimal"] ?></td>
                                    <td><a href="index.php?p=animal/profile&id=<?= $animal["idAnimal"] ?>" id="" class="btn btn-info">Voir</a></td>
                                    <td><a href="#" id="" class="btn btn-primary">Editer</a></td>
                                    <td><a href="index.php?p=animal/delete&id=<?= $animal["idAnimal"] ?>" id="" class="btn btn-danger">X</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'includes/footer.php'; ?>

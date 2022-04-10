<?php include_once 'includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-16 card shadow mx-auto mt-3">
            <div class="card-header text-center bg-light text-light mt-2 header-img">
                <header class="header-txt">
                    <h3>Accueil</h3>
                </header>
                </div>
                <div class="my-2">
                    <a href="./index.php?p=animal" class="float-end btn btn-success">Liste des animaux</a>
                </div>
                <div class="card-content">
                <table class="table">
                    <thead class="table-dark zoo">
                        <tr>
                            <th scope="col"><h1>#</h1></th>
                            <th scope="col"><h1>Soigneur</h1></th>
                            <th scope="col"><h1>Image</h1></th>
                            <th scope="col"><h1>Animal</h1></th>
                            <th scope="col"><h1>Enclos n°</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($params as $param) {?>
                            <tr id="">
                                <td><img src="Img/soigneur/<?= $param['prenomSoigneur'] ?>" width="150px" height="150px" /></td>
                                <td><h2 class="zoo"><a href="index.php?p=soigneur/profile&id=<?= $param["idSoigneur"] ?>"><?= $param["prenomSoigneur"] ?></a></h2></td>
                                <td><img src="Img/animal/<?= $param['nomAnimal'] ?>" width="150px" height="150px" /></td>
                                <td><h2 class="zoo"><a href="index.php?p=animal/profile&id=<?= $param["idAnimal"] ?>"><?= $param["nomAnimal"] ?></a></h2></td>
                                <td><?= $param["idEnclos"] ?></td>
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
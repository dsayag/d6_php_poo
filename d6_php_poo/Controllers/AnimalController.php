<?php

namespace App\Controllers;

use App\Models\AnimalModel;

class AnimalController
{
    public function create()
    {
        $reqPost = $_POST;

        if (!empty($reqPost)) {
            $animalmodel = new AnimalModel();
            $animal = $animalmodel->createAnimal($reqPost);
            $this->redirectionURL('/animal/index');
        } else {
            include("./Views/AnimalAdd.php");
        }
    }

    public function index()
    {
        $animalmodel = new AnimalModel();
        $animals = $animalmodel->getAnimals();

        include("./Views/AnimalView.php");
    }

    public function profile()
    {
        $id = $_GET["id"];
        $animalmodel = new AnimalModel();
        $animal = $animalmodel->getAnimal($id);

        include("./Views/AnimalProfile.php");
    }

    public function update()
    {
        $id = $_GET["id"];
        $animalmodel = new AnimalModel();
        $animal = $animalmodel->getAnimal($id);

        include("./Views/AnimalUpdate.php");
    }

    public function delete()
    {
        $id = $_GET["id"];

        try {
            // Instancier le model Animal
            $animalmodel = new AnimalModel();
            // Appeler la fct delete du model
            $animalmodel->deleteAnimal($id);

            $this->redirectionURL('/main/index');

            exit();
        } catch (\Exception $e) {

            if ($e->errorInfo[0] == "23000") {
                echo " Vous ne pouvez pas supprimer un animal car il a un soigneur affecté";
                if ($_GET["path"] == "animal") {
                    include "animal.php";
                } else if ($_GET["path"] == "animals") {
                    include "animals.php";
                }
            } else {
                if ($_GET["path"] == "animal") {
                    header("Location: /d6_php_poo/animal.php?id=$id");
                    exit();
                } else if ($_GET["path"] == "animals") {
                    header("Location: /d6_php_poo/index.php");
                    exit();
                }
            }
        }
        include("./Views/AnimalView.php");
    }


    public function redirectionURL($path)
    {
        if ($path) {
            header("Location: /d6_php_poo/index.php?p=$path");
        } else {
            header("Location: /d6_php_poo/index.php");
        }
        exit();
    }
}

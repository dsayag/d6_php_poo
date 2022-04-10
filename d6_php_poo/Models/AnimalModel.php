<?php

namespace App\Models;

use App\Models\AbstractModel;

class AnimalModel extends AbstractModel
{
    private $nomAnimal;
    private $ageAnimal;
    private $especeAnimal;
    private $dateEntreeAnimal;
    private $dateSortieAnimal;
    private $sexeAnimal;
    private $parentAnimal;
    private $photoAnimal;
    private $regimeAlimentaireAnimal;
    private $traitementAnimal;
    private $environnementAnimal;
    private $dateDecesAnimal;
    private $idEnclos;

    public function getAnimals()
    {
        $sqlAnimal = "SELECT * FROM animal";
        $req = $this->_bdd->prepare($sqlAnimal);
        $req->execute(array());
        $animals = $req->fetchAll();
        return $animals;
    }

    public function getAnimal($id)
    {
        $sqlAnimal = "SELECT * FROM animal WHERE idAnimal=:id";
        $req = $this->_bdd->prepare($sqlAnimal);
        $req->execute([':id' => $id]);
        $animal = $req->fetch();
        return $animal;
    }

    public function createAnimal($reqPost)
    {
        $erreur = "";
        $animalOk = "";

        if (isset($reqPost['ajouter'])) {
            if (!isset($reqPost['nomAnimal']) || empty($reqPost['nomAnimal'])) {
                $erreur = "Le nom n'est pas renseigné";
            }            
            if (!isset($reqPost['ageAnimal']) || empty($reqPost['ageAnimal'])) {
                $erreur = "L'âge de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['especeAnimal']) || empty($reqPost['especeAnimal'])) {
                $erreur = "L'espèce de l'animal n'est pas renseignée";
            }
            if (!isset($reqPost['dateEntreeAnimal']) || empty($reqPost['dateEntreeAnimal'])) {
                $erreur = "La date d'entrée de l'animal n'est pas renseignée";
            }
            if (!isset($reqPost['dateSortieAnimal']) || empty($reqPost['dateSortieAnimal'])) {
                $erreur = "La date de sortie de l'animal n'est pas renseignée";
            }
            if (!isset($reqPost['sexeAnimal']) || empty($reqPost['sexeAnimal'])) {
                $erreur = "Le sexe de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['parentAnimal']) || empty($reqPost['parentAnimal'])) {
                $erreur = "Le parent de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['photoAnimal']) || empty($reqPost['photoAnimal'])) {
                $erreur = "La photo de l'animal n'est pas renseignée";
            }
            if (!isset($reqPost['regimeAlimentaireAnimal']) || empty($reqPost['regimeAlimentaireAnimal'])) {
                $erreur = "Le régime alimentaire de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['traitementAnimal']) || empty($reqPost['traitementAnimal'])) {
                $erreur = "Le traitement de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['idEnclos']) || empty($reqPost['idEnclos'])) {
                $erreur = "Le numéro de l'enclos de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['environnementAnimal']) || empty($reqPost['environnementAnimal'])) {
                $erreur = "L'environnement de l'animal n'est pas renseigné";
            }
            if (!isset($reqPost['dateDecesAnimal']) || empty($reqPost['dateDecesAnimal'])) {
                $erreur = "La date de décès de l'animal n'est pas renseigné";
            }
            if (empty($erreur)) {
                $sqlAnimal = "INSERT INTO animal (nomAnimal, loginAnimal, ageAnimal, especeAnimal, dateEntreeAnimal,
                dateSortieAnimal, sexeAnimal, parentAnimal, photoAnimal, regimeAlimentaireAnimal, traitementAnimal,
                idEnclos, environnementAnimal, dateDecesAnimal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $req = $this->_bdd->prepare($sqlAnimal);
                $reqPost = $reqPost;
                $req->execute(array(
                    NULL, $reqPost['nomAnimal'], $reqPost['loginAnimal'], $reqPost['ageAnimal'],
                    $reqPost['especeAnimal'], $reqPost['dateEntreeAnimal'], $reqPost['dateSortieAnimal'],
                    $reqPost['sexeAnimal'], $reqPost['parentAnimal'], $reqPost['photoAnimal'],
                    $reqPost['regimeAlimentaireAnimal'], $reqPost['traitementAnimal'], $reqPost['idEnclos'],
                    $reqPost['idEnclos'], $reqPost['environnementAnimal'], $reqPost['dateDecesAnimal'],
                ));

                $animalOk = "Animal ajouté";
            }
        }
    }

    public function deleteAnimal($id)
    {
        $sqlAnimal = "DELETE FROM animal WHERE idAnimal=:idAnimal";
        $req = $this->_bdd->prepare($sqlAnimal);
        $req->execute([':idAnimal' => $id]);
    }

    public function updateAnimal()
    {
        // Récupérer les informations dans les chants       
        $sqlAnimal = "SELECT * FROM animal";
        $req = $this->_bdd->prepare($sqlAnimal);
        $req->execute(array());
        $animal = $req->fetch();
        return $animal;
        $reqPost = $_POST;

        if (isset($reqPost['maj'])) {
            $nomAnimal = $reqPost['nomAnimal'];
            $loginAnimal = $reqPost['login'];
            $ageAnimal = $reqPost['ageAnimal'];
            $especeAnimal = $reqPost['especeAnimal'];
            $dateEntreeAnimal = $reqPost['dateEntreeAnimal'];
            $dateSortieAnimal = $reqPost['dateSortieAnimal'];
            $sexeAnimal = $reqPost['sexeAnimal'];
            $parentAnimal = $reqPost['parentAnimal'];
            $photoAnimal = $reqPost['photoAnimal'];
            $regimeAlimentaireAnimal = $reqPost['regimeAlimentaireAnimal'];
            $traitementAnimal = $reqPost['traitementAnimal'];
            $idEnclos = $reqPost['idEnclos'];
            $environnementAnimal = $reqPost['environnementAnimal'];
            $dateDecesAnimal = $reqPost['dateDecesAnimal'];

            $sqlAnimal = "UPDATE animal SET nomAnimal = '$nomAnimal', loginAnimal = '$loginAnimal',
            ageAnimal = '$ageAnimal', especeAnimal = '$especeAnimal', dateEntreeAnimal = '$dateEntreeAnimal',
            dateSortieAnimal = '$dateSortieAnimal', sexeAnimal = '$sexeAnimal', parentAnimal = '$parentAnimal',
            photoAnimal = '$photoAnimal', regimeAlimentaireAnimal = '$regimeAlimentaireAnimal',
            traitementAnimal = '$traitementAnimal', idEnclos = '$idEnclos', environnementAnimal = '$environnementAnimal',
            dateDecesAnimal = '$dateDecesAnimal'";

            $req = $this->_bdd->prepare($sqlAnimal);
            $req->execute();

            header("Location: /d6_php_poo/index.php");
            exit();
        }
    }

    /////////////////////
    // Getter & setter //
    /////////////////////

    /**
     * Get the value of nomAnimal
     */ 
    public function getNomAnimal()
    {
        return $this->nomAnimal;
    }

    /**
     * Set the value of nomAnimal
     *
     * @return  self
     */ 
    public function setNomAnimal($nomAnimal)
    {
        $this->nomAnimal = $nomAnimal;

        return $this;
    }

    /**
     * Get the value of ageAnimal
     */ 
    public function getAgeAnimal()
    {
        return $this->ageAnimal;
    }

    /**
     * Set the value of ageAnimal
     *
     * @return  self
     */ 
    public function setAgeAnimal($ageAnimal)
    {
        $this->ageAnimal = $ageAnimal;

        return $this;
    }

    /**
     * Get the value of especeAnimal
     */ 
    public function getEspeceAnimal()
    {
        return $this->especeAnimal;
    }

    /**
     * Set the value of especeAnimal
     *
     * @return  self
     */ 
    public function setEspeceAnimal($especeAnimal)
    {
        $this->especeAnimal = $especeAnimal;

        return $this;
    }

    /**
     * Get the value of dateEntreeAnimal
     */ 
    public function getDateEntreeAnimal()
    {
        return $this->dateEntreeAnimal;
    }

    /**
     * Set the value of dateEntreeAnimal
     *
     * @return  self
     */ 
    public function setDateEntreeAnimal($dateEntreeAnimal)
    {
        $this->dateEntreeAnimal = $dateEntreeAnimal;

        return $this;
    }

    /**
     * Get the value of dateSortieAnimal
     */ 
    public function getDateSortieAnimal()
    {
        return $this->dateSortieAnimal;
    }

    /**
     * Set the value of dateSortieAnimal
     *
     * @return  self
     */ 
    public function setDateSortieAnimal($dateSortieAnimal)
    {
        $this->dateSortieAnimal = $dateSortieAnimal;

        return $this;
    }

    /**
     * Get the value of sexeAnimal
     */ 
    public function getSexeAnimal()
    {
        return $this->sexeAnimal;
    }

    /**
     * Set the value of sexeAnimal
     *
     * @return  self
     */ 
    public function setSexeAnimal($sexeAnimal)
    {
        $this->sexeAnimal = $sexeAnimal;

        return $this;
    }

    /**
     * Get the value of parentAnimal
     */ 
    public function getParentAnimal()
    {
        return $this->parentAnimal;
    }

    /**
     * Set the value of parentAnimal
     *
     * @return  self
     */ 
    public function setParentAnimal($parentAnimal)
    {
        $this->parentAnimal = $parentAnimal;

        return $this;
    }

    /**
     * Get the value of photoAnimal
     */ 
    public function getPhotoAnimal()
    {
        return $this->photoAnimal;
    }

    /**
     * Set the value of photoAnimal
     *
     * @return  self
     */ 
    public function setPhotoAnimal($photoAnimal)
    {
        $this->photoAnimal = $photoAnimal;

        return $this;
    }

    /**
     * Get the value of regimeAlimentaireAnimal
     */ 
    public function getRegimeAlimentaireAnimal()
    {
        return $this->regimeAlimentaireAnimal;
    }

    /**
     * Set the value of regimeAlimentaireAnimal
     *
     * @return  self
     */ 
    public function setRegimeAlimentaireAnimal($regimeAlimentaireAnimal)
    {
        $this->regimeAlimentaireAnimal = $regimeAlimentaireAnimal;

        return $this;
    }

    /**
     * Get the value of traitementAnimal
     */ 
    public function getTraitementAnimal()
    {
        return $this->traitementAnimal;
    }

    /**
     * Set the value of traitementAnimal
     *
     * @return  self
     */ 
    public function setTraitementAnimal($traitementAnimal)
    {
        $this->traitementAnimal = $traitementAnimal;

        return $this;
    }

    /**
     * Get the value of environnementAnimal
     */ 
    public function getEnvironnementAnimal()
    {
        return $this->environnementAnimal;
    }

    /**
     * Set the value of environnementAnimal
     *
     * @return  self
     */ 
    public function setEnvironnementAnimal($environnementAnimal)
    {
        $this->environnementAnimal = $environnementAnimal;

        return $this;
    }

    /**
     * Get the value of dateDecesAnimal
     */ 
    public function getDateDecesAnimal()
    {
        return $this->dateDecesAnimal;
    }

    /**
     * Set the value of dateDecesAnimal
     *
     * @return  self
     */ 
    public function setDateDecesAnimal($dateDecesAnimal)
    {
        $this->dateDecesAnimal = $dateDecesAnimal;

        return $this;
    }

    /**
     * Get the value of idEnclos
     */ 
    public function getIdEnclos()
    {
        return $this->idEnclos;
    }

    /**
     * Set the value of idEnclos
     *
     * @return  self
     */ 
    public function setIdEnclos($idEnclos)
    {
        $this->idEnclos = $idEnclos;

        return $this;
    }
}

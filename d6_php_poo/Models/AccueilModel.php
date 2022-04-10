<?php

namespace App\Models;

use App\Models\AbstractModel;

class AccueilModel extends AbstractModel
{
    
    public function getAllParams()
    {        
        // Renvoi l'animal, le numéro d'enclos et le soigneur 
        $sqlParams = "SELECT nomAnimal, e.idEnclos, nomSoigneur, prenomSoigneur, a.idAnimal, s.idSoigneur
        FROM animal a, animal_soigneur ans, soigneur s, enclos e
        WHERE a.idEnclos = e.idEnclos
        AND a.idAnimal = ans.idAnimal
        AND ans.idSoigneur = s.idSoigneur";

        $req = $this->_bdd->prepare($sqlParams);
        $req->execute(array());
        $params = $req->fetchAll();
        return $params;
    }    
}

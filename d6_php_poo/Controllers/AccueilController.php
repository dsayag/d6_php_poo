<?php

namespace App\Controllers;

use App\Models\AccueilModel;

class AccueilController
{
    public function index()
    {            
        $mainmodel = new AccueilModel();
        $params = $mainmodel->getAllParams();

        include("./Views/AccueilView.php");
    }
    
    public function redirectionURL($path){
        if($path){
            header("Location: /d6_php_poo/index.php?p=$path");
        }else{
            header("Location: /d6_php_poo/index.php");
        }
        exit();
    }
    
}
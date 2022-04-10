<?php
namespace App\Models;

use App\Core\Db;

abstract class AbstractModel
{
    protected $_bdd;

    public function __construct()
    {
        $database = new Db;
        $this->_bdd = $database->connectDb();
    }   
}

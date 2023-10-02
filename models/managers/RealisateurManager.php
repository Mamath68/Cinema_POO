<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class RealisateurManager extends Manager
{

    protected $className = "Models\Entities\Realisateurs";
    protected $tableName = "realisateur";

    public function __construct()
    {
        parent::connect();
    }

}

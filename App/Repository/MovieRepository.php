<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Model\Movie;
use App\Model\Category;

class MovieRepository
{
    //Attributs
    private \PDO $connect;

    public function __construct()
    {
        //Injection de dépendance
        $this->connect = (new Mysql())->connectBDD();
    }

    //Méthodes
    public function saveMovie(Movie $movie): void
    {

    }
}
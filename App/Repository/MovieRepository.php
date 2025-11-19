<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Model\Movie;

class MovieRepository
{
    //Attributs
    private \PDO $connect;

    //Constructeur
    public function __contruct()
    {
        $this->connect = (new Mysql())->connectBDD();
    }

    //Méthodes
    //Sauvegarder un film
    public function saveMovie(Movie $movie)
    {
        try {
            //Requête SQL
            $sql = "INSERT INTO movie (`id`, `title`, `description`, `publishAt`, `duration`, `cover`, `categories`)";
            //préparation
            $req = $this->connect->prepare($sql);
            //Assignation du paramètre
            $req->bindValue(1, $movie->getId(),
                $movie->getTitle(),
                $movie->getDescription(),
                $movie->getpublishAt(),
                $movie->getDuration(),
                $movie->getCover(),
                $movie->getCategories(),
                \PDO::PARAM_STR);
            //Exécution de la requête
            $req->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

}
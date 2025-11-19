<?php

namespace App\Controller;

use App\Model\Grant;
use App\Model\Movie;
use App\Repository\MovieRepository;
use App\Utils\Tools;

class MovieController
{
    private MovieRepository $movieRepository;

    public function __construct()
    {
        $this->movieRepository = new MovieRepository();
    }

    /**
     * Méthode pour rendre une vue avec un template
     * @param string $ template le nom à inclure
     * @param string|null $title le titre de la page
     * @param array $data les données à passer au template
     * @return void
     */

    public function render(string $template, ?string $title, array $data = []): void 
    {
        include __DIR__ . "/../../template/template" . $template . ".php";
    }

    public function addMovie()
    {
        $data = [];
        // test si le formulaire est complet
        if (isset($_POST["submit"])) {
            if (!empty($_POST["name_title"]) &&
                !empty($_POST["name_description"]) &&
                !empty($_POST["name_publishAt"]) &&
                !empty($_POST["name_duration"]) &&
                !empty($_POST["name_cover"]) && 
                !empty($_POST["name_categories"])
                ) {
                    ?? chai pas ??
                }
        }
    }
}


<?php 

namespace App\Controller;

use App\Controller\AbstractController;
use App\Utils\Tools;

class HomeController extends AbstractController
{

    /**
     * Méthode pour afficher la page d'accueil
     * @return mixed Retourne le template
     */
    public function index(): mixed
    {
        //Test si le formulaire
        if (isset($_POST["submit"])) {
            //vérifier si un fichier a été envoyé
            if (isset($_FILES["fichier"])) {
                //chemin temp du fichier
                $tmp = $_FILES["fichier"]["tmp_name"];
                //nom de
                $name = $_FILES["fichier"]["name"];
                //Récupérer l'extension du fichier
                $ext = Tools::getFileExtension($name);
                //Déplacer et enregister le fichier renommer
                move_uploaded_file($tmp, __DIR__ . "/../../public/asset/"  . uniqid("nom", true) . "." . $ext);
            }
        }   
        return $this->render("home","accueil");
    }
}
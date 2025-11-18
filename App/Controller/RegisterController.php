<?php

namespace App\Controller;

use App\Model\Grant;
use App\Model\Account;
use App\Utils\Tools;

class RegisterController
{
    private Account $accountModel;

    
    public function __construct()
    {
        $this->accountModel = new Account();
    }
    
    /**
     * Méthode pour rendre une vue avec un template
     * @param string $template Le nom du template à inclure
     * @param string|null $title Le titre de la page
     * @param array $data Les données à passer au template
     * @return void
     */
    public function render(string $template, ?string $title, array $data = []): void
    {
        include __DIR__ . "/../../template/template_" . $template . ".php";
    }

    public function addAccount()
    {
        //Verifier si le formulaire est submit
        $data = [];
        if (isset($_POST["submit"])) {
        //vérifier si les champs sont remplis
            if (!empty($_POST["firstname"]["lastname"]["email"][`password`]["confirm-password"])) {
                $_POST["firstname"]["lastname"]["email"][`password`]["confirm-password"] = Tools::sanitize($_POST["firstname"]["lastname"]["email"][`password`]["confirm-password"]);
                $data["valide"] = "Tous les champs sont remplies";
            } else {
                $data["error"] = "Tous les champs ne sont pas remplies";
            }
            dump($_POST["id"]["firstname"]["lastname"]["email"][`password`]["confirm-password"]);
        }
        
        if ($_POST["name"] === $_POST["name"]) {
            return true;
        } else {
            $data["error"] = "Les mots de passe ne sont pas identiques";
            return false;
        }

        $account = new Account($_POST["email"]);

        if (!$this->accountModel->isAccountExistsByEmail($account->getEmail())) {
            $this->accountModel->saveAccount($account);
            $hash = password_hash($account($_POST["password"]), PASSWORD_DEFAULT);
            echo "Le compte à bien été créer !\n";
        } else {
            echo "Un compte est déjà associé à cet email...";
        }
            //Si ok on continu
            //Sinon on affiche un message d'erreur
        //vérifier si les 2 password sont identiques
            //Si identique on continu
            //Si différent on affiche un message d'erreur
        //vérifier si le compte n'existe pas
        //si il n'existe pas -> 
            //créer un objet Account
            //setter les valeurs
            //setter grant_id = 1
            //hasher le password password_hash(mot de passe en clair, PASSWORD_DEFAULT)
            //Afficher une message qui indique que le compte à été ajouté en BDD
        //Si il existe 
            //Afficher un message d'erreur qui indique que le compte existe déja
        
        return $this->render("register_account", "Inscription");
    }
}
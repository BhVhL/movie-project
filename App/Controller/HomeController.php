<?php 

namespace App\Controller;

use App\Controller\AbstractController;
use App\Utils\Tools;
use App\Service\EmailService;

class HomeController extends AbstractController
{
    //Attribut
    private EmailService $emailService;

    public function __construct()
    {
        $this->emailService = new EmailService();
    }

    /**
     * Méthode pour afficher la page d'accueil
     * @return mixed Retourne le template
     */
    public function index(): mixed
    {
        $data = [];
        //Test si le formulaire
        if (isset($_POST["submit"])) {
            //vérifier si un fichier a été envoyé
            if (isset($_FILES["fichier"])) {
                $newname = $this->uploadFile("fichier", "img", ["png", "jpeg", "bmp"]);
                if ($newname === false) {
                    $data["error"] = "Le format de fichier est invalide";
                } else {
                    $data["valid"] = "Le fichier : " .  $newname ." à été ajouté"; 
                }
            }
        }
        return $this->render("home","accueil", $data);
    }
    
    /**
     * Méthode Pour envoyer un email de test
     * @return mixed Retourne le template
     */
    public function testEmail(): mixed
    {   
        //Corps du message (email)
        $body = "<p>Test email</p>";
        //Appel de la méthode sendEmail avec le destinataire, objet et le message
        $this->emailService->sendEmail("mail.test@test.fr", "test envoi email", $body);
        return $this->render("test_email", "Test email");
    }
}
<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailService
{
    private PHPMailer $mailer;

    public function __construct()
    {
        $this->mailer = new PHPMailer(true);
    }

    /**
     * Méthode pour envoyer un email
     * @param string $receiver destinataire de l'email
     * @param string $subject Objet du mail
     * @param string $body Corps du mail
     * @return string $message
     */
    public function sendEmail(string $receiver, string $subject, string $body): string
    {
        try {
            
            //Appliquer la configuration
            $this->configuration();
            //Expéditeur
            $this->mailer->setFrom(SMTP_USERNAME, 'Mailer');
            //Destinataire
            $this->mailer->addAddress($receiver);     //Add a recipient

            //Content
            $this->mailer->isHTML(true); 
            //Objet du mail                                 //Set email format to HTML
            $this->mailer->Subject = $subject;
            //Corp du mail
            $this->mailer->Body    = $body;

            //Méthode pour envoyer un email
            $this->mailer->send();
            return 'Email a été envoyé avec success';
        } catch (Exception $e) {
            return "Erreur : {$this->mailer->ErrorInfo}";
        }
    }
    /**
     * Méthode pour configurer le serveur SMTP
     * @return self retourne l'instance de la classe
     */
    public function configuration():self
    {
        //Server settings
        $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->mailer->isSMTP();                                            //Send using SMTP
        $this->mailer->Host       = SMTP_SERVER;                     //Set the SMTP server to send through
        $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mailer->Username   = SMTP_USERNAME;                     //SMTP username
        $this->mailer->Password   = SMTP_PASSWORD;                               //SMTP password
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $this->mailer->Port       = SMTP_PORT;
        return $this;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure =
    }
}

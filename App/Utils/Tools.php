<?php

namespace App\Utils;

class Tools
{
    /**
     * Méthode pour sanitize les chaines de caractères
     * @param string $str Chaine à nettoyer
     * @return string chaine nettoyé
     */
    public static function sanitize(string $str): string
    {
        $str = trim($str);
        $str = strip_tags($str);
        $str = htmlspecialchars($str, ENT_NOQUOTES);
        return $str;
    }

    /**
     * Méthode qui retourne l'extension d'un fichier
     * @param string $file nom du fichier
     * @return string extension du fichier
     */
    public static function getFileExtension($file)
    {
        return substr(strrchr($file, '.'), 1);
    }
}

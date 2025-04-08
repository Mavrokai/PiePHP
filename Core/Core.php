<?php

/* Espace de nommage principal de l'application.*/

namespace Core;

/*Classe principale de l'application.*/

class Core
{
    /*Méthode d'exécution de l'application.*/
    public function run()
    {
        // Affiche le nom de la classe et un message de confirmation.
        echo __CLASS__ . "[OK]" . PHP_EOL;
    }
}

<?php
declare(strict_types=1);

namespace App\Controleurs;

use App\App;

class ControleurSite
{
    public function __construct()
    {
    }

    public function accueil(): void
    {
        $tDonnees = array("message"=>"Je suis la page d'accueil...");
        echo App::getBlade()->run('accueil',$tDonnees);
    }

    public function apropos():void
    {
        $tDonnees = array("message"=>"Je suis la page À propos...");
        echo App::getBlade()->run('apropos',$tDonnees);
    }
}


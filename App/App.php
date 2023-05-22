<?php
declare(strict_types=1);
namespace App;


use App\Controleurs\ControleurSite;
use \PDO;
//use eftec\bladeone\BladeOne;

class App
{
    private static ?PDO $refPdo = null;

    public function __construct()
    {
        error_reporting(E_ALL | E_STRICT);
        date_default_timezone_set('America/Montreal');
        $this->routerRequete();
    }

    public static function getPDO():PDO
    {
        $pdo = null;
        if (!isset(App::$refPdo)){
            // Exemple de paramètre de connexion
            $serveur = 'localhost';
            $utilisateur = 'root';
            $motDePasse = 'root';
            $nomBd = 'xxxxxxxxxxx';
            $chaineDSN = "mysql:dbname=$nomBd;host=$serveur";    // Data source name

            // Tentative de connexion
            $pdo = new PDO($chaineDSN, $utilisateur, $motDePasse);
            // Changement d'encodage des caractères UTF-8
            $pdo->exec("SET NAMES utf8");
            // Affectation des attributs de la connexion : Obtenir des rapports d'erreurs et d'exception avec errorInfo()
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }else{
            $pdo = App::$refPdo;
        }
        return $pdo;
    }

    public static function getBlade():BladeOne
    {
        if(App::$refBlade === null){
            $cheminDossierVues = '../ressources/vues';
            $cheminDossierCache = '../ressources/cache';
            App::$refBlade = new BladeOne($cheminDossierVues,$cheminDossierCache,BladeOne::MODE_AUTO);
        }
        return App::$refBlade;
    }


    public function routerRequete():void
    {
        // Anatomie d'une URL. Exemple pour accéder à la page à propos:     http://localhost:8888/index.php?controleur=site&action=apropos

        // Valeurs par défaut
        $controleur = 'site';
        $action = 'accueil';

        // Déterminer le controleur responsable de traiter la requête
        if (isset($_GET['controleur'])){
            $controleur = $_GET['controleur'];
        }

        // Déterminer l'action du controleur
        if (isset($_GET['action'])){
            $action = $_GET['action'];
        }

        // Instantier le bon controleur selon la page demandée
        if ($controleur === 'site'){
            $this->monControleur = new ControleurSite();
            switch ($action) {
                case 'accueil':
                    $this->monControleur->accueil();
                    break;
                case 'apropos':
                    $this->monControleur->apropos();
                    break;
                default:
                    echo 'Erreur 404 !';
            }
        }else{
                echo 'Erreur 404 !!';
            }
        }

}
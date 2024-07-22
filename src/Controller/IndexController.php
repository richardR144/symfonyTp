<?php
// on créer un namespace, cad un chemin pour identifier la classe actuelle
namespace App\Controller;
// on appelle le namespace des classes qu'on utilise
// pour que symfony fasse le require de ces classes
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
// permet e créer une route cadd une nouvelle page sur notre appli quand l'url est appelée,
// ça exécute automatiquement la méthodde définit sur la route


class IndexController {
    #[Route('/', name: 'home')]
    public function index() {
        var_dump(value: 'hello'); die;
    }
}

?>
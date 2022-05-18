<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TestController extends AbstractController
{
    /**
     * rehefa response json dia tsy maintsy return array foana
     * asiana ? le paramètre de optionnel le route
     * @Route("/produit/{name?}/{place?}", name="fruit_list")
     */

     public function fruit($name, $place) : Response
     {
            return $this->json([
             "vokatra1" => "goavy",
             "vokatra2" => "paiso",
             "name"=> $name,
             "place"=> $place
        ]);
     }

     /**
      * @Route("/autrePage", name="another_page")
      */

      public function anotherPage() : Response
     {
            return $this->render("redirectTo/direction.html.twig");
    
     }
}
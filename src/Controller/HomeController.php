<?php

namespace App\Controller;

use App\Constant\ProfileConstant;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */

     public function home(): Response
     {
         return $this->render('layouts/base.html.twig');
     }


    // /**
    //  * @Route("/constant", name="profile")
    //  */

    // public function identity()
    // {
    //     return $this->render("identite/index.html.twig",['profile'=>ProfileConstant::MY_PROFILE]);
    // }
   
    /**
     * @Route ("/etudiant",name="student_profile")
     */

    public function homePage()
    {
         $profileObject = new \stdClass();
         $profile = ProfileConstant::MY_PROFILE;
         foreach ($profile as $key => $value) {
             $profileObject->$key = $value;
         }

        // affichage de nomComplet des parents  
        $profile['parents']['pere']['nomComplet'] = $profile['parents']['pere']['nom'].' '.$profile['parents']['pere']['prenom'];
         $profile['parents']['mere']['nomComplet'] = $profile['parents']['mere']['nom'].' '.$profile['parents']['mere']['prenom'];
         
         return $this->render("identite/index.html.twig",['profile'=>$profile]);
    }

    /**
     *@Route("/number", name="nombre")
    */
    public function returnArrayFlatten() {
        return $this->render("identite/index.html.twig",[
            'nombre'=>(ProfileConstant::NUMBER_TO_FLAT)
        ]);
    }

    private function array_flatten($array) {
        $return = [];

        foreach ($array as $value) {
            if (is_array($value)){
                $return = array_merge($return, $this->array_flatten($value));
            } else {
                $return[] = $value;
                //array_push($return, $value);
            }
        }

        return $return;
    }

}
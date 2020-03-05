<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Produit;

class CatalogueController extends AbstractController
{
    /**
     * @Route("/", name="catalogue")
     */
    public function index(Request $request)
    {

        $produits = $this->retrieveProduits(0,"");

        return $this->render('catalogue/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    private function retrieveProduits($idCategorie, $recherche) {

        $produits = $this->getDoctrine()
                         ->getRepository(Produit::class)
                         ->findAll();

        return $produits;
    }

    
}

<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as Doctrine;

/**
* @Doctrine\Entity
* @Doctrine\Table(name="Produits")
*/
class Produit
{
    /**
    * @Doctrine\Column(name="idProduit", type="integer")
    * @Doctrine\Id
    * @Doctrine\GeneratedValue(strategy="AUTO")
    */
    private $idProduit;

    /**
    * @Doctrine\Column(name="idCategorie", type="integer")
    */
    private $idCategorie;

    /**
    * @Doctrine\Column(type="string")
    */
    private $nom;

    /**
    * @Doctrine\Column(type="integer")
    */
    private $prix;

    /**
    * @Doctrine\Column(name="qteStock", type="integer")
    */
    private $qteStock;

    /**
    * @Doctrine\Column(name="qteMinimale", type="integer")
    */
    private $qteMinimale;

    /**
    * @Doctrine\Column(name="descriptionCourte", type="string")
    */
    private $descriptionCourte;
    
    /**
    * @Doctrine\Column(name="description", type="string")
    */
    private $description;
    

    public function __construct($tableau)
    {
        $this->idProduit = $tableau['idProduit'];
        $this->idCategorie = $tableau['idCategorie'];
        $this->nom = $tableau['nom'];
        $this->prix = $tableau['prix'];
        $this->qteStock = $tableau['qteStock'];
        $this->qteMinimale = $tableau['qteMinimale'];
        $this->descriptionCourte = $tableau['descriptionCourte'];
        $this->description = $tableau['description'];
        
    }

    // Getter
    public function getIdProduit() { return $this->idProduit; }
    public function getNom() { return $this->nom; }
    public function getPrix() { return $this->prix; }
    public function getQteStock() { return $this->qteStock; }
    public function getQteMinimale() { return $this->qteMinimale; }
    public function getDescriptionCourte() { return $this->descriptionCourte; }
    public function getDescription() { return $this->description; }

    // Setter
    public function setNom($value) {$this->nom = $value; return $this;}
    public function setQteStock($value) { $this->qteStock = $value; return $this;}

}

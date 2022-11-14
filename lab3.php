<?php

// Questions 1 et 2 : création de la classe + getters + setters + constructeurs
class Ecole{
    private $nom;
    private $adresse;
    private $tel;

    /*public function __construct()
    {
        echo"Creation dun objet Ecole";
    }*/

    public function __construct($nom,$adresse,$tel)  // constructeur avec paramètres
    {
       // echo "Creation de l'objet";
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->tel = $tel;
    }

    public function getInfoEcole()  //une méthode
    {
        return "Nom : ".$this->nom." Adresse : ".$this->adresse." Tel : ".$this->tel;
    }

    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}

// Question 3 : Création des instances
$e1 = new Ecole("ENSI","Manouba","+123");
$e2 = new Ecole("INSAT","TUNIS","+456");
$e3 = new Ecole("ESPRIT","Ghazela","+789");

// Question 4 : création d'un tableau avec les instances
$tab = array($e1,$e2,$e3);
//var_dump($tab);

//Question 5 : Affichage des données du tableau
foreach ($tab as $e) {
    echo $e->getInfoEcole()."<br/>";
  }

/*
//$e1->tel=10;
echo $e1-> getInfoEcole();

$e1->setNom("ENSI");
echo $e1-> getInfoEcole();*/
?>
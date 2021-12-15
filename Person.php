<?php

class Person
{
    private $nom;
    private $prenom;

    /**
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }



    public function dormir() {
        echo "Mr./Mme ".$this->nom." ".$this->prenom." fais dodo".'<br>';
    }
    public function manger($aliment='pomme') {
        echo "Mr./Mme ".$this->nom." ".$this->prenom." mange un(e) ".$aliment.'<br>';
    }

    /**
     * @return mixed
     */
    public function getNom(){return $this->nom;}
    /**
     * @param mixed $nom
     */
    public function setNom($nom){$this->nom = $nom;}
    /**
     * @return mixed
     */
    public function getPrenom(){return $this->prenom;}
    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom){$this->prenom = $prenom;}
}
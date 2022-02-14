<?php

class SportBallons extends Sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     */
    public function __construct(string $nomSport, int $nbJoeurs, int $largeur, int $longueur)
    {
        parent::__construct($nomSport, $nbJoeurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }


    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getDescription(): string
    {
        return '<br>Description "Nom du sport : '.$this->getNomSport()." Nombre de joueur : ".$this->nbJoueurs." Longueur : ".$this->longueur."m"." Largeur : ".$this->largeur."m".'"<br>';
    }
}
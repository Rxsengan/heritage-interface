<?php

class Sport implements ISport
{
    private $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport,int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    /**
     * @return int
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    public function getDescription(): string
    {
        return '<br>Description "Nom du sport : '.$this->nomSport." Nombre de joueur : ".$this->nbJoueurs.'"<br>';
    }
}
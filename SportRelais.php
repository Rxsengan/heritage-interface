<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $nbJoeurs, int $distance)
    {
        parent::__construct($nomSport, $nbJoeurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    public function getDescription(): string
    {
        return '<br>Description "Nom du sport : '.$this->getNomSport()." Nombre de joueur : ".$this->nbJoueurs." Distances : ".$this->distance."m".'"<br>';
    }
}
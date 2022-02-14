<?php

class Club implements Comparable
{
    protected $idClub;
    protected $nomClub;
    protected $nbPoints;
    protected $lesSports = [];

    /**
     * @param $idClub
     * @param $nomClub
     * @param $nbPoints
     */
    public function __construct($idClub, $nomClub, $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }

    /**
     * @return array
     */
    public function getLesSports(): array
    {
        return $this->lesSports;
    }

    public function AjouterSport(Sport $sport)
    {
        $this->lesSports[] = $sport;
    }

    public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }
}
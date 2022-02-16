<?php

include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'Club.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'data.php';

//Liste des sports d'un club
if (isset($_GET['id']) || isset($_POST['IdClub'])){
    if (isset($_GET['id'])){
        $idClub = $_GET['id'];
    }
    else{
        $idClub = $_POST['IdClub'];
    }
    echo 'Liste des sports : '.$club[$idClub]->getNomClub()."<br>";
    $sp1 = $club[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}

//Liste
echo "<br><a href='/index.php'>Retour</a>";

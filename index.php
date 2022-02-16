<?php

include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'Club.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'data.php';

$dbh = new PDO('mysql:host=localhost;dbname=gestionclub', username: 'root',password: '');
foreach ($dbh->query('SELECT * from club') as $row){
    print_r($row);
}

var_dump($dbh);

echo "<br>Projet Heritage et Interface<br>";

//Liste des clubs
echo 'LISTE DES CLUBS<br>';
foreach ($club as $keyClub => $valueClub){
    echo "<a href=result.php?id={$keyClub}>{$keyClub} - {$valueClub->getNomClub()} {$valueClub->getNbPoints()}</a><br>";
}

echo "<br>
        FORMULAIRE ID CLUB
      <br>
      <form method='post' name='formIdClub' action='result.php'>
        <label for='club-select'></label>        
            <select name='IdClub' id='club-select'>
                <option value=''>--Choisir un club--</option>";
foreach ($club as $kCLub => $vClub){
    echo "<option value='".$vClub->getIdClub()."'>".$vClub->getNomClub()."</option>";
}
echo "</select>
            <br>
        <button type='submit'>Envoie</button>
      </form>";
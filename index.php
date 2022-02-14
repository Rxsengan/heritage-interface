<?php

include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'Club.php';
include 'SportRelais.php';
include 'SportBallons.php';

echo "<br>Projet Heritage et Interface<br>";

$listClub[] = new Club(idClub: 1,nomClub: "FC PAS GAGNANT",nbPoints: 0);
$listClub[] = new Club(idClub: 2,nomClub: "T1 FAKER",nbPoints: 547);
$listClub[] = new Club(idClub: 3,nomClub: "FC ON EST LA",nbPoints: 239);
$listClub[] = new Club(idClub: 4,nomClub: "FC CONGOLAIS",nbPoints: 712);
$listClub[] = new Club(idClub: 5,nomClub: "FC TIR A BALLE REEL",nbPoints: 52);

$listClub[0]->AjouterSport($listSport[] = new Sport("Football ",11));
$listClub[1]->AjouterSport($listSport[] = new Sport("eSport ",10));
$listClub[2]->AjouterSport($listSport[] = new Sport("Braquage ",4));

$listClub[3]->AjouterSport($listSport[] = new SportRelais("4*100 ",1,400));
$listClub[3]->AjouterSport($listSport[] = new SportRelais("100m ",1,100));
$listClub[3]->AjouterSport($listSport[] = new SportRelais("200m ",1,200));
$listClub[3]->AjouterSport($listSport[] = new SportRelais("Course poursuite ",2,700));

$listClub[4]->AjouterSport($listSport[] = new SportBallons("Handball ",8,40,50));

$listSport[] = new Sport("Football ",11);
$listSport[] = new SportRelais("4*100 ",1,400);
$listSport[] = new SportRelais("100m ",1,100);
$listSport[] = new SportRelais("200m ",1,200);
$listSport[] = new SportBallons("Handball ",8,40,50);
$listSport[] = new Sport("Braquage ",4);
$listSport[] = new SportRelais("Course poursuite ",2,700);
$listSport[] = new Sport("eSport ",10);

/*foreach($listSport as $keyListSport => $valueListSport)
{
    echo $valueListSport->getDescription()."<br>";
}
*/

echo '<br>LISTE DES CLUBS :';
echo "<a href=\"http://localhost:8014/Club-FC-PAS-GAGNANT\"><br>FC PAS GAGNANT";
echo "<a href=\"http://localhost:8014/Club-T1-FAKER\"><br>T1 FAKER";
echo "<a href=\"http://localhost:8014/Club-FC-ON-EST-LA\"><br>FC ON EST LA";
echo "<a href=\"http://localhost:8014/Club-FC-CONGOLAIS\"><br>FC CONGOLAIS";
echo "<a href=\"http://localhost:8014/Club-FC-TIR-A-BALLE-REEL\"><br>FC TIR A BALLE REEL";

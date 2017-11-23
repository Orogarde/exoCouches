<?php

function connexion() {
    
    $host="localhost";
    $dbname="dbcouche";
    $utilisateur="root";
    $mdp="";
	// fonction pour automatiser la connexion à un serveur de base de données
	$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $utilisateur, $mdp)
            or die ("Attention, problème de connexion serveur");
            
	
	return $pdo;
	
}

function ajoutercom($text)
{
 //   echo "test";
 $dbh=connexion();
 $sql="insert into commentaire values(null,'$text')";
 $insertion= $dbh->exec($sql);
 if($insertion===FALSE)
 {
     echo 'problème d\'insertion';
 }

}

function LireCom()
{
$dbh=connexion();
$sql="select commentaire from commentaire";
$resultat=$dbh->query($sql);
return $resultat;

}



?>
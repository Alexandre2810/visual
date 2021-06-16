<?php

define('HOST', 'localhost');
define('USER', 'root');//id17055599_root
define('PASSWORD', '');//Batman_0102034
define('DATABASE', 'projetfinal');//id17055599_projetfinal




/**
 * Obtenir le score au test selon le profil et le type d'expérience
 * 
 * $profil int : 1 OR 2 (gamer/non-gamer)
 * $nbXp int : [1,4]
 */
function getScore($profile, $nbXp){
    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);//connexion à la base de donnée
    if(!$conn){
        return false;
    }

    $query = "SELECT scoretest FROM data___feuille_3 WHERE profil_id = $profile AND libelle = 'exp$nbXp'";

    $result = mysqli_query($conn, $query);
    if(!$result){
        return false;
    }
    $data = $result->fetch_row();

    $finalResult = floatval($data[0]);// récupère le premier et seul résultat de la requête

    mysqli_close($conn);
    
    return $finalResult;
}




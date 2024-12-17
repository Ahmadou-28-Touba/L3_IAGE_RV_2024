<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM produit";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM produit WHERE id =$id";
   return pg_query($connexion,$sql);
}

function add($libelle,$qt,$pu){
    global $connexion;
    $sql ="INSERT INTO produit (libelle,qt,pu,idcat) values
     ('$libelle','$qt','$pu',1)";
   return pg_query($connexion,$sql);
}

function updateProduit($id,$libelle,$quantite,$prix){
    global $connexion;
    $sql ="UPDATE produit SET libelle='$libelle',qt=$quantite,pu=$prix
    where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM produit where id = $id";
    return pg_query($connexion,$sql);
}



?>



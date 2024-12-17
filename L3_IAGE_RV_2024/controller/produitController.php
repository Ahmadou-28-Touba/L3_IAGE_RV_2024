<?php
    require_once('./model/produitModel.php');

    function index(){
       $produits = getAll();
       require_once './view/produit/list.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=produit');
    }

    function pageAdd(){
        require_once './view/produit/add.php';
    }

    function save(){
        $libelle =$_POST['libelle'];
        $qt = $_POST['quantite'];
        $pu = $_POST['prix'];
        add($libelle,$qt,$pu);
        header('location:index.php?controller=produit');
    }

    function getProduit(){
        $id = $_GET['id'];
        $produits = pg_fetch_assoc(getById($id)); 
        require_once './view/produit/edit.php';
     }

    function update(){
        $id = $_POST['id'];
        $libelle = $_POST['libelle'];
        $qt = $_POST['qt'];
        $pu = $_POST['pu'];
        updateProduit($id,$libelle,$qt,$pu);
        header('location:index.php?controller=produit');
     }


?>
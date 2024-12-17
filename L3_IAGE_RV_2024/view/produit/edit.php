<form action="?controller=produit&&action=update" method="POST">
    <input type="text" name="id" value=<?= $produits['id']?> hidden><br>
    <label for="">libelle</label>
    <input type="text" name="libelle" value=<?= $produits['libelle']?>><br>
    <label for="">Quantite</label>
    <input type="text" name="qt" value=<?= $produits['qt']?>><br>
    <label for="">Prix unitaire</label>
    <input type="text" name="pu" value=<?= $produits['pu']?>><br>

    <button type="submit">Update</button>

</form>
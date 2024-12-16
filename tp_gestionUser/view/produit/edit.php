

<form action="?controller=produit&&action=update" method="POST">
    <input type="text" name="id" value="<?= $produit['id'] ?>" hidden><br>

    <label for="">Nom</label>
    <input type="text" name="nom" value="<?= $produit['nom'] ?>"><br>
    <label for="">Description</label>
    <input type="text" name="descript" value="<?= $produit['descript'] ?>"><br>

    <label for="">Quantité</label>
    <input type="text" name="quantite" value="<?= $produit['quantite'] ?>"><br>

    <label for="">Prix </label>
    <input type="text" name="prix" value="<?= $produit['prix'] ?>"><br>

    <label for="">Catégorie</label>
    <select name="id_categorie">""
        <?php while($c = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $c['id'] ?>" <?= $produit['id_categorie'] == $c['id'] ? 'selected' : '' ?>>
                <?= $c['libelle'] ?>
            </option>
        <?php } ?>
    </select><br>

    <button type="submit">Modifier</button>
</form>

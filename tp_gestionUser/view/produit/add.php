

<form action="?controller=produit&&action=save" method="POST">
    <label for="">nom</label>
    <input type="text" name="nom"><br>

    <label for="">description</label>
    <input type="text" name="descript"><br>

    <label for="">Quantité</label>
    <input type="text" name="quantite"><br>

    <label for="">Prix</label>
    <input type="text" name="prix"><br>

    <label for="">Catégorie</label>
    <select name="id_categorie">
        <?php while($c = pg_fetch_assoc($categories)) { ?>
            <option value="<?= $c['id'] ?>"><?= $c['libelle'] ?></option>
        <?php } ?>
    </select><br>

    <button type="submit">Ajouter</button>
</form>

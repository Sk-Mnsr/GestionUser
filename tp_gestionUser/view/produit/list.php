
<body>

    <div class="container">
        <!-- Lien vers la page d'ajout -->
        <div class="add-product-link">
            <a href="?controller=produit&&action=add">Ajouter un Produit</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($p = pg_fetch_assoc($produits)) { ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['nom'] ?></td>
                        <td><?= $p['descript'] ?></td>
                        <td><?= $p['quantite'] ?></td>
                        <td><?= $p['prix'] ?></td>
                        <td><?= $p['id_categorie'] ?></td>
                        <td>
                            <a href="?controller=produit&&action=delete&id=<?= $p['id'] ?>" class="btn-actions delete">Supprimer</a>
                            <a href="?controller=produit&&action=edit&id=<?= $p['id'] ?>" class="btn-actions edit">Modifier</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Lien vers Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

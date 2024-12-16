<?php
$controller = $_GET["controller"] ?? 'produit';

if (!in_array($controller, ['produit', 'categorie', 'user'])) {
    die("Erreur : Contrôleur inconnu !");
}

require_once "./controller/{$controller}Controller.php";
?>

        <?php
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $action = $_GET['action'];

            switch ($controller) {
                case 'produit':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getProduit($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les produits !";
                    }
                    break;

                case 'categorie':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getCategorie($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les catégories !";
                    }
                    break;

                case 'user':
                    switch ($action) {
                        case 'add':
                            pageAdd();
                            break;
                        case 'delete':
                            remove();
                            break;
                        case 'save':
                            save();
                            break;
                        case 'edit':
                            if (isset($_GET['id']) && !empty($_GET['id'])) {
                                getUser($_GET['id']);
                            } else {
                                echo "Erreur : ID manquant pour l'édition !";
                            }
                            break;
                        case 'update':
                            update();
                            break;
                        default:
                            echo "Erreur : Action inconnue pour les utilisateurs !";
                    }
                    break;

                default:
                    echo "Erreur : Contrôleur inconnu !";
            }
        } else {
            index();
        }
        ?>
    </div>

<?php
    $title = $product->getName() || 'Produit';
    $styles = ['product.css', 'catalog.css'];
    require_once __DIR__ . '/partials/header.php';
?>

<main>
    <section>
        <fieldset id="product">
            <img class="product_img" src="<?= $product->getPicture(); ?>" alt="Image du produit">
            <div id="product_details">
                <h2>
                    <?= $product->getName(); ?>
                </h2>
                <h3>
                    <?= $product->getBrand(); ?>
                </h3>
                <p id="product_description">
                    <?= $product->getDescription(); ?>
                </p>
                <div id="product_buy">
                    <p class="product_price">
                        <span id="price">
                            <?= $product->getPrice(); ?>
                        </span>€
                    </p>
                    <a class="button_primary" href="<?= BASE_PATH; ?>/cart/addToCart?id=<?= $product->getId(); ?>">
                        Ajouter au panier
                    </a>
                </div>
            </div>
        </fieldset>
    </section>
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
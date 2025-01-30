<?php
$title = 'Catalogue';
$styles = ['catalog.css'];
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <?php if (isset($products) && !empty($products)): ?>
        <section>
            <h2>
                Catalogue
            </h2>
            <div class="catalog">
                <?php foreach ($products as $product):
                    require __DIR__ . '/partials/product.php';
                endforeach; ?>
            </div>
        </section>
    <?php else: ?>
        <section style="display:flex; flex-direction:column; align-items: center;">
            <p style="text-align: center; font-size: 1.5rem;">
                Aucun produit ne correspond à votre recherche.
            </p>
            <a href="<?= BASE_PATH; ?>/catalog" class="button_primary">
                Retourner au catalogue
            </a>
        </section>
    <?php endif; ?>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>
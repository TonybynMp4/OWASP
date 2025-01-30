<?php

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;

class CatalogController extends MainController
{
    public function catalog()
    {
        #$search = $_GET['search'] ?? null;

        $product = new Product();
        $products = $product->findAll();

        $data = [
            'products' => $products ?? null,
        ];

        $this->render('catalog', $data);
    }

    public function product()
    {
        $id = $_GET['id'] ?? null;
        $product = new Product();
        $product = $product->find($id);

        if (!$product) {
            $this->notFound();
            return;
        }

        $data = [
            'product' => $product,
        ];

        $this->render('product', $data);
    }
}

<?php

require(ROOT . '/models/Category.php');
require(ROOT . '/models/Product.php');

class ProductController
{
    public function actionView($id)
    {
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($id);

        require_once(ROOT . '/views/product/view.php');
        return true;
    }
}

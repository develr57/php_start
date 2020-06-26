<?php

require_once(ROOT . '/models/Category.php');
require_once(ROOT . '/models/Product.php');

class CatalogController
{
    public function actionIndex()
    {
        $categories     = Category::getCategoriesList();
        $latestProducts = Product::getLatestProducts(6);

        require_once(ROOT . '/views/catalog/index.php');
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);
       
        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}

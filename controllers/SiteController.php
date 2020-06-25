<?php

require_once(ROOT . '/models/Category.php');
require_once(ROOT . '/models/Product.php');

class SiteController
{
    public function actionIndex()
    {
        $categories     = Category::getCategoriesList();
        $latestProducts = Product::getLatestProducts(6);
        
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}

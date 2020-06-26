<?php

class CatalogController
{
    public function actionIndex()
    {
        $categories     = Category::getCategoriesList();
        $latestProducts = Product::getLatestProducts(12);

        require_once(ROOT . '/views/catalog/index.php');
    }

    public function actionCategory($categoryId, $page = 1)
    {
        $categories = Category::getCategoriesList();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        $total = Product::getTotalProductsInCategory($categoryId);

        // Создаём объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
       
        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}

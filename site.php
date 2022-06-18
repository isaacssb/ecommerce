<?php

use \Hcode\Model\Product;
use \Hcode\Model\Category;
use \Hcode\Page;

$app->get('/', function() {

	$products = Product::listAll();

	$page = new Page();

	$page->setTpl("index", [
		"products" => Product::checklist($products)
	]);

});

$app->get("/categories/:idcategory", function($idcategory) {

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$category = new Category();

	$category->get((int)$idcategory);

	$pagination = $category->getProductsPage($page);

	$page = new Page();

	$pages = [];

	for ($i=1; $i < $pagination['pages']; $i++) {
		array_push($pages, [
			'link' => '/categories/' . $category->getidcategory() . '?page=' .$i,
			'page' => $i
		]);
	}

	$page->setTpl("category", array(
		"category" => $category->getValues(),
		"products" => $pagination['data'],
		"pages" => $pages
	));
});

?>
<?php
return array(
    // products:
    'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController
    // ctalog:
    'catalog' => 'catalog/index', // actionIndex in CatalogController
    //products category:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController
    // shopcart:
    'cart/checkout' => 'cart/checkout', // actionAdd in CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete in CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd in CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax in CartController
    'cart' => 'cart/index', // actionIndex in CartController
    //user:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // control products:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // control category:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // control orders:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // admin:
    'admin' => 'admin/index',
    // about
    'contacts' => 'site/contact',
    'about' => 'site/about',
    // main page
    'index.php' => 'site/index', // actionIndex in SiteController
    '' => 'site/index', // actionIndex in SiteController
    
);

?>

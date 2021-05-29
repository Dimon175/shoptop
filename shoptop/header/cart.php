<?php


class Application_Models_Cart
{
function addToCard($id, $count=1)
{
$_SESSION[‘cart’][$id]=$_SESSION['cart'][$id]+$count;return true;
}
function delFromCart($id, $count=1){}
 
function clearCart(){}
}


class Application_Controllers_Catalog extends Lib_BaseController
{
function index()
{
if($_REQUEST['in-cart-product-id'])
{
$scart=new Application_Models_Cart;
$cart->addToCart($_REQUEST[‘in-cart-product-id’]);
Lib_SmalCart::getInstance()->setCartData();
header('Location: /catalog');
exit;
}

$model=new Application_Models_Catalog
$items =| $model->>getList();
$this->Items=$Items;
}
}
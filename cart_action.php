<?php
require 'config.php';
header('Content-Type: application/json');
$action=$_POST['action']??'';
$id=(int)($_POST['id']??0);
$qty=(int)($_POST['qty']??0);
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
if($action==='remove'){unset($_SESSION['cart'][$id]);}
elseif($action==='update' && $id){
  $q=$conn->prepare('SELECT stock FROM products WHERE product_id=?'); $q->bind_param('i',$id); $q->execute();
  $p=$q->get_result()->fetch_assoc();
  if(!$p){echo json_encode(['ok'=>false,'message'=>'Product not found']);exit;}
  if($qty<=0) unset($_SESSION['cart'][$id]); else $_SESSION['cart'][$id]=min($qty,(int)$p['stock']);
}
$subtotal=0;$count=cart_count();
if($_SESSION['cart']){
 $ids=implode(',',array_map('intval',array_keys($_SESSION['cart'])));
 $r=$conn->query("SELECT product_id,price FROM products WHERE product_id IN ($ids)");
 while($p=$r->fetch_assoc()) $subtotal+=(float)$p['price']*($_SESSION['cart'][$p['product_id']]??0);
}
echo json_encode(['ok'=>true,'count'=>$count,'subtotal'=>$subtotal,'formatted'=>money($subtotal)]);

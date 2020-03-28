<?php
require __DIR__ . '/../db-connect.php';

$query = "SELECT ot.id, ot.nume as nume_comanda, opt.product_id, pt.nume as nume_produs, pt.pret 
    FROM `orders` as ot 
    JOIN `order_product` as opt ON ot.id=opt.order_id 
    JOIN `products` as pt ON pt.id=opt.product_id 
    WHERE ot.id = 1 AND pt.pret > 30";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';


<?php
require __DIR__ . '/../db-connect.php';

$query = $query = "SELECT ot.id, ot.nume as nume_comanda, COUNT(*) as total_products, SUM(pt.pret) as total_price
        FROM `orders` as ot 
        JOIN `order_product` as opt ON ot.id=opt.order_id 
        JOIN `products` as pt ON pt.id=opt.product_id
        GROUP BY ot.id";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';
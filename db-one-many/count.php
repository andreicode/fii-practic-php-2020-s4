<?php
require __DIR__ . '/../db-connect.php';

$query = "SELECT ct.id, ct.nume, COUNT(*) as total_products FROM `categories` as ct JOIN `products` as pt ON ct.id = pt.category_id GROUP BY ct.id ";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';


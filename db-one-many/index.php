<?php
require __DIR__ . '/../db-connect.php';

$query = "SELECT pt.id, pt.pret, pt.nume, pt.descriere, ct.nume as category_name FROM `products` as pt JOIN `categories` as ct ON pt.category_id=ct.id WHERE pt.pret < 30";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';


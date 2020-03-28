<?php
require __DIR__ . '/../db-connect.php';

//EXTRA
// De scos produse din baza de date dupa idurile-ul dat in $_GET : index.php?ids=3,4

// Poti folosi query-ul asta in aducerea produselor de pe cosul de cumparaturi
$query = "SELECT * FROM `products` WHERE id IN (3, 4)";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$results = $statement->fetchAll();

echo '<pre>';
foreach($results as $row) {
    print_r($row);
}
echo '</pre>';

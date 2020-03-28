<?php

//e luat din sesiune
$products = [['id' => 4, 'qty' => 2], ['id' => 1, 'qty' => 6]];

//daca faceti cartul asa trebuie sa faceti un tablou de frecventa (sa va pregatiti datele)
$products2 = [5, 3, 1, 7, 8, 9, 1, 3, 5];

//query in db pt nume pt fiecare produs
// WHERE IN (5, 3, 1)

foreach($products as $product) {
    //nu faceti query aici
    echo '<p>' . $product['id'] . ' QTY: ' . $product['qty'] . '</p>';
}
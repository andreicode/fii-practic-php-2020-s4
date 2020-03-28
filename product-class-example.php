



<?php

class Product {

    private $id;
    private $nume;
    private $pret;
    function __construct($data) {
        // $this->id = $data['id'];
        // $this->nume = $data['nume'];
        // $this->pret = $data['pret'];
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    public function setNume($nume) {
        $this->nume = $nume;
    }
    public function setPret($pret) {
        $this->pret = $pret;
    }
    
    };

/**
* Extragem codul asta intr-o functie separata
*/
function getProducts() {
$products = [];
$query = '';
//exrragem datele
$results = [];

foreach ($results as $result) {

    // $result = ['id' => 4, 'nume' => 'asdg', 'pret' => 3]

    // $products[] = new Product($result);

    $product = new Product();
    $product->setId($result['id']);
    $product->setNume($result['nume']);
    $product->setPret($result['pret']);
    $products[] = $product;
}

return $products;
}


//In front-end
$products = getProducts();

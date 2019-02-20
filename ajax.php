<?php 

$name = $_POST['passed'];

$DB = new PDO("mysql:host=localhost;dbname=classicmodels;charset=utf8", "root", "troiswa");

$sql = "SELECT productCode, productName FROM products WHERE productName LIKE :n OR productCode LIKE :n";
$query = $DB->prepare($sql);
$query->execute(array(":n" => "%" . $name . "%"));


$data = $query->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($data);
echo $data;
?>
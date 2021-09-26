<?php
$mysqli = new mysqli('localhost', 'root', '','Productdb') or die(mysqli_error($mysqli));
if(isset($_POST['add'])){
    $sku=$_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];

    $combined = $height."x".$width."x".$length;
    $mysqli->query("INSERT INTO productdb (sku, name, price, size, dimentions, weidht) VALUES('$sku','$name','$price','$size','$combined','$weight')") or die($mysqli->error);
    
    header("Location:../index.php");
    exit();
}
?>


<?php
require_once('./php/component.php');
require_once('./php/createDB.php');

// create instance of createdb class
$database = new createDB("productdb","productdb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Product List</title>
</head>
<body>
    <div class="main-conteiner " >
        <div class="nameConteiner">
            <h1 class=conteinerHeadText style="float:left;">Product List</h1>
        </div>
        <form action="./php/bridge.php" method="POST">
        <button type="submit" class="btn btn-warning my-3" id="delete-product-btn" name="delete" >Mass Delete</button>
        <button type="submit" class="btn btn-warning my-3" name="addForm" >Add</button>
            <div class="line"></div>
            <div class="container">
                <div class="row text-center py-5">
                    <?php
                    $result = $database->getData();
                    if($result==NULL){
                        component("There","Is","No","Data");
                    }else{
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['size']!=0){
                                DiskComponent($row['ID'],$row['sku'],$row['name'],$row['price'],$row['size']);
                            }else if($row['dimentions']!="xx"){
                                FurnitureComponent($row['ID'],$row['sku'],$row['name'],$row['price'],$row['dimentions']);
                            }else if($row['weidht']!=0){
                                BookComponent($row['ID'],$row['sku'],$row['name'],$row['price'],$row['weidht']);
                            };
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
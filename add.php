<?php
require_once('./php/success.php');
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
    <title>Add Products</title>
</head>
<body>
    <div class="main-conteiner " >
        <div class="nameConteiner">
            <h1 class=conteinerHeadText style="float:left;">Product Add</h1>
        </div>
        <a href="index.php">
          <div type="submit" class="btn btn-warning my-3" id="cancel-product-btn" name="cancel" >Cancel</div>
        </a>
        <form action="./php/success.php" method="POST">
          <button type="submit" class="btn btn-warning my-3" name="add">Add</button>

        <div class="line"></div>
        <div id="product_form form-row">
          
            <table>
                <tr>
                    <th><h5>SKU</h5></th>
                    <th><input type="text" id="sku" name="sku" required></th>
                </tr>
                <tr>
                    <th><h5>Name</h5></th>
                    <th><input type="text" id="name"  name="name" required></th>
                </tr>
                <tr>
                    <th><h5>Price($)</h5></th>
                    <th><input type="number" id="price" value="0"  name="price" required></th>
                </tr>
                <tr>
                    <th><h5>Type Switcher</h5></th>
                    <th><select name="switches" id="productType" onchange='on_change(this)' required>
                            <option selected disabled value="default">Choose..</option>
                            <option value="one">DVD-disc</option>
                            <option value="two">Furniture</option>
                            <option value="three">Book</option>
                        </select></th>
                </tr>
            </table>
               <div class="optionConteiner">
                    <div class="optionOne" id="optionOne" >
                         <ul>
                              <li><h5>Size(MB)</h5></li>
                              <li><input type="number" id="size" name="size" ></li> 
                         </ul>
                         <div class="optionText">Please, provide Disc space in MB</div>
                    </div>
                    <div class="optionTwo" id="optionTwo">
                         <ul class="firstList">
                              <li><h5>Height(CM)</h5></li>
                              <li><input type="number" id="height" name="height" ></li>
                         </ul>
                         <ul class="secondList">
                              <li><h5>Width(CM)</h5></li>
                              <li><input type="number" id="width" name="width" ></li>
                         </ul>
                         <ul class="thirdList">
                              <li><h5>Length(CM)</h5></li>
                              <li><input type="number" id="length" name="length" ></li>
                         </ul>
                         <div class="optionText">Please, provide Height, Width and Length in CM</div>       
                    </div>
                    <div class="optionThree" id="optionThree">
                         <ul>
                              <li><h5>Weight(KG)</h5></li>
                              <li><input type="number" id="weight" name="weight" ></li> 
                         </ul>
                         <div class="optionText">Please, provide Weight in KG</div>
                    </div>   
               </div>
          </form>
        </div>
    </div>
<script>
    function on_change(element){
     if(element.options[element.selectedIndex].value == 'one'){ 
          document.getElementById('optionOne').style.display = 'block'; 
     }else{
          document.getElementById('optionOne').style.display = 'none'; 
     }
     if(element.options[element.selectedIndex].value == 'two'){ 
          document.getElementById('optionTwo').style.display = 'block'; 
     }else{
          document.getElementById('optionTwo').style.display = 'none'; 
     }
     if(element.options[element.selectedIndex].value == 'three'){ 
          document.getElementById('optionThree').style.display = 'block'; 
     }else{
          document.getElementById('optionThree').style.display = 'none'; 
     }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
<?php

function DiskComponent($id,$productSKU,$productName,$productPrice,$productSize){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" >
                <div class=\"card shadow\">
                    <div class=\"card-body border border-dark\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input delete-checkbox\" type=\"checkbox\" id=\"flexCheckDefault\" name=\"checkbox[]\" value=\"$id\">
                        </div>
                        <h5 class=\"card-title\">$productSKU</h5>
                        <h5 class=\"card-type\">$productName</h5>
                        <h5 class=\"card-price\">$productPrice $</h5>
                        <h5 class=\"card-size\">Size: $productSize MB</h5>
                    </div>
                </div>
            </div>
    ";
    echo $element;
}
function FurnitureComponent($id,$productSKU,$productName,$productPrice,$productDimentions){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" >
                <div class=\"card shadow\">
                    <div class=\"card-body border border-dark\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input delete-checkbox\" type=\"checkbox\" id=\"flexCheckDefault\" name=\"checkbox[]\" value=\"$id\">
                        </div>
                        <h5 class=\"card-title\">$productSKU</h5>
                        <h5 class=\"card-type\">$productName</h5>
                        <h5 class=\"card-price\">$productPrice $</h5>
                        <h5 class=\"card-size\">Dimentions: $productDimentions</h5>
                    </div>
                </div>
            </div>
    ";
    echo $element;
}
function BookComponent($id,$productSKU,$productName,$productPrice,$productWeight){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" >
                <div class=\"card shadow\">
                    <div class=\"card-body border border-dark\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input delete-checkbox\" type=\"checkbox\" id=\"flexCheckDefault\" name=\"checkbox[]\" value=\"$id\">
                        </div>
                        <h5 class=\"card-title\">$productSKU</h5>
                        <h5 class=\"card-type\">$productName</h5>
                        <h5 class=\"card-price\">$productPrice $</h5>
                        <h5 class=\"card-size\">Weight: $productWeight KG</h5>
                    </div>
                </div>
            </div>
    ";
    echo $element;
}
function component($productSKU,$productName,$productPrice,$productWeight){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" >
                <div class=\"card shadow\">
                    <div class=\"card-body border border-dark\">
                        <h5 class=\"card-title\">$productSKU</h5>
                        <h5 class=\"card-type\">$productName</h5>
                        <h5 class=\"card-price\">$productPrice</h5>
                        <h5 class=\"card-size\"> $productWeight</h5>
                    </div>
                </div>
            </div>
    ";
    echo $element;
}

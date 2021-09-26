<?php

if(isset($_POST['delete'])){
    require_once('./massDelete.php');
}
if(isset($_POST['addForm'])){
    header("Location:../add.php");
    exit();
}
?>
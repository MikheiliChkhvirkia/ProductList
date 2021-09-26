<?php
require_once('./connect.php');
if(isset($_POST['delete'])){
    $deletID = $_POST['checkbox'];
    foreach($deletID as $id){
        mysqli_query($mysqli,"DELETE FROM productdb WHERE id=".$id);
        $element="<h5 class=\"card-title\">$id</h5>";
        echo $element;
    }
    header("Location:../index.php");
    exit();
}
?>
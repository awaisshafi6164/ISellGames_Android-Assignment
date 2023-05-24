<?php

$con = mysqli_connect("localhost","id20806361_isellgames","ISellGames@3","id20806361_games");

$name = $_POST["name"];
$size = $_POST["size"];
$price = $_POST["price"];

$sql = "INSERT INTO games(name,size,price) VALUES ('$name', '$size', '$price')";

$result = mysqli_query($con,$sql);

if($result){
    echo "inserted successfully";
}else{
    echo "Failed";
}

?>
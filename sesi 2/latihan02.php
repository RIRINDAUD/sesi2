<?php
//area Script PHP
    $pg = 1;
    if(isset($_GET["pg"])){
        $pg = $_GET["pg"];
    }
    $pg = $_GET["pg"];

    switch($pg){
        case 1:
            $konten="<h3>page 1</h3>";
            break;
        case 2:
             $konten="<h3>page 2</h3>";
             break;
        case 3:
             $konten="<h3>page 2</h3>";
             break;
        default:
            $konten="<h3>page 1</h3>";
        
    }
    $judulpage = "latihan membuat halaman";
    $konten="<h3>latihan membuat halaman</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><=$judulpage?></title>
</head>
<body>

<ul>
    <li><a href="pg=1">page 1</a></li>
    <li><a href="pg=2">page 2</a></li>
    <li><a href="pg=3">page 3</a></li>
<ui>
    <?=$konten;?>  

</body>
</html>
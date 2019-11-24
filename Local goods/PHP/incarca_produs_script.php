<?php
require_once("connecttodbproduse.php");

if(isset($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file));

    $poza = $_FILES["file"]["name"];
    $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
    $cantitate = isset($_POST['cantitate']) ? $_POST['cantitate'] : '';
    $pret = isset($_POST['pret']) ? $_POST['pret'] : '';
    $descriere = isset($_POST['descriere']) ? $_POST['descriere'] : '';

    $query = "INSERT INTO produs(poza, numele, cantitate, pret, descriere) VALUES('$poza', '$nume', '$cantitate', '$pret', '$descriere')";
    $result = mysqli_query($conn, $query);

    header("Location: produse.php");
}
?>
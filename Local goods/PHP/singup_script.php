<?php
    require_once("connecttodb.php");

    // cumparator
    if(isset($_POST['signup']))
    {
        $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
        $parola = isset($_POST['parola']) ? $_POST['parola'] : '';
        $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $adresa = isset($_POST['adresa']) ? $_POST['adresa'] : '';
        $privat = isset($_POST['privat']) ? $_POST['privat'] : '';
        $companie = isset($_POST['companie']) ? $_POST['companie'] : '';
        $statut = $privat == "on" ? "privat" : "companie";

        $stmt = $conn -> prepare("INSERT INTO utilizator_cumparator(nume, parola, numar_telefon, email, adresa, statut) VALUES(?, ?, ?, ?, ?, ?)");
        $parola = md5($parola);
        $stmt->bind_param('ssssss', $nume, $parola, $telefon, $email, $adresa, $statut);
        $stmt->execute();

        header("Location: login.php");
    }

    // vanzator
    if(isset($_POST['signupsell']))
    {
        echo 'muie';
        $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
        $parola = isset($_POST['parola']) ? $_POST['parola'] : '';
        $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $adresa = isset($_POST['adresa']) ? $_POST['adresa'] : '';
        $privat = isset($_POST['privat']) ? $_POST['privat'] : '';
        $companie = isset($_POST['companie']) ? $_POST['companie'] : '';
        $statut = $privat == "on" ? "privat" : "companie";

        $stmt = $conn -> prepare("INSERT INTO utilizator_vanzator(nume, parola, numar_telefon, email, adresa, clienti) VALUES(?, ?, ?, ?, ?, ?)");
        $parola = md5($parola);
        $stmt->bind_param('ssssss', $nume, $parola, $telefon, $email, $adresa, $statut);
        $stmt->execute();

        header("Location: login.php");
    }
?>
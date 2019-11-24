<?php
    session_start();

    require_once("connecttodb.php");

    if(isset($_POST['login']))
    {
        $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
        $parola = isset($_POST['parola']) ? $_POST['parola'] : '';
        $parola = md5($parola);
    
        $query = "SELECT * FROM utilizator_cumparator WHERE nume='$nume' AND parola='$parola'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['nume'] = $nume;
            $_SESSION['parola'] = $parola;
            $_SESSION['statut'] = "cumparator";
            header("Location: cumparator.php");
        }
        if(mysqli_num_rows($result) == 0)
        {
            $query = "SELECT * FROM utilizator_vanzator WHERE nume='$nume' AND parola='$parola'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1)
            {
                $_SESSION['nume'] = $nume;
                $_SESSION['parola'] = $parola;
                $_SESSION['statut'] = "vanzator";
                header("Location: vanzator.php");
            }
            if(mysqli_num_rows($result) == 0)
            {
                $_SESSION['nume'] = '';
                $_SESSION['parola'] = '';
                $_SESSION['statut'] = '';
            }
        }
    }

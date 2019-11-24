<?php
require_once("PHP/incarca_produs_script.php");

$query = "SELECT * FROM produs";

$result = mysqli_query($conn, $query);
?>

<html>

<head>
    <title>

    </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <link rel="stylesheet" href="CSS/cumparator.css">
</head>

<body>
    <div class="meniu">
        <ul>
            <li><i class="fas fa-home" style="color: white"></i> </li>
            <li><i class="fas fa-boxes" style="color: white"></i></li>
            <li><i class="fas fa-sign-in-alt" style="color: white"></i></li>
            <li><i class="fas fa-shopping-cart" style="color: white"></i></li>
        </ul>
    </div>

    <div class="title">
        <span>Products</span>
    </div>

    <div class="view-filter">
        <span><i class="fas fa-th"></i></span>
        <span><i class="fas fa-th-list"></i></span>
        <span><i class="fas fa-map-marked-alt"></i></span>
    </div>

    <?php while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="produs">
            <h2><?php echo $row['numele']; ?></h2>
            <img src="uploads/<?php echo $row['poza']; ?>" alt="Free Account">
            <span class="pret"><b>Pret:</b> <?php echo $row['pret']; ?> lei</span>
            <div class="butoane">
                <button type="Submit" class="adauga">Adauga <i class="fas fa-shopping-basket"></i></button>
                <button type="Submit" class="detalii">Mai multe</button>
            </div>
        </div>

    <?php
    }
    ?>
    </div>
    </div>
    <div class="sub-category">
        <div class="sub-produse">
            <h1>Produse</h1>
            <label class="container">Legume
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="container">Fructe
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Lactate
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Facute de mana
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="sub-pret">
            <h1>Pret</h1>
            <label class="container">Legume
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="container">Fructe
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Lactate
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Facute de mana
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>

        <div class="sub-cantitate">
            <h1>Cantitate</h1>
            <label class="container">Legume
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <label class="container">Fructe
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Lactate
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Facute de mana
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    </div>




</body>

</html>

<script>
    $(document).ready(function() {
        $(".fa-home").click(function() {
            window.location.href = "index.php";
        });

        $(".fa-boxes").click(function() {
            window.location.href = "produse.php";
        });
        $(".fa-sign-in-alt").click(function() {
            window.location.href = "login.php";
        });
        $(".fa-shoping-cart").click(function() {
            window.location.href = "login.php";
        });
    });
</script>
<?php
require_once("PHP/incarca_produs_script.php");
?>

<html>

<head>
    <title>

    </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <link rel="stylesheet" href="CSS/produse-adaug.css">
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
    <div class="titlu-produs">
        <span>Adauga un produs</span>

        <form method="post" action="produse.php" enctype="multipart/form-data">
            <div class="browse">
                <a href="#"> Adauga fotografia produsului</a>
                <input type="file" onchange="readURL(this);" style="z-index:2; opacity:0%;" name="file" id="file" />
                </div>
                    <img id="blah" src="" alt="" />
                    <input type="text" placeholder="Adauga numele " class="nume" name="nume" />
                    <input type="number" placeholder="Adauga cantitate " class="cantitate" name="cantitate" />
                    <input type="number" placeholder="Adauga pretul " class="pret" name="pret" />
                    <input type="text" placeholder="Adauga descriere " class="descriere" name="descriere" />
                    <input type="submit" class="adauga" value="Adaugare" name="submit" />
                </div>
            </div>
    </form>
</body>

</html>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<html>

<head>
    <link rel="stylesheet" href="CSS/index.css" />
    <link rel="stylesheet" href="CSS/circle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <title>Local Goods</title>
</head>

<body>
    <header>
        <div class="meniu">
            <ul>
                <li><i class="fas fa-home" style="color: white"></i> </li>
                <li><i class="fas fa-boxes" style="color: white"></i></li>
                <li><i class="fas fa-sign-in-alt" style="color: white"></i></li>
            </ul>
        </div>

        <div class="intro">
            <img src="IMG/bg.jpg" />
            <h2>Noi sustinem agricultura de maine</h2>
            <span><i>- pentru agricultori, dorinţele rămân ferme -</i></span><br>
            <button class="inreg-btn">Alatura-te</button>
        </div>
    </header>

    <div class="publicitate">
        <span>De ce noi</span>
    </div>
    <div class="inf">
        <div class="free">
            <img src="IMG/free.png" alt="Free Account" id="free">
            <span>Inregistrare gratuita</span>
        </div>
        <div class="delivery">
            <img src="IMG/delivery-img.jpg" alt="Free Delivery" id="delivery">
            <span>Livrare gratuita</span>
        </div>
        <div class="friendly">
            <img src="IMG/friendly.png" alt="User Friendly" id="friendly">
            <span>Prietenos cu utilizatorii</span>
        </div>
    </div>
 
    <div class="statistici">
        <span class="title-statistici">Statistici</span>
    <div class="clearfix">

<div class="c100 p92 big">
    <span>92%</span>
    <div class="slice">
        <div class="bar"></div>
        <div class="fill"></div>
    </div>
</div>
<div class="c100 p94 big green">
    <span>94%</span>
    <div class="slice">
        <div class="bar"></div>
        <div class="fill"></div>
    </div>
</div>
<div class="c100 p98 big orange">
    <span>98%</span>
    <div class="slice">
        <div class="bar"></div>
        <div class="fill"></div>
    </div>
</div>
</div>  
<div class="inf-92">Clienti multumiti</div>
<div class="inf-94">Produse vandute</div>
<div class="inf-98">Cumparatori</div>
<!--
        <div class="clienti-multumiti">
            <span class="procent">90%</span>
            <span class="desc">clienti multimiti</span>
        </div>

        <div class="produse-vandute">
            <span class="procent">95%</span>
            <span class="desc">produse vandute</span>
        </div>

        <div class="cumparatori-revin">
            <span class="procent">99%</span>
            <span class="desc">cumparatori revin</span>
        </div>
          -->
    </div>
  

            <!-- <div class="copyright">

        <span>&copy All rights reserved</span>

    </div> -->


</body>

<script>
    
</script>

</html>

<script>
$(document).ready(function(){
    $(".fa-home").click(function(){
          window.location.href ="index.php";
    });

    $(".fa-boxes").click(function(){
         window.location.href ="produse.php";
     });
     $(".fa-sign-in-alt").click(function(){
         window.location.href ="login.php";
     });
});
</script>
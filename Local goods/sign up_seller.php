<?php
    require_once("PHP/singup_script.php");
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/sign%20up_seller.css">
<title>Sign Up</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
<div class="meniu">
            <ul>
                <li><i class="fas fa-home" style="color: white"></i> </li>
                <li><i class="fas fa-boxes" style="color: white"></i></li>
                <li><i class="fas fa-sign-in-alt" style="color: white"></i></li>
            </ul>
        </div>
    
        <button type="Submit" class="buyer">Cumparator</button>
        <button type="Submit" class="seller">Vanzator</button>
        <form class="login-form" method="post">
<div class="all-txtb">
    <div class="txtb">
        <input type="text" class="text" name="nume">
        <span data-placeholder="Full name"></span>
    </div>

    <div class="txtb">
      <input type="password" name="parola">
      <span data-placeholder="Password"  ></span>
    </div>

    <div class="txtb">
        <input type="text" class="text" name="telefon">
        <span data-placeholder="Phone Number"  ></span>
    </div>

    <div class="txtb">
        <input type="text" class="text" name="email">
        <span data-placeholder="Email"  ></span>
    </div>

    <div class="txtb">
        <input type="text" class="text"  name="adresa">
        <span data-placeholder="Adresa" ></span>
    </div>

    <label class="container">Private
  <input type="checkbox" checked="checked" name="privat">
  <span class="checkmark"></span>
</label>

<label class="container">Company
  <input type="checkbox">
  <span class="checkmark"  name="companie"></span>
</label>
    </div>

    <input type="submit" class="logbtn" value="Sign Up" name="signupsell">

  </form>

  <script type="text/javascript">
    $(".txtb input").on("focus",function(){
      $(this).addClass("focus");
    });



  </script>
</body>

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
     $(".buyer").click(function(){
         window.location.href ="sign%20up.php";
     });
});
</script>
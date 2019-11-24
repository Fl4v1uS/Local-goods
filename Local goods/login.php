<?php
    require_once("PHP/login_script.php");
?>

<hmtl>

<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="CSS/login.css">
<title>Login</title>
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

  <form class="login-form" method="post">
    <h1>Login</h1>

    <div class="txtb">
        <input type="text" name="nume">
        <span data-placeholder="Username"></span>
    </div>

    <div class="txtb">
      <input type="password" name="parola"> 
      <span data-placeholder="Password" name="parola"></span>
    </div>

    <input type="submit" class="logbtn" value="Login"  name="login">

    <div class="bottom-text">
      Don't have an account? <a href="#" id="sign">Sign up</a>
    </div>
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
     $("#sign").click(function(){
         window.location.href ="sign%20up.php";
     });
});
</script>

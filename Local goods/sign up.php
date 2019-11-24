<?php
    require_once("PHP/singup_script.php");
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/sign%20up.css">
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
        <form class="login-form" name="myForm"  action="sign%20up_seller.php" method="post" onsubmit="return validateForm()">
<div class="all-txtb">
    <div class="txtb">
        <input type="text" class="text" name="nume">
        <span data-placeholder="Full name"  name="nume"></span>
    </div>

    <div class="txtb">
      <input type="password" name="parola">
      <span data-placeholder="Password" name="parola"></span>
    </div>

    <div class="txtb">
        <input type="text" class="text" name="telefon">
        <span data-placeholder="Phone Number"  name="telefon"></span>
    </div>

    <div class="txtb">
        <input type="email" class="text"  name="email">
        <span data-placeholder="Email"  name="email"></span>
    </div>

    <div class="txtb">
        <input type="text" class="text" name="adresa">
        <span data-placeholder="Adresa"  name="adresa"></span>
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

    <input type="submit" class="logbtn" value="Sign Up"  name="signup">

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
     $(".seller").click(function(){
         window.location.href ="sign%20up_seller.php";
     });
});
</script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["nume"].value;
  var y = document.forms["myForm"]["parola"].value;
  var z = document.forms["myForm"]["email"].value;
  var c = document.forms["myForm"]["adresa"].value;

  var n = y.length;
  var cnt = 0;
    for(i = 0 ;i < z.lenght; i++)
    {
        if(z.charAt(i) == '@')
        {
            cnt += 1;
        }
    }
  if (x == "" || y < 8 || z == "" || c == "" || cnt <  0) {
    alert("One of the inputs are wrong");
    return false;
  }
}
</script>


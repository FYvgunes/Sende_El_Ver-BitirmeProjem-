<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEV - Yardımsever Kayıt</title>
  <link rel="stylesheet" href="Assets/css/main.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="body">
  <!-- Header Start -->
  <?php include "inc/Header.php";?>
  <!-- Header End -->
  <div class="giris">
  
    <form action="inc/yardımci_kayit.php" nama="myform" method="POST" class="form-giris">
     
      <h1><i class="fas fa-users"></i>Yardımsever Kayıt</h1>
      <input type="text" name="KullaniciAdi" class="name-admin" placeholder="Kullanıcı Adı" require />
      <input type="email" name="Kullanıcıemail" class="name-admin" placeholder="E-mail Adresi" require />
      <input type="password" name="Kullanicisifre" class="name-admin" placeholder="Şifreniz" require />

      <div class="form-grub">

        <button type="Submit" class="kayit_btn">Kayıt Ol</button>
        
      </div>
      <?php if (isset($_SESSION["alert"])) { ?>
        <p style="text-align: center; padding:10px 15px; color:white; background-color:<?php echo $_SESSION["alert"]["type"]; ?>;">
          <?php echo $_SESSION["alert"]["message"]; ?>
        </p>
        <?php unset($_SESSION["alert"]); ?>

        <?php } ?>
    </form>
   
  </div>
  <div class="footer-admin">
    <p>Copyright @2020 Desing And Creating by <a href="#">Veysel GÜNEŞ</a></p>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $(window).scroll(function () {
        if (this.scrollY > 10) {
          $(".navbar").addClass("stiyk");
        } else {
          $(".navbar").removeClass("stiyk");
        }
      });
      $(".menu-toggle").click(function () {
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
      });
    });

    function validateForm() {
    var x = document.forms["myForm"]["KullaniciAdi"].value;
    var y = document.forms["myForm"]["Kullanıcıemail"].value;
    var z = document.forms["myForm"]["Kullanicisifre"].value;
    if (x == "" || y == "" || z == "") {
        alert("Name must be filled out");
        return false;
    }
}
  </script>
</body>

</html>
<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php


if ($_POST) {
 //Form kısmında gelen post ile gelen değerlimizi burada tutuyotuz. Bunu amacı ise sql injac saldırdırarını boşa çıkarma.
    $adres = p('adres');
    $telefon = p('telefon');
    $email = p('email');
  
    //
    if (!empty($email) && !empty($telefon) && !empty($adres))  {

        $insert = $db->exec("UPDATE   iletisim SET  Adres='{$adres}',Tel='{$telefon}',eposta='{$email}'");
        echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
        header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=iletisim ");
    }
    else
    {
        echo "<p class='alert alert-danger'>İletişim Bilgileri Eklerken bir problemle karşılaştı</p>";
    }
   
}

$sor = $db->query("SELECT * FROM  iletisim");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> İletişim Bilgileri<br /><small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">

            <!-- İletişim bilgilerin alındıgı kısım -->
                <label>Adres :</label> <input type="text" name="adres" class="form-control"
                    value="<?php echo $Blog['Adres']; ?>" placeholder="Adres..." />

                <label>Telefon:</label> <input type="text" name="telefon" class="form-control"
                    value="<?php echo $Blog['Tel']; ?>" placeholder="Telefon" />

                <label>A-posta :</label> <input type="text" name="email" class="form-control"
                    value="<?php echo $Blog['eposta']; ?>" placeholder="E-posta" />


                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
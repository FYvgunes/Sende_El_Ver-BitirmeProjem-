<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php


if ($_POST) {
 //Form kısmında gelen post ile gelen değerlimizi burada tutuyotuz. Bunu amacı ise sql injac saldırdırarını boşa çıkarma.
    $hakkımızda = p('hakkımızda');
    $hakkımızda1 = p('hakkımızda1');
    $hakkımızda2 = p('hakkımızda2');
  
    //
    if (!empty($hakkımızda2) && !empty($hakkımızda1) && !empty($hakkımızda))  {

        $insert = $db->exec("UPDATE   hakkımızda SET  hakkımızda_1='{$hakkımızda}',hakkımızda_2='{$hakkımızda1}',hakkımızda_3='{$hakkımızda2}'");
        echo "<p class='alert alert-success'>Hakkımızda başarıyla eklendi. Lütfen Bekleyiniz...</p>";
        header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=hakkımızda.php ");
    }
    else
    {
        echo "<p class='alert alert-danger'>Hakkımızda Bilgileri Eklerken bir problemle karşılaştı</p>";
    }
   
}

$sor = $db->query("SELECT * FROM  hakkımızda");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> İletişim Bilgileri<br /><small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">

            <!-- İletişim bilgilerin alındıgı kısım -->
                <label>hakkımızda :</label> <input type="text" name="hakkımızda" class="form-control"
                    value="<?php echo $Blog['hakkımızda_1']; ?>" placeholder="hakkımızda..." />

                <label>hakkımızda1:</label> <input type="text" name="hakkımızda1" class="form-control"
                    value="<?php echo $Blog['hakkımızda_2']; ?>" placeholder="hakkımızda1" />

                <label>A-posta :</label> <input type="text" name="hakkımızda2" class="form-control"
                    value="<?php echo $Blog['hakkımızda_3']; ?>" placeholder="E-posta" />


                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
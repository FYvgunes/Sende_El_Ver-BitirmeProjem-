<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
$id = g('id');
if (empty($id)) {
    header("Location: " . URL . "/en/admin/index.php?do=partner");
    exit;
} else {
    $sor = $db->query("SELECT * FROM partnerler WHERE partner_id={$id}");
    
    $Blog = $sor->fetch(PDO::FETCH_ASSOC);
    $Blog_varmi = $sor->rowCount();
    if ($Blog_varmi > 0) {
        null;
    } else {
        header("Location: " . URL . "/en/admin/index.php?do=partner");
        exit;
    }
}
$posted = "resim1";
if ($_POST["part"]) {
  

    
   
    if ($_FILES["resim1"]['name']) {
        $filename = $_FILES["$posted"]['name'];
        $efilename = explode('.', $filename);
        $uzanti = $efilename[count($efilename) - 1];
        $isim = md5(microtime());
        $yeniad = "partner" . $isim . "." . $uzanti . "";
        $hedef1 = "en/admin/resimler/" . $yeniad;
        if (move_uploaded_file($_FILES["$posted"]['tmp_name'], "resimler/" . $yeniad)) {
            $insert = $db->exec("UPDATE   partnerler  SET  partner_p=0, partner_url ='{$hedef1}'   WHERE  partner_id={$id}");
            echo "<p class='alert alert-success'>Partner başarıyla eklendi. Lütfen Bekleyiniz...</p>";
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=partner ");
        }
        else{
            echo "<p class='alert alert-danger'>Dosya eklerken problem oluşu.</p>";
        }

      
    }
    else
    {
        echo "<p class='alert alert-danger'>Partner eklenirken problem oluştu</p>";
    }

}


$sor = $db->query("SELECT * FROM partnerler WHERE partner_id={$id}");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Partner bilgilerini Düzenle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=partner "; ?>"><i class="fa fa-file-text-o"></i>
                    Partner Göster </a></small></h2>

        <div class="item row">
        <form action="" method="POST" enctype="multipart/form-data">
        <img src="/Bitirme/<?php echo $Blog['partner_url']; ?>" style="width: 250px;  height: 200px;
                object-fit: cover;  " alt="">
                <br>
            <label>Partner Logo: </label><input type="file" name="resim1" class="form-control" placeholder=" Partner Resim URL" />
                <input type="submit" value="Kaydet" name="part" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
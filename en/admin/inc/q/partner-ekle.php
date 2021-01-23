<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php


if ($_POST["part"]) {
  
   

    $posted = "resim1";
    
    if ($_FILES["resim1"]['name']) {
        $filename = $_FILES["$posted"]['name'];
        $efilename = explode('.', $filename);
        $uzanti = $efilename[count($efilename) - 1];
        $isim = md5(microtime());
        $yeniad = "Partnerlogo" . $isim . "." . $uzanti . "";
        if (!file_exists("resimler")) {
            mkdir("resimler");
        }
        $hedef1 = "en/admin/resimler/" . $yeniad;
        if (move_uploaded_file($_FILES["$posted"]['tmp_name'], "resimler/" . $yeniad)) {
            
            $insert = $db->exec("INSERT INTO partnerler SET partner_p=0, partner_url='{$hedef1}'");
      
            //$insert->execute();
            echo "<p class='alert alert-success'>Yardım başarıyla eklendi. Lütfen Bekleyiniz...</p>";
            header("Refresh: 1; url=" . URL . "/en/admin/index.php?do=partner");
        } else {
            echo "<p class='alert alert-danger'>Dosya ekleme işlemlerinde hata oluştu</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Eklemeye çalıştığınız kategori zaten mevcut. Aynı başlıkta kategori kabul etmiyoruz başka bir başlıkla tekrar deneyebilirsin.</p>";
    }
}


// $sor = $db->query("SELECT * FROM partnerler  WHERE partner_id={$id}");
// $Blog = $sor->fetch(PDO::FETCH_ASSOC);

?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Partner Ekle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=partner"; ?>"><i
                        class="fa fa-file-text-o"></i> Partnerleri göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
            <label>Partner Logo: </label><input type="file" name="resim1" class="form-control" placeholder=" Partner Resim URL" />
                <input type="submit" value="Kaydet" name="part" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
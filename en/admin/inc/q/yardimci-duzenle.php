<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
$id = g('id');
if (empty($id)) {
    header("Location: " . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
    exit;
} else {
    $sor = $db->query("SELECT * FROM yardimci WHERE yardimci_id={$id}");
    
    $Blog = $sor->fetch(PDO::FETCH_ASSOC);
    $Blog_varmi = $sor->rowCount();
    if ($Blog_varmi > 0) {
        null;
    } else {
        header("Location: " . URL . "/en/admin/index.php?do=yardimci");
        exit;
    }
}

if ($_POST) {
    $yardım_username= p("yardimci_username");
    $yardım_email= p("yardimci_email");
    $yardım_sifre= p("yardimci_sifre");

    if(empty(yardimci_username) && empty(yardimci_email) && empty(yardimci_sifre)) {
                 echo "<p class='alert alert-success'>Lütfen boş alan bırakmayın</p>";

    }
    else
    { $insert = $db->exec("UPDATE  yardimci   SET yardimci_username ='{$yardım_username}', yardimci_email= '{$yardım_email}', yardimci_sifre= '{$yardım_sifre}' WHERE yardimci_id={$id}");
         echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
         header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yardimci");

    }
  
        


   
    // if (empty($_FILES["resim1"]['name'])) {

    //     $insert = $db->exec("UPDATE  yardimci   SET yapılılacak_yardımlar_p=0, yardimci_baslik='{$Konala_baslik}', yapılılacak_yardımlar_text ='{$Konala_text}', yapılılacak_yardımlar_adres='{$Konala_title}', yardimci_id='{$yardim_id}' , yardimci_tarih ='{$Konala_date}' WHERE yardimci_id={$id}");
    //     echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
    //     header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
    // }
    // else if ($_FILES["resim1"]['name']) {
        
    //     $filename = $_FILES["$posted"]['name'];
    //     $efilename = explode('.', $filename);
    //     $uzanti = $efilename[count($efilename) - 1];
    //     $isim = md5(microtime());
    //     $yeniad = "test" . $isim . "." . $uzanti . "";
    //     $hedef1 = "en/admin/resimler/" . $yeniad;

    //     if (move_uploaded_file($_FILES["$posted"]['tmp_name'], "resimler/" . $yeniad)) {
    //         $insert = $db->exec("UPDATE  yardimci   SET  yapılılacak_yardımlar_p =0, yardimci_baslik='{$Konala_baslik}',   yapılılacak_yardımlar_url ='{$hedef1}', yapılılacak_yardımlar_adres='{$Konala_title}', yapılılacak_yardımlar_text ='{$Konala_text}'  WHERE yardimci_id='{$id}'");
        
    //         //$insert->execute();
    //         echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
    //         header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
    //     } else {
    //         echo "<p class='alert alert-danger'>Dosya ekleme işlemlerinde hata oluştu</p>";
    //     }
    // }
    
  
}

$sor = $db->query("SELECT * FROM yardimci  WHERE yardimci_id={$id}");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Yardımsever bilgilerini Düzenle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=yapilacak_yardimlar "; ?>"><i
                        class="fa fa-file-text-o"></i> Yardımseverleri Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                <label>Yardımsever Kullanıcı Adı </label> <input type="text" name="yardimci_username" class="form-control"
                    value="<?php echo $Blog['yardimci_username']; ?>" placeholder="Username" />
                <label>Yardımın Başlığı </label> <input type="text" name="yardimci_email" class="form-control"
                    value="<?php echo $Blog['yardimci_email']; ?>" placeholder="Email" />
                <label>Yardımın Başlığı </label> <input type="text" name="yardimci_sifre" class="form-control"
                    value="<?php echo $Blog['yardimci_sifre']; ?>" placeholder="Şifre" />

                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
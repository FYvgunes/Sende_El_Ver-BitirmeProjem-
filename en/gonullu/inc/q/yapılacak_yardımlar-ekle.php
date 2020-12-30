<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
if ($_POST) {


    $Konala_text = p('yapılılacak_yardımlar_text');
    $Konala_title = p('yapılılacak_yardımlar_adres');
    $Konala_date = p('birthday');
    $Konala_baslik = p('yapılacak_yardımlar_baslik');
    
    $posted = "resim1";


    if ($_FILES["resim1"]['name']) {
        $filename = $_FILES["$posted"]['name'];
        $efilename = explode('.', $filename);
        $uzanti = $efilename[count($efilename) - 1];
        $isim = md5(microtime());
        $yeniad = "KanolaYagi" . $isim . "." . $uzanti . "";
        if (!file_exists("resimler")) {
            mkdir("resimler");
        }
        $hedef1 = "resimler/" . $yeniad;
        if (move_uploaded_file($_FILES["$posted"]['tmp_name'], "resimler/" . $yeniad)) {
            $insert = $db->exec("INSERT INTO yapılacak_yardımlar  SET yapılılacak_yardımlar_p =0, yapılacak_yardımlar_baslik='{$Konala_baslik}', yapılacak_yardımlar_tarih = '{$Konala_date}',   yapılılacak_yardımlar_url ='{$hedef1}', yapılılacak_yardımlar_adres='{$Konala_title}', yapılılacak_yardımlar_text ='{$Konala_text}'");
            //$insert->execute();
            echo "<p class='alert alert-success'>Yardım başarıyla eklendi. Lütfen Bekleyiniz...</p>";
            header("Refresh: 1; url=" . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
        } else {
            echo "<p class='alert alert-danger'>Dosya ekleme işlemlerinde hata oluştu</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Eklemeye çalıştığınız kategori zaten mevcut. Aynı başlıkta kategori kabul etmiyoruz başka bir başlıkla tekrar deneyebilirsin.</p>";
    }
}
?>

<section class="section">
    <div class="section-inner">

        <h2 class="heading"><i class="fa fa-plus"></i> Yapılacak Yardımlar<br /><small><a href="<?php echo URL . "/en/admin/index.php?do=yapılacak_yardımlar "; ?>"><i class="fa fa-file-text-o"></i> İçerikleri Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                            <label>Yardımın Başlığı </label> <input type="text" name="yapılacak_yardımlar_baslik" class="form-control" placeholder="Yardımın Başlığı" />

                <label>Yardımın Adresi </label> <input type="text" name="yapılılacak_yardımlar_adres" class="form-control" placeholder="Yardımın Adresi" />
 <label for="birthday">Birthday:</label><br>
<input type="date" class="form-control" id="birthday" name="birthday"> <br>
                <label>Resim: </label><input type="file" name="resim1" class="form-control" placeholder=" Küçük Resim URL" />

                <label>Yardım Detay </label><textarea name="yapılılacak_yardımlar_text"></textarea>
                <script>
                    CKEDITOR.replace('yapılılacak_yardımlar_text');
                </script>



                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
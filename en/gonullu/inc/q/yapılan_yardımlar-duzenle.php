<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
$id = g('id');
if (empty($id)) {
    header("Location: " . URL . "/en/admin/index.php?do=yapilan_yardimlar");
    exit;
} else {
    $sor = $db->query("SELECT * FROM  yapılan_yardımlar     WHERE  yapılan_yardımlar_id ={$id} AND  yapılan_yardımlar_p=0");
    
    $Blog = $sor->fetch(PDO::FETCH_ASSOC);
    $Blog_varmi = $sor->rowCount();
    if ($Blog_varmi > 0) {
        null;
    } else {
        header("Location: " . URL . "/en/admin/index.php?do=yapilan_yardimlar");
        exit;
    }
}

if ($_POST) {
    $Konala_text = p('yapılan_yardımlar_text');
    $Konala_title = p('yapılan_yardımlar_adres');
    $Konala_date = p('birthday');
    $Konala_baslik = p('yapılan_yardımlar_baslik');
    $posted = "resim1";
    if (empty($_FILES["resim1"]['name'])) {

        $insert = $db->exec("UPDATE   yapılan_yardımlar       SET  yapılan_yardımlar_p=0,  yapılan_yardımlar_baslik='{$Konala_baslik}',  yapılan_yardımlar_text ='{$Konala_text}',  yapılan_yardımlar_adres ='{$Konala_title}' WHERE  yapılan_yardımlar_id ={$id}");
        echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
        header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilan_yardimlar ");
    }else if (!empty($Konala_date)){

        $insert = $db->exec("UPDATE   yapılan_yardımlar       SET  yapılan_yardımlar_p=0,  yapılan_yardımlar_tarih ='{$Konala_date}',  yapılan_yardımlar_baslik='{$Konala_baslik}',  yapılan_yardımlar_text ='{$Konala_text}',  yapılan_yardımlar_adres ='{$Konala_title}' WHERE  yapılan_yardımlar_id ={$id}");
        echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
        header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilan_yardimlar  ");
    } 
    else if ($_FILES["resim1"]['name']) {
        $filename = $_FILES["$posted"]['name'];
        $efilename = explode('.', $filename);
        $uzanti = $efilename[count($efilename) - 1];
        $isim = md5(microtime());
        $yeniad = "" . $isim . "." . $uzanti . "";
        $hedef1 = "resimler/" . $yeniad;

        if (move_uploaded_file($_FILES["$posted"]['tmp_name'], "resimler/" . $yeniad)) {
            $insert = $db->exec("UPDATE   yapılan_yardımlar   SET   yapılan_yardımlar_p =0,  yapılan_yardımlar_baslik='{$Konala_baslik}',  yapılan_yardımlar_tarih = '{$Konala_date}',   yapılan_yardımlar_url  ='{$hedef1}',  yapılan_yardımlar_adres ='{$Konala_title}',  yapılan_yardımlar_text ='{$Konala_text}'");
            //$insert->execute();
            echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilan_yardimlar ");
        } else {
            echo "<p class='alert alert-danger'>Dosya ekleme işlemlerinde hata oluştu</p>";
        }
    }
}

$sor = $db->query("SELECT * FROM  yapılan_yardımlar  WHERE  yapılan_yardımlar_id ={$id}");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Yapılan Yardımlar Düzenle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=yapilan_yardimlar "; ?>"><i
                        class="fa fa-file-text-o"></i> Yardımları Göster Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                <label>Yardımın Başlığı </label> <input type="text" name="yapılan_yardımlar_baslik"
                    class="form-control" value="<?php echo $Blog['yapılan_yardımlar_baslik']; ?>"
                    placeholder="Yardımın Başlığı" />

                <label>Yardımın Adresi </label> <input type="text" name="yapılan_yardımlar_adres"
                    class="form-control" value="<?php echo $Blog['yapılan_yardımlar_adres']; ?>"
                    placeholder="Yardımın Adresi" />
                <label>Mevcut Küçük Resim </label>
                <br>
                <img src="<?php echo $Blog['yapılan_yardımlar_url']; ?>" style="width: 250px;  height: 200px;
                object-fit: cover;  " alt="">
                <br>
                <label for="birthday">Tarih</label><br>
                <input type="date" class="form-control" id="birthday" name="birthday"
                    value="<?php echo $Blog['yapılılacak_yardımlar_tarih']; ?>"> <br>
                <label>Küçük Resim Güncelle: </label><input type="file" name="resim1" class="form-control" value=""
                    placeholder="Blok Küçük Resim URL" />

                <label>İçerik: </label><textarea
                    name="yapılan_yardımlar_text"><?php echo $Blog['yapılan_yardımlar_text']; ?></textarea>
                <script>
                    CKEDITOR.replace('yapılan_yardımlar_text');
                </script>



                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
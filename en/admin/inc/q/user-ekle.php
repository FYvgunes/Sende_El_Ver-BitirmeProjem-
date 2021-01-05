<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
$id = g('id');
if (empty($id)) {
    header("Location: " . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
    exit;
} else {
    $sor = $db->query("SELECT * FROM user WHERE user_id={$id}");
    
    $Blog = $sor->fetch(PDO::FETCH_ASSOC);
    $Blog_varmi = $sor->rowCount();
    if ($Blog_varmi > 0) {
        null;
    } else {
        header("Location: " . URL . "/en/admin/index.php?do=user");
        exit;
    }
}

if ($_POST) {
    $yardım_username= p("user_username");
    $yardım_email= p("user_email");
    $yardım_sifre= p("user_sifre");

    if(empty(user_username) && empty(user_email) && empty(user_sifre)) {
                 echo "<p class='alert alert-success'>Lütfen boş alan bırakmayın</p>";

    }
    else
    { $insert = $db->exec("INSERT INTO   user   SET user_username ='{$yardım_username}', user_email= '{$yardım_email}', user_sifre= '{$yardım_sifre}'");
         echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
         header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=user");

    }
}


$sor = $db->query("SELECT * FROM user  WHERE user_id={$id}");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Gönüllü bilgilerini Düzenle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=yapilacak_yardimlar "; ?>"><i
                        class="fa fa-file-text-o"></i> Günüllüler Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                <label>Gönüllünün Kullanıcı Adı </label> <input type="text" name="user_username" class="form-control"
                    value="" placeholder="Username" />
                <label>Gönüllünün E-Mail Adresi</label> <input type="text" name="user_email" class="form-control"
                    value="" placeholder="Email" />
                <label>Gönüllünün şifresi</label> <input type="text" name="user_sifre" class="form-control"
                    value="" placeholder="Şifre" />

                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php
$id = g('id');
if (empty($id)) {
    header("Location: " . URL . "/en/admin/index.php?do=header");
    exit;
} else {
    $sor = $db->query("SELECT * FROM Header WHERE Header_id={$id}");
    
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
    $yardım_username= p("Header_title");
    $yardım_email= p("Header_url");


    if(empty(Header_title) && empty(Header_url)) {
                 echo "<p class='alert alert-success'>Lütfen boş alan bırakmayın</p>";

    }
    else
    { $insert = $db->exec("UPDATE  Header   SET Header_title ='{$yardım_username}', Header_url= '{$yardım_email}'");
         echo "<p class='alert alert-success'>İçerik başarıyla eklendi. Lütfen Bekleyiniz...</p>";
         header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=header");

    }
}


$sor = $db->query("SELECT * FROM Header  WHERE Header_id={$id}");
$Blog = $sor->fetch(PDO::FETCH_ASSOC);
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Header Düzenleme<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=header"; ?>"><i
                        class="fa fa-file-text-o"></i> Header Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                <label>Header Adı </label> <input type="text" name="Header_title" class="form-control"
                    value="<?php echo $Blog['Header_title']; ?>" placeholder="Username" />
                <label>Header Url</label> <input type="text" name="Header_url" class="form-control"
                    value="<?php echo $Blog['Header_url']; ?>" placeholder="Email" />


                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
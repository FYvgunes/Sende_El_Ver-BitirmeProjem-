<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null; ?>

<?php 


if ($_POST) {
    $yardım_username= p("Header_title");
    $yardım_email= p("Header_url");
   

    if(empty(Header_title) && empty(Header_url)) {
          echo "<p class='alert alert-success'>Lütfen boş alan bırakmayın</p>";
           

    }
    else
    {
         $insert = $db->exec("INSERT INTO Header SET Header_title ='{$yardım_username}', Header_url='{$yardım_email}'");
         echo "<p class='alert alert-success'>Header başarıyla eklendi. Lütfen Bekleyiniz...</p>";
         header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=header");

    }
}
?>

<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-plus"></i> Header bilgilerini Düzenle<br /><small><a
                    href="<?php echo URL . "/en/admin/index.php?do=header "; ?>"><i class="fa fa-file-text-o"></i>
                    Header Göster </a></small></h2>

        <div class="item row">
            <form action="" method="POST" enctype="multipart/form-data">
                <label> Header Adı </label> <input type="text" name="Header_title" class="form-control" value=""
                    placeholder="Header Adı" />
                <label>Header URl</label> <input type="text" name="Header_url" class="form-control" value=""
                    placeholder="Header Url" />


                <input type="submit" value="Kaydet" class="btn btn-cta-primary form-control" />
            </form>
        </div>
    </div>
</section>
<?php echo !defined("INDEX") ? header("Location: ".URL."/404.html") : null; ?>
<!-- ******HEADER****** --> 

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <?php
    $row = $db->query("SELECT * FROM categories WHERE category_menu = 1 ORDER BY category_title ASC LIMIT 10", PDO::FETCH_ASSOC);
    foreach($row as $categories){

        if($categories['category_url']==g('k')){
            echo '<li class="active"><a href="#">'.$categories['category_title'].' <span class="sr-only">(current)</span></a></li>';
        }else{
            echo '<li><a href='.$site_url.'/en/kategori/'.$categories['category_url'].'>'.$categories['category_title'].'</a></li>';
        }

    }
    ?>
</ul>
</div><!-- /.navbar-collapse -->
<div id="bysearchbox">
    <form action="<?php echo $site_url."/en/ara.html"; ?>" method="GET"> 
      <div class="row">
          <div class="input-group">
             <input type="text" name="q" style="border-color: #54ba4e;" class="form-control" placeholder="Bir şeyler ara..." pattern="^[a-zA-Z][a-zA-Z0-9-_\.#&{1,200}$" required />
             <div class="input-group-btn">
             <button style="height:34px;" class="btn btn-cta-primary" type="submit">
                    <span class="fa fa-search"></span>
            </button>
            </div>
        </div>
    </div>
</form>
</div>
</div><!-- /.container-fluid -->
</nav>
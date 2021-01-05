<?php 
  $row = $db->query("SELECT * FROM Header  ORDER BY Header_id  ASC", PDO::FETCH_ASSOC);
  $row1 = $db->query("SELECT * FROM Header  ORDER BY Header_id  ASC", PDO::FETCH_ASSOC);
?>

<div class="navbar">
  <a href="index.php" class="logo">SEV</a>
  <button class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <div class="navbar-menu">
    <ul>
      <?php
      foreach($row as $header)
      {?>
      <li>
        <a href="<?php echo $header['Header_url']?>"><?php echo $header['Header_title']?></a>
      </li>
      <?php }?>



      <li>
        <a href="giris_yontemi.php"><i class="fas fa-sign-out-alt"></i></a>
      </li>
      <li>
        <a href="kayit_yöntemi.php"><i class="fas fa-user-plus"></i></a>
      </li>
    </ul>
  </div>
</div>
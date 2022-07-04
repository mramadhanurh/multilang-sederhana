<?php
// memulai sesi
session_start();

// bahasa default website
$default_lang = 'bahasa_indonesia';

// jika user merubah bahasa
if(isset($_GET['lang'])) {
  // ubah bahasa sesuai keinginan user
  $_SESSION['lang'] = $_GET['lang'];
  // kembalikan ke halaman index.php
  header("Location: index.php");
}

// jika tidak ada bahasa terdeteksi
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}

// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $lang_judul; ?></title>
  </head>
<body>
    <nav>
      <ul>
        <li><a href="#"><?php echo $lang_menu_home; ?></a></li>
        <li><a href="#"><?php echo $lang_menu_profile; ?></a></li>
        <li><a href="#"><?php echo $lang_menu_contact; ?></a></li>
      </ul>
        <a href="?lang=bahasa_inggris">Bahasa Inggris</a>
        <a href="?lang=bahasa_indonesia">Bahasa Indonesia</a>
    </nav>
<p>
      <?php echo $lang_selamat_datang; ?>
    </p>
  </body>
</html>
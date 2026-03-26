<?php

    include("./bdd.php");


    $rep = $bdd->query("SELECT * FROM video INNER JOIN user ON video.id_user = user.id_user");


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Kof.yo</title>
  <link rel="stylesheet" href="test.css">
  <link rel="shortcut icon" href="./logo/logo_de_haut_de_page.png" type="image/png">
</head>
<body>
  <div class="app">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <img src="./logo/logo_blanc.png" alt="">
      </div>
      <nav class="nav">
        <a href="#" class="nav-item">Accueil</a>
        <a href="#" class="nav-item">Abonnements</a>
        <a href="#" class="nav-item">Historique</a>
        <a href="#" class="nav-item">Profil</a>
      </nav>
    </aside>

    <!-- Main content -->
        <main class="main">
      <!-- Header / search -->
      <header class="topbar">
        <h1 class="site-title">Stupeflip</h1>
        <form class="search-bar">
          <input type="search" placeholder="Rechercher une vidéo..." class="input">
          <input type="submit" value="Rechercher" class="button">
        </form>
      </header>
      <section class="video">
        <video src="./video/Stupeflip.mp4" controls></video>
      </section>
      <section class="commentaire">

      </section>
    </main>
  </div>
</body>
</html>

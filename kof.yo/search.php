<?php

    include("./bdd.php");
    if (isset($_GET['q'])) {
        $q = $_GET['q'];
        if ($q != "") {
            $rep = $bdd->query("SELECT * FROM video INNER JOIN user ON video.id_user = user.id_user WHERE titre LIKE '%$q%'");
        } else {
            header("Location : ./index.php");
        }
    } else {
      header("Location : ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Kof.yo</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./logo/logo_de_haut_de_page.png" type="image/png">
</head>
<body>
  <div class="app">
    <aside class="sidebar">
      <div class="logo">
        <img src="./logo/logo_blanc.png" alt="">
      </div>
      <nav class="nav">
        <a href="./index.php" class="nav-item">Accueil</a>
        <a href="#" class="nav-item">Abonnements</a>
        <a href="#" class="nav-item">Historique</a>
        <a href="#" class="nav-item">Se connecter</a>
      </nav>
    </aside>
        <main class="main">
      <header class="topbar">
        <h1 class="site-title">Recherche</h1>
        <form action="search.php" method="get" class="search-bar">
          <input type="search" placeholder="Rechercher une vidéo..." class="input" name="q">
          <input type="submit" value="Rechercher" class="button">
        </form>
      </header>
      <section class="video-grid">
      <?php
        while ($row = $rep->fetch()) { ?>
          <article class="video-card" onclick="window.location.href = './video.php?watch=<?php echo $row['id_video'];?>'">
            <div class="thumbnail">
              <img src="<?php echo $row["miniture"];?>" />
                  <video id="maVideo" preload="metadata" style="display:none;">
                  <source src="<?php echo $row['video']; ?>" type="video/mp4">
                  </video>
                  </script>
              <span class="duration" id="duree"></span>
            </div>
            <div class="video-info">
              <h2 class="video-title"><?php echo $row['titre']; ?></h2>
              <p class="video-meta"><?php echo $row['pseudo']; ?> • <?php echo $row['vue']; ?> vues</p>
                  <script>
                  const video = document.getElementById('maVideo');

                  video.addEventListener('loadedmetadata', () => {
                      const duree = video.duration;
                      const minutes = Math.floor(duree / 60);
                      const secondes = Math.floor(duree % 60);
                      document.getElementById('duree').innerHTML = `${minutes}:${secondes.toString().padStart(2, '0')}`;
                  });
                  </script>
            </div>
          </article>
      <?php 
        }
      ?>
      </section>
    </main>
  </div>
</body>
</html>

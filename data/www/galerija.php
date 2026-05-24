<!doctype html>
<html lang="sl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galerija</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="scss/style.scss"> -->
  </head>
  <body class="d-flex flex-column min-vh-100">

  <?php 
    $currentpage = "galerija";
    include 'nav.php';?>
  <!--<nav class="navbar navbar-expand-lg site-nav">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" alt="Logotip Pojoči dohtarji">
          <span>Pojoči dohtarji</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Odpri meni">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Domov</a></li>
            <li class="nav-item"><a class="nav-link active" href="galerija.html">Galerija</a></li>
            <li class="nav-item"><a class="nav-link" href="spili.html">Špili</a></li>
            <li class="nav-item"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </nav>-->


    <main class="flex-grow-1">
      <section class="container page-panel gallery-intro">
        <div class="gallery-toolbar">
          <h1>Oglejte si naša doživetja!</h1>
          <div>
            <a href="#foto" class="gumb">Foto</a>
            <a href="#video" class="gumb">Video</a>
          </div>
        </div>
      </section>

      <section id="foto" class="container page-panel">
        <div class="row g-4">
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-1.png" alt="Pojoči dohtarji"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-3.png" alt="Praznični nastop"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-2.png" alt="Skupina s harmoniko"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-4.png" alt="Maska in nastop"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-5.png" alt="Utrinek s poti"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-6.png" alt="Druženje po nastopu"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-7.png" alt="Nastop na prostem"></div>
          <div class="col-md-6"><img class="gallery-img" src="img/gallery-8.png" alt="Glasbeni nastop"></div>
        </div>
      </section>

      <section id="video" class="container page-panel video-panel">
        <div class="row g-4">
          <div class="col-md-6"> <a href="https://www.youtube.com/watch?v=x8ts3_fmJLA"><img class="video-thumb" src="img/video-1.png" alt="Video 1"></a></div>
          <div class="col-md-6"><a href="https://www.youtube.com/watch?v=rT6nBBWt0oM"><img class="video-thumb" src="img/video-2.png" alt="Video 2"></a></div>
          <div class="col-md-6"><a href="https://www.youtube.com/watch?v=uoiidudg790"><img class="video-thumb" src="img/video-3.png" alt="Video 3"></a></div>
          <div class="col-md-6"><a href="https://www.youtube.com/watch?v=TmUmUQBdAcc"><img class="video-thumb" src="img/video-4.png" alt="Video 4"></a></div>
        </div>
      </section>
    </main>

    <?php include 'footer.php';?> 
    <!--<footer class="site-footer mt-auto">
      <p>Sledite nam!</p>
      <div class="social-strip">
        <a href="https://www.youtube.com/@pojocidohtarji" target="_blank" rel="noreferrer"><img src="img/youtube.png" alt="YouTube"></a>
        <a href="https://www.facebook.com/p/Ansambel-Pojo%C4%8Di-Dohtarji-100086853823907/" target="_blank" rel="noreferrer"><img src="img/facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/pojoci.dohtarji/" target="_blank" rel="noreferrer"><img src="img/instagram.png" alt="Instagram"></a>
        <a href="https://open.spotify.com/" target="_blank" rel="noreferrer"><img src="img/spotify.png" alt="Spotify"></a>
      </div>
    </footer>-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<nav class="navbar navbar-expand-lg site-nav">
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
            <li class="nav-item"><a class="nav-link <?= ($currentpage == "index") ? "active" : ""?> "href="index.php">Domov</a></li>
            <li class="nav-item"><a class="nav-link <?= ($currentpage == "galerija") ? "active" : ""?> " href="galerija.php">Galerija</a></li>
            <li class="nav-item"><a class="nav-link <?= ($currentpage == "spili") ? "active" : ""?> " href="spili.php">Špili</a></li>
            <li class="nav-item"><a class="nav-link <?= ($currentpage == "kontakt") ? "active" : ""?> " href="kontakt.php">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </nav>
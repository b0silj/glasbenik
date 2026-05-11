<!doctype html>
<html lang="sl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pojoči dohtarji | Kontakt</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark site-nav sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="img/logo.png" alt=" Logotip Pojoči dohtarji" class="brand-logo">
          <span>POJOČI DOHTARJI</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Odpri meni">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
          <div class="navbar-nav ms-auto text-end py-3">
            <a class="nav-link" href="index.html">DOMOV</a>
            <a class="nav-link" href="galerija.html">GALERIJA</a>
            <a class="nav-link" href="spili.html">ŠPILI</a>
            <a class="nav-link active" aria-current="page" href="kontakt.html">KONTAKT</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="flex-grow-1">
        <section class="skupina contact-skupina">
            <div class="container text-center">
                <img src="img/gallery-4.png" class="skupina-img contact-skupina-img shadow-sm" alt="Pojoči dohtarji maska">
                <div class="mt-3">
                    <a href="#kontakt" class="gumb skupina-btn text-decoration-none">Kontakt</a>
                </div>
            </div>
        </section>

        <section id="kontakt" class="container contact-wrap mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form class="contact-form shadow">
              <h1 class="text-center mb-4">KONTAKT</h1>

             <div class="mb-3">
                <label for="name" class="form-label fw-bold">Ime in priimek</label>
                <input id="name" class="form-control" type="text" placeholder="Vpišite ime in priimek" required>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label fw-bold">E-mail</label>
                <input id="email" class="form-control" type="email" placeholder="Vpišite email" required>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label fw-bold">Telefonska številka</label>
                <input id="phone" class="form-control" type="tel" placeholder="Vpišite telefonsko številko">
              </div>

              <div class="mb-4">
                <label for="message" class="form-label fw-bold">Dodatno sporočilo/pojasnilo</label>
                <textarea id="message" class="form-control" rows="5" placeholder="Vaše vprašanje"></textarea>
              </div>

              <div class="d-grid">
                <button class="gumb border-0 w-100 py-3 fw-bold" type="submit">POŠLJI</button>
              </div>
            </form>
          </div>
        </div>

        <div class="mt-5 pt-4">
          <div class="contact-info-title gumb d-inline-block px-4 py-2 mb-4">Dodatni kontakt:</div>
          
          <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
              <div class="contact-info h-100 p-4 shadow-sm rounded">
                <h2 class="h5 fw-bold mb-3">TELEFONSKA ŠTEVILKA:</h2>
                <p class="fs-5 mb-4">+00386 068 645 102</p>
                <h2 class="h5 fw-bold mb-3">E-MAIL:</h2>
                <p class="fs-5"><a href="mailto:pojoci.dohtarji@gmail.com" class="text-decoration-none" style="color: inherit;">pojoci.dohtarji@gmail.com</a></p>
              </div>
            </div>

          <div class="col-lg-6">
              <div class="map-card h-100 border rounded shadow-sm overflow-hidden">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.055845012574!2d14.5057512!3d46.0505118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765328325a2982d%3A0x66c3c509825b03!2sLjubljana!5e0!3m2!1ssl!2ssi!4v1715450000000!5m2!1ssl!2ssi" 
                  width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </section>  
    </main>
    
  <footer class="site-footer mt-auto py-4 text-center">
      <div class="container">
        <p class="fw-bold text-uppercase mb-3">Sledite nam!</p>
        <div class="social-strip d-flex justify-content-center gap-3">
          <a href="https://www.youtube.com/@pojocidohtarji" target="_blank"><img src="img/youtube.png" alt="YouTube" width="35"></a>
          <a href="https://www.facebook.com/p/Ansambel-Pojo%C4%8Di-Dohtarji-100086853823907/" target="_blank"><img src="img/facebook.png" alt="Facebook" width="35"></a>
          <a href="https://www.instagram.com/pojoci.dohtarji/" target="_blank"><img src="img/instagram.png" alt="Instagram" width="35"></a>
          <a href="#" target="_blank"><img src="img/spotify.png" alt="Spotify" width="35"></a>
        </div>
        <p class="small mt-3 opacity-50 text-white">© 2026 Pojoči dohtarji | Samostojna HTML implementacija</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
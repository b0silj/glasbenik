<?php 
// 1. Tukaj vključiva ponovljivo glavo
include 'glava.php'; 
include 'baza.php';
?>

    <main class="flex-grow-1">
      <section class="skupina contact-skupina">
        <div class="container text-center">
          <img src="img/gallery-4.png" class="skupina-img contact-skupina-img" alt="Pojoči dohtarji maska">
          <a href="#kontakt" class="gumb skupina-btn">Kontakt</a>
        </div>
      </section>

     <section id="kontakt" class="container contact-wrap">
       
        <form class="contact-form" action="procesiraj.php" method="POST">
          <h1>Kontakt</h1>
          
          <label for="name">Ime in priimek *</label>
          <input id="name" name="ime_priimek" class="form-control" type="text" placeholder="Vpišite ime in priimek" required>

          <label for="email">E-mail *</label>
          <input id="email" name="email_naslov" class="form-control" type="email" placeholder="Vpišite email" required>

          <label for="phone">Telefonska številka</label>
          <input id="phone" name="telefon" class="form-control" type="tel" placeholder="Vpišite telefonsko številko">

          <label for="datum_dogodka">Datum vašega dogodka/zabave</label>
          <input id="datum_dogodka" name="datum_nastopa" class="form-control" type="date">

          <label for="message">Dodatno sporočilo/pojasnilo</label>
          <textarea id="message" name="sporocilo" class="form-control" rows="4" placeholder="Vaše vprašanje"></textarea>

          <div class="d-grid gap-2 mt-3">
            <button class="btn btn-outline-primary" type="submit">POŠLJI</button>
          </div>
        </form>

        <div class="contact-info-title gumb">Dodatni kontakt:</div>
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-6">
            <div class="contact-info">
              <h2>Telefonska številka:</h2>
              <p>+00386 068 645 102</p>
              <h2>E-mail:</h2>
              <p><a href="mailto:pojoci.dohtarji@gmail.com">pojoci.dohtarji@gmail.com</a></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="map-card">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107038.70104609027!2d14.449697753339155!3d46.06621024459189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476531f5969886d1%3A0x400f81c823fec20!2sLjubljana!5e1!3m2!1ssl!2ssi!4v1778088426606!5m2!1ssl!2ssi" width="300" height="190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php 
// 2. Tukaj vključiva ponovljivo nogo
include 'noga.php'; 
?>
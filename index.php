<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
  </head>
  <body id="home">
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 sticky-top">
      <div class="container">
        <a class="navbar-brand fs-2 fw-bold" href="#home">HANIF WAHYUDI</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-2" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2">
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="#tentang"
                >Tentang</a
              >
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#skill">Skill</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" href="#proyek">Proyek</a>
            </li>
          </ul>
          <a href="#contact" class="btn btn-outline-primary rounded-5" role="button">Hubungi saya</a>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero" id="tentang">
      <div class="container mb-3 mt-4 mx-auto px-3">
        <div
          class="row p-3 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-2 shadow-lg"
          style="background-color: #dee2e6"
        >
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 text-center">
            <p class="lead fw-semibold lh-2">Halo nama saya</p>
            <h1 class="display-5 fw-bold lh-1">Hanif Wahyudi</h1>
            <p class="lead lh-2">
              Saya adalah seorang Siswa, dan saat ini saya sedang
              belajar pembuatan dan pengembangan sebuah Website.
            </p>
            <div class="social d-flex justify-content-left mt-4 mb-4 mb-lg-4">
              <a href="http://github.com/hanifw00" target="_blank" class="social"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="40"
                  fill="black"
                  class="bi bi-github me-4"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                  /></svg
              ></a>
              <a
                href="https://www.instagram.com/hanifwahyudi_88/"
                target="_blank"
                class="social"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="40"
                  fill="black"
                  class="bi bi-instagram me-4"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  /></svg
              ></a>
              <a
                href="https://web.facebook.com/hanif.wahyudiii"
                target="_blank"
                class="social"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="40"
                  fill="black"
                  class="bi bi-facebook me-4"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  /></svg
              ></a>
             
                
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                  /></svg
              ></a>
            </div>
          </div>
          <div class="col-lg-5 p-1 mt-auto">
            <img
              class="d-block mx-lg-auto img-fluid"
              src="img/foto1-removebg.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Hero -->

    <!-- Skill section -->
    <section class="skill" id="skill">
      <div class="container mx-auto my-5 p-3">
        <h2 class="fw-bold fs-3 text-center">My Skill</h2>
        <div class="container">
          <div class="row my-3 mx-auto keahlian">
            <div class="col-sm">
              <a href="https://en.wikipedia.org/wiki/HTML" target="_blank">
                <img
                  src="img/HTML5_Badge_512.png"
                  class="img-thumbnail d-block my-5 html"
                  alt="html"
                  width="100"
                  height="100"
              /></a>
              <h3 class="fs-4">HTML</h3>
              <p>
                HTML (HyperText Markup Language) is the most basic building
                block of the Web. It defines the meaning and structure of web
                content.
              </p>
            </div>
            <div class="col-sm">
              <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">
                <img
                  src="img/4202020_css3_html_logo_social_social media_icon.png"
                  class="img-thumbnail d-block my-5 css"
                  alt="css"
                  width="100"
                  height="100"
                />
              </a>
              <h3 class="fs-4">CSS</h3>
              <p>
                Cascading Style Sheets (CSS) is a style sheet language used for
                describing the presentation of a document written in a markup
                language such as HTML or XML (including XML dialects such as
                SVG, MathML or XHTML)
              </p>
            </div>
            <div class="col-sm">
              <a
                href="https://en.wikipedia.org/wiki/JavaScript"
                target="_blank"
              >
                <img
                  src="img/image.png"
                  class="img-thumbnail d-block my-5 js"
                  alt="javascript"
                  width="100"
                  height="100"
              /></a>
              <h3 class="fs-4">JavaScript</h3>
              <p>
                JavaScript (JS) is a lightweight, interpreted, or just-in-time
                compiled programming language with first-class functions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir skill section -->

    <!-- section proyek -->
    <section class="proyek" id="proyek">
      <div class="container mx-auto mb-5">
        <h2 class="fw-bold text-center">Proyek Saya</h2>
          <div class="row p-3 pb-0 pe-lg-0 pt-lg-5 align-items-center my-4">
            <div class="col mb-5">
             <div class="card" style="align-content:">
                 <img src="img/foto2.png" class="card-img-top" alt="...">
                 <div class="card-body">
                <p class="card-text" class="text-center">Kalkulator sederhana menggunakan HTML dan CSS</p>
                <a href="https://hanifw00.github.io/kalkulator-H/" target="_blank" class="btn btn-primary">Gunakan</a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir section proyek -->

    <!-- section footer -->
    <footer class="bg-light text-center" id="contact">     
      <div class="container p-2 pb-0 mx-auto my-4">
        <h3 class="fs-4 fw-bold">Kritik dan Saran dipersilahkan!</h3>
        <div class="container justify-content-center">
          <div class="row">
            <form id="kritkSaran">
          <div class="col col-lg-8 mx-auto mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" required>
          </div>
          <div class="col col-lg-8 mx-auto mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="col col-lg-8 mx-auto form-floating mb-3">
            Komentar anda
            <textarea class="form-control" id="comment" style="height: 120px" required>
            </textarea>
          </div>
          <button onclick="bacaInput()" class="btn btn-primary">Kirim</button>
        </form>
      </div>
        </div>
      </div>
      <div class="text-center p-3 mt-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Dibuat oleh Hanif
        
      </div>
    </footer>
    <!-- Akhir section footer -->
    <script>
      function bacaInput() {
      var nama = document.getElementById("nama").value;
      var email = document.getElementById("email").value;
      var comment = document.getElementById("comment").value;

      console.log("Nama: " + nama);
      console.log("Email: " + email);
      console.log("Komentar: " + comment);

      alert("Pesan Terkirim!");
    }
    </script>
  </body>
</html>

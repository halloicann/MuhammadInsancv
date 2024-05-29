<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link
      rel="stylesheet"
      href="Assets/style.css"
    />

    <title>Portfolio</title>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient shadow fixed-top">
      <div class="container">
        <a
          class="navbar-brand"
          href="#home"
          >My Portfolio</a
        >
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
        <div
          class="collapse navbar-collapse"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#about"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#portfolio"
                >Portfolio</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#contact"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="0.25" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,208C672,203,768,117,864,112C960,107,1056,181,1152,213.3C1248,245,1344,235,1392,229.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- end navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img
        src="Assets/img/abdi.jpg"
        alt="Muhammad Insan Fadilah"
        width="200"
        class="rounded-circle img-thumbnail"
      />
      <h1 class="display-4"><?= esc($about['name']) ?></h1>
      <div class="social-icons my-4">
        <a href="" class="me-3"><i class="fab fa-facebook" style="font-size: 1.5rem;"></i></a>
        <a href="https://www.instagram.com/moh.insan.f/?igshid=MWtudjY3a240YzE4aA%3D%3D" class="me-3"><i class="fab fa-instagram" style="font-size: 1.5rem;"></i></a>
        <a href="https://www.tiktok.com/@hallocannnnn?_t=8mh2osP60rQ&_r=1" class="me-3"><i class="fab fa-tiktok" style="font-size: 1.5rem;"></i></a>
    </div>
    </section>
    <!-- End Jumbotron -->

    <!-- About -->
    <section id="about" class="about">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col  ">
            <p><?= esc($about['desc2']) ?></p>
          </div>
          <div class="col mb-4">
            <h4>Skill</h4>
            <p>HTML</p>
            <div class="progress mb-2">
              <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
            <p>CSS</p>
            <div class="progress mb-2">
              <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
            <p>JS</p>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
            </div>
            <p>PHP</p>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End About -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>My Portfolio</h2>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="Assets/img/RAIZ GARAGE.jpg "  class="card-img-top" alt="RAIZ GARAGE">
                <div class="card-body">
                  <p class="card-text">Pembuatan Logo Garage.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="Assets/img/UMKM SIDAT.png" class="card-img-top  " alt="UMKM SIDAT">
                <div class="card-body">
                  <p class="card-text">Pembuatan Logo kepada UMKM .</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="Assets/img/mockup ukm.jpg" class="card-img-top" alt="mockup ukm">
                <div class="card-body">
                  <p class="card-text">Membuat tampilan website ukm futsal ummi.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card mb-3" >
                <img src="Assets/img/login.jpg" class="card-img-top" alt="login">
                <div class="card-body">
                  <p class="card-text">Membuat website absensi di sman4 kota sukabumi.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- End Portfolio -->

    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name"> 
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="0.25" d="M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,208C672,203,768,117,864,112C960,107,1056,181,1152,213.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
      <footer class="bg-dark bg-gradient text-white text-center pb-5">
        <div class="copyright-box">
          <p class="copyright">© Copyright <a href="https://www.instagram.com/moh.insan.f/?igshid=MWtudjY3a240YzE4aA%3D%3D" class="text-white fw-bold">Muhammad Insan Fadilah</a></p>
          <div class="credits">
            Designed by <a href="https://www.instagram.com/moh.insan.f/?igshid=MWtudjY3a240YzE4aA%3D%3D">hallocannnnn</a>
          </div>
        </div>
      </footer>
<!-- End Footer -->


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>

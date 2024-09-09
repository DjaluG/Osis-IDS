@extends('layout.bg')
@section('content')
<div class="back-to-top"></div>

<header>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <img src="../assets/img/Wikrama.png" width="35" style="margin-right: 10px;" alt="wikrama">
      <a href="#" class="navbar-brand text-light">Web<span style="color: #FFD523;">Osis</span></a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarContent">
        <ul class="navbar-nav pt-3 pt-lg-0 ml-auto">
            <li><a class="batang" href="#">Home</a></li>
            <li><a class="batang" href="#">About</a></li>
            <li><a class="batang" href="#">Services</a></li>
            <li><a class="batang" href="#">Contact</a></li>
            <li><a href="{{route('login')}}" class="batang">Login</a></li>
        </ul>
        </ul>
      </div>
    </div> <!-- .container -->
  </nav> <!-- .navbar -->

  <div class="page-banner home-banner">
    <div class="slider-wrapper">
      <div class="owl-carousel hero-carousel">
        <div class="hero-carousel-item">
          <img src="../assets/img/bg_image_1.jpg" alt="">
          <div class="img-caption">
            <div class="subhead">Event</div>
            <h1 class="mb-4">Ikuti Berbagai Event Yang Ada Disekolah Kami</h1>
            <a href="#services" class="btn btn-outline-light">Ikuti</a>
          </div>
        </div>
        <div class="hero-carousel-item">
          <img src="../assets/img/bg_image_2.jpg" alt="">
          <div class="img-caption">
            <h1 class="mb-4">Bergabung Dengan Kami Untuk Menjadi Osis</h1>
            <a href="#services" class="btn btn-outline-light">Join</a>
            <a href="#services" class="btn btn-dark">About</a>
          </div>
        </div>
        <div class="hero-carousel-item">
          <img src="https://1.bp.blogspot.com/-6h0wvbMljoU/X0xxXeDAJ3I/AAAAAAAAAZM/mk_-6Sv2vFQuc4a99ZK17yP8Y6sL8PV1wCLcBGAsYHQ/s6000/1.%2BGedung%2B1.JPG" alt="">
          <div class="img-caption">
            <div class="subhead">Apalagi Coba</div>
            <h1 class="mb-4">Gk tau Mau Apa</h1>
            <a href="#services" class="btn btn-warning text-light">Read More</a>
          </div>
        </div>
      </div>
    </div> <!-- .slider-wrapper -->
  </div> <!-- .page-banner -->
</header>

<main style="background-color: #2C2E43;">
  <div class="page-section" style="background-color: #2C2E43;">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <div class="subhead text-warning">About Us</div>
          <h2 class="title-section text-light">We are <span class="text-warning">Osis</span> to Growth your Business</h2>
          <p style="color: #B2B1B9 ;">OSIS (Organisasi Siswa Intra Sekolah) adalah organisasi siswa di SMK Wikrama yang merupakan wadah pembentukan karakter dan management agar siswa dapat dan terbiasa membuat acara atau event dan/atau mengurus acara atau event yang sudah disediakan oleh sekolah. Syarat menjadi OSIS di SMK Wikrama Bogor adalah telah mengikuti Latihan Dasar Kepemimpinan Siswa (LDKS).</p>
          <a href="about.html" class="btn btn-outline-light mt-4" style="cursor: pointer">Read More</a>
        </div>
        <div class="col-lg-6 py-3" data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="1500">
          <div class="about-img">
            <img src="../assets/img/about.jpeg" alt="">
          </div>
      </div>
      </div>
    </div>
  </div>
  <div class="page-section" style="background-color: #2C2E43;">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-6 py-3" data-aos="fade-down-right">
          <div class="about-img">
            <img src="https://virtual-tour.smkwikrama.sch.id/assets/img/images/69677290_3129768977050113_3976396568374375367_n.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3">
          <div class="subhead text-warning">About Us</div>
          <h2 class="title-section text-light">We are <span class="text-warning">Osis</span> to Growth your Business</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero vero voluptatum, ad eius dolor fuga, nam id voluptates harum ipsam in quasi recusandae. Numquam voluptas enim repudiandae. Provident, quo nobis!</p>
        </div>
      </div>
    </div>
  </div>


  <div class="page-section">
    <div class="container">
      <div class="text-center">
        <div class="subhead">News</div>
        <h2 class="title-section">Read Our Latest News</h2>
      </div>
      <div class="row">
      <div class="square">
        <img src="../assets/img/bg_image_2.jpg" class="mask">
     <div class="h1">Is Apple a Design Co</div>
        <p>Apple is more than a tech company; it became a culture unto itself, a passion of most of people and the birthplace of the world’s most revolutionized products.</p>
     <div><a href="https://medium.com/@laheshk/is-apple-a-design-company-f5c83514e261" target="_" class="button">Read More</a></div>
      </div>
      <div class="square">
        <img src="../assets/img/bg_image_2.jpg" class="mask">
     <div class="h1">Is Apple a Design Co</div>
        <p>Apple is more than a tech company; it became a culture unto itself, a passion of most of people and the birthplace of the world’s most revolutionized products.</p>
     <div><a href="https://medium.com/@laheshk/is-apple-a-design-company-f5c83514e261" target="_" class="button">Read More</a></div>
      </div>
      <div class="square">
        <img src="../assets/img/bg_image_2.jpg" class="mask">
     <div class="h1">Is Apple a Design Co</div>
        <p>Apple is more than a tech company; it became a culture unto itself, a passion of most of people and the birthplace of the world’s most revolutionized products.</p>
     <div><a href="https://medium.com/@laheshk/is-apple-a-design-company-f5c83514e261" target="_" class="button">Read More</a></div>
      </div>
      </div>
    </div>
            
  </div>

      
      
    <div>
      <div class="text-center">
        <a href="blog.html" class="btn btn-primary mt-2">View More</a>
      </div>

    </div> <!-- .container -->
  </div> <!-- .page-section -->
  

  <div class="page-section">
    <div class="container">
      <div class="text-center">
        <h2 class="title-section mb-3">Kotak Inspirasi</h2>
        <p>Just say hello or drop us a line. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
          <form action="#" class="form-contact" >
            <div class="row">
              <div class="col-sm-6 py-2">
                <label for="name" class="fg-light">Name</label>
                <input type="text" class="form-control" id="name" style="background-color: #353850;" placeholder="Enter name..">
              </div>
              <div class="col-sm-6 py-2">
                <label for="email" class="fg-light">Email</label>
                <input type="text" class="form-control" id="email" style="background-color: #353850;" placeholder="Email address..">
              </div>
              <div class="col-12 py-2">
                <label for="message" class="fg-light">Message</label>
                <textarea id="message" rows="8" class="form-control" style="background-color: #353850;" placeholder="Enter message.."></textarea>
              </div>
              <div class="col-12 mt-3">
                <button type="submit" class="btn btn-outline-success px-5">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
</main>

<footer class="page-footer">
  <div class="container">
    <div class="row" style="justify-content: center;">
      <div class="col-lg-3 py-3 " style="display: flex;">
        <img src="../assets/img/Wikrama.png" width="40" height="40" style="margin-right: 10px; " alt="wikrama">
        <h3 class="mx-1">Wikrama</h3>
      </div>
      <div class="col-lg-3 py-3">
        <h5>Contact Information</h5>
        <p>Jawa Barat, Bogor, Wikrama</p>
        <p>Email: smkwikrama@sch.id</p>
        <p>Phone: +00 112323980</p>
      </div>
      <div class="col-lg-3 py-3">
        <h5>Group</h5>
        <ul class="footer-menu">
          <li><a href="#">Osis</a></li>
          <li><a href="#">MPK</a></li>
          <li><a href="#">News & Feed</a></li>
        </ul>
      </div>
    </div>

    <hr>

    <div class="row mt-4">
      <div class="col-md-6">
        <p>Copyright 2022. This web designed by <a href="">DG</a></p>
      </div>
      <div class="col-md-6 text-right">
        <div class="sosmed-button">
          <a href="#"><span class="mai-logo-facebook-f"></span></a>
          <a href="#"><span class="mai-logo-twitter"></span></a>
          <a href="#"><span class="mai-logo-youtube"></span></a>
          <a href="#"><span class="mai-logo-linkedin"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>
@endsection
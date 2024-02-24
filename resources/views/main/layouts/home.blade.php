@extends('main/main')
@section('content')
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%3A700"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/home.css') }}"/>
</head>
<body>

<!-- Floating Ikon -->
<ul class="btn-floating">
  <li class="floating-item whatsapp">
    <a href="https://wa.me/08116604556">
    <img src="{{ asset('icons/icomoon-free-whatsapp-4bn.png') }}">
    <p>Whatsapp</p>
  </a>
  </li>
  <li class="floating-item telephone">
    <a href="tel:0751-8951900">
    <img src="{{ asset('icons/fluent-call-12-regular-8kU.png') }}">
    <p>Telephone</p>
  </a>
  </li>
</ul>

 <!-- Header -->
 
  <!-- Flyer -->
    <div class="slides">
      <div class="slide">
        <img src="{{ asset('main-layouts-assets/header-images/1.png') }}" alt="img">
      </div>
      <div class="slide">
        <img src="{{ asset('main-layouts-assets/header-images/2.png') }}" alt="img">
      </div>
      <div class="slide">
        <img src="{{ asset('main-layouts-assets/header-images/3.png') }}" alt="img">
      </div>
      <div class="navigation">
        <a class="prev" onclick = "plusSlides(-1)">&#10094;</a>
        <a class="next" onclick = "plusSlides(1)">&#10095;</a>
      </div>
    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex)

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
    </script>

    
    <!-- Tulisan RS -->
    <div class="NamaSlogan">
      <p class="NamaRS">Rumah Sakit Naili DBS</p>
      <p class="sloganRS">Profesional, Empati dan Komunikatif dalam Melayani</p>
    </div>

    <!-- Kotak 3 -->
    <div class="kotak3">
      <div class="content">
        <img src="{{ asset('icons/jadwaldokter.svg') }}">
        <p>Jadwal Dokter</p>
      </div>

    <div class="content">
        <img src="{{ asset('icons/pelayanan.svg') }}">
        <p >Pelayanan</p>
      </div>

    <div class="content">
        <img src="{{ asset('icons/tenagamedis.svg') }}">
        <p>Tenaga Medis</p>
      </div>
    </div>

  <!-- Kegiatan -->
    <p class="Kegiatan">KEGIATAN</p>
    <div class="Kegiatan-img-container">
      <img class="Kegiatan-img" src="{{ asset('icons/garisRS.svg') }}">
    </div>


<div class="kegiatan-slider">
  <div class="kegiatan-slide">
    <div class="container">
      <img src="{{ asset('images/kegiatan.png') }}" alt="kegiatan">
    </div>
    <div class="details">
      <p>Lorem ipsum 1 dolor sit amet, consectetur adipiscing elit. Donec orci eros, ornare.</p>
      <button class="btn-kegiatan">Read More<img src="{{ asset('icons/arrow.png') }}"></button>
    </div>
  </div>
  <div class="kegiatan-slide">
    <div class="container">
      <img src="{{ asset('images/kegiatan.png') }}" alt="kegiatan">
    </div>
    <div class="details">
      <p>Lorem ipsum 2 dolor sit amet, consectetur adipiscing elit. Donec orci eros, ornare.</p>
      <button class="btn-kegiatan">Read More<img src="{{ asset('icons/arrow.png') }}"></button>
    </div>
  </div>
  <div class="kegiatan-slide">
    <div class="container">
      <img src="{{ asset('images/kegiatan.png') }}" alt="kegiatan">
    </div>
    <div class="details">
      <p>Lorem ipsum 3 dolor sit amet, consectetur adipiscing elit. Donec orci eros, ornare.</p>
      <button class="btn-kegiatan">Read More<img src="{{ asset('icons/arrow.png') }}"></button>
    </div>
  </div>
 <div class="kegiatan-slide">
  <div class="container">
    <img src="{{ asset('images/kegiatan.png') }}" alt="kegiatan">
  </div>
  <div class="details">
    <p>Lorem ipsum 4 dolor sit amet, consectetur adipiscing elit. Donec orci eros, ornare.</p>
    <button class="btn-kegiatan">Read More<img src="{{ asset('icons/arrow.png') }}"></button>
  </div>
</div>
<div class="kegiatan-ikon">
  <a class="prev" onclick = "plusKegiatanSlides(-1)">&#10094;</a>
  <a class="next" onclick = "plusKegiatanSlides(1)">&#10095;</a>
</div>
</div>

<script>
  var kegiatanSlideIndex = 0;
  showKegiatanSlides();

  function plusKegiatanSlides(n) {
    kegiatanSlideIndex += n;
    showKegiatanSlides();
  }

  function showKegiatanSlides() {
    var i;
    var slides = document.getElementsByClassName("kegiatan-slide");
    var screenWidth = window.innerWidth;

    // Menentukan jumlah slide yang akan ditampilkan berdasarkan lebar layar
    var slidesToShow;
    if (screenWidth < 520) {
      slidesToShow = 1;
    } else if (screenWidth < 950) {
      slidesToShow = 2;
    } else {
      slidesToShow = 3;
    }

    // Menyesuaikan indeks slide agar tidak melewati batas
    if (kegiatanSlideIndex < 0) {
      kegiatanSlideIndex = slides.length - slidesToShow;
    } else if (kegiatanSlideIndex > slides.length - slidesToShow) {
      kegiatanSlideIndex = 0;
    }

    // Menyembunyikan semua slide
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    // Menampilkan slide yang sesuai
    for (i = kegiatanSlideIndex; i < kegiatanSlideIndex + slidesToShow; i++) {
      slides[i].style.display = "block";
    }
  }

  window.addEventListener('resize', showKegiatanSlides); // Memanggil showKegiatanSlides saat ukuran layar berubah

</script>

<!-- <script>
  var kegiatanSlideIndex = 1;
  showKegiatanSlides(kegiatanSlideIndex);

  function plusKegiatanSlides(n) {
    showKegiatanSlides(kegiatanSlideIndex += n);
  }

  function showKegiatanSlides(n) {
    var i;
    var slides = document.getElementsByClassName("kegiatan-slide");
    if (n > slides.length - 2) {
      kegiatanSlideIndex = 1;
    }
    if (n < 1) {
      kegiatanSlideIndex = slides.length - 2;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < 3; i++) {
      slides[kegiatanSlideIndex + i - 1].style.display = "block";
    }
  }

  plusKegiatanSlides(0);
</script> -->

 

   <!-- Mengapa Naili DBS -->
   <div class="mengapa-alasan">
   <div class="mengapa">
    <p class="mengapaNDBS">Mengapa Naili DBS?</p>
   </div>
   
   <div class="alasan">
    <div class="alasan-container">
      <div class="alasan-content">
        <img src="{{ asset('icons/regulartrophy.svg') }}">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="alasan-container">
      <div class="alasan-content">
        <img src="{{ asset('icons/solid-ambulance.png') }}">
         <p>Kemudahan Akses</p>
      </div>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
   <div class="alasan-container">
    <div class="alasan-content">
      <img src="{{ asset('icons/heart-add.svg') }}">
      <p>Pelayanan Kesehatan yang Baik</p>
    </div>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
  <div class="alasan-container">
    <div class="alasan-content">
      <img src="{{ asset('icons/regularfirst-aid.svg') }}">
      <p>Pelayanan Kesehatan yang Baik</p>
    </div>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
</div> 
</div>
  

   <!-- Promo -->
   <p class="Promo">PROMO SAAT INI</p>
   <div class="Promo-img-container">
     <img class="Promo-img" src="{{ asset('icons/garisRS.svg') }}">
   </div>

   <!-- box2annya -->
   <div class="promo-container">
    <div class="promo-content">
      <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    </div>
    <div class="promo-content">
      <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    </div>
    <div class="promo-content">
      <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    </div>
    <div class="promo-content">
      <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    </div>
    <div class="promo-ikon">
      <a class="prev" onclick = "plusPromoSlides(-1)">&#10094;</a>
      <a class="next" onclick = "plusPromoSlides(1)">&#10095;</a>
    </div>
   </div>

   <script>
    var promoSlideIndex = 1;
    showPromoSlides(promoSlideIndex);
  
    function plusPromoSlides(n) {
      showPromoSlides(promoSlideIndex += n);
    }
  
    function showPromoSlides(n) {
      var i;
      var slides = document.getElementsByClassName("promo-content");
      if (n > slides.length - 2) {
        promoSlideIndex = 1;
      }
      if (n < 1) {
        promoSlideIndex = slides.length - 2;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < 2; i++) {
        slides[promoSlideIndex + i - 1].style.display = "block";
      }
    }
  
    plusPromoSlides(0);
  </script>
  

   <!-- Mitra -->
   <p class="Mitra">MITRA KAMI</p>
   <div class="Mitra-img-container">
     <img class="Mitra-img" src="{{ asset('icons/garisRS.svg') }}">
   </div>

   <!-- box2annya -->
   <div class="mitralogo">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
    <img src="{{ asset('images/Rectanglekegiatan.png') }}">
   </div>

   <!-- Feedback -->
   <p class="Feedback">FORMULIR UMPAN BALIK</p>
   <div class="Feedback-img-container">
     <img class="Feedback-img" src="{{ asset('icons/garisRS.svg') }}">
   </div>

    <!-- box2annya -->
    <div class="feedback-container">
      <table>
        <form action="" method="">
    <tr>
    <td>
      <label>Nama*</label>
      <br/>
      <input class="txt" type="text" placeholder="Masukkan nama Anda...">
    </td>
    <td>
      <label>Email*</label>
      <br/>
      <input class="txt" type="text" placeholder="Masukkan Email Anda...">
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <label>Pesan</label>
      <br/>
      <textarea class="txt-pesan" placeholder="Masukkan pesan Anda..."></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="kirim" class="feedback-btn">Kirim</button>
    </td>
  </tr>
</form>
</table>
</div>
</body>
@endsection
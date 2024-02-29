<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/main.css') }}" />
    <title>RS Naili DBS</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <nav class="nav container">
        <div class="nav__data">
          <a href="#" class="nav__logo">
            <img src="{{ asset('images/naili-logo.png') }}" />
          </a>
          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line nav__burger"></i>
            <i class="ri-close-line nav__close"></i>
          </div>
        </div>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li><a href="/" class="nav__link {{ $section === 'home' ?  'active__link' : ''}}">Home</a></li>
            <li><a href="/profil" class="nav__link {{ $section === 'profil' ?  'active__link' : ''}}">Profil</a></li>
            <li><a href="/centre-of-excellence" class="nav__link {{ $section === 'centre-of-excellence' ?  'active__link' : ''}}">Centre of Excellence</a></li>
            <li class="dropdown__item" id="fasilitas-item">
              <div class="nav__link {{ $section === 'fasilitas' ?  'active__link' : ''}}">
                Fasilitas
                <i
                  class="ri-arrow-down-s-line dropdown__arrow"
                  id="fasilitas-arrow"
                ></i>
              </div>
              <ul class="dropdown__menu" id="fasilitas-menu">
                <li>
                  <a href="/fasilitas" class="dropdown__link">Fasilitas</a>
                </li>
                <li>
                  <a href="/fasilitas-pelayanan" class="dropdown__link">Layanan</a>
                </li>
              </ul>
            </li>
            <li><a href="/galeri" class="nav__link {{ $section === 'galeri' ?  'active__link' : ''}}">Galeri</a></li>
            <li class="dropdown__item" id="artikel-item">
              <div class="nav__link {{ $section === 'artikel' ?  'active__link' : ''}}">
                Artikel
                <i
                  class="ri-arrow-down-s-line dropdown__arrow"
                  id="artikel-arrow"
                ></i>
              </div>
              <ul class="dropdown__menu" id="artikel-menu">
                <li>
                  <a href="/berita" class="dropdown__link">Berita</a>
                </li>
                <li>
                  <a href="/kegiatan" class="dropdown__link">Kegiatan</a>
                </li>
              </ul>
            </li>
            <li class="dropdown__item" id="informasi-item">
              <div class="nav__link {{ $section === 'informasi' ?  'active__link' : ''}}">
                Informasi
                <i
                  class="ri-arrow-down-s-line dropdown__arrow"
                  id="informasi-arrow"
                ></i>
              </div>
              <ul class="dropdown__menu" id="informasi-menu">
                <li>
                  <a href="/tenaga-medis" class="dropdown__link">Tenaga Medis</a>
                </li>
                <li>
                  <a href="/jadwal-dokter" class="dropdown__link">Jadwal Dokter</a>
                </li>
                <li>
                  <a href="#" class="dropdown__link">Pengunjung</a>
                </li>
                <li>
                  <a href="/hak-kewajiban-pasien" class="dropdown__link">Hak & Kewajiban Pasien</a>
                </li>
                <li>
                  <a href="/pkrs" class="dropdown__link">PKRS</a>
                </li>
                <li>
                  <a href="/komite-mutu" class="dropdown__link">Komite Mutu</a>
                </li>
                <li>
                  <a href="/ppi" class="dropdown__link">PPI</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    {{-- <div class="title__page">
      <img src="/public/tenaga-medis.png" />
      <h5>Tenaga Medis</h5>
    </div> --}}
    @yield('content')

    <footer>
      <div class="footer-row-1">
        <img src="{{ asset('images/naili-logo.png') }}" />
        <p>
          Jl. Ratulangi No.24, Kp. Jao, Kec. Padang Barat<br />Kota Padang,
          Sumatera Barat
        </p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.275168582025!2d100.35672397554853!3d-0.9454239353497782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b937a41b5b77%3A0xe8ab7afe8637d73e!2sRS%20NAILI%20DBS!5e0!3m2!1sid!2sid!4v1706427470756!5m2!1sid!2sid"
          width="297"
          height="200"
          style="border: 2px"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
      </div>
      <div class="footer-row-2">
        <div>
          <p>Layanan</p>
          <ul>
            <li><a href="/fasilitas-layanan">Pelayanan Rawat Jalan</a></li>
            <li><a href="/fasilitas-layanan">Pelayanan Unggulan</a></li>
            <li><a href="/fasilitas-layanan">Pelayanan Rawat Inap</a></li>
            <li><a href="/fasilitas-layanan">Pelayanan Tindakan Medis</a></li>
            <li><a href="/fasilitas-layanan">Pelayanan Penunjang Medis</a></li>
            <li><a href="/fasilitas-layanan">Pelayanan Penunjang Diagnostik </a></li>
          </ul>
        </div>
        <div>
          <p>Artikel</p>
          <ul>
            <li><a href="/artikel-berita">Berita</a></li>
            <li><a href="/artikel-kegiatan">Kegiatan</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-row-3">
        <div>
          <p>Informasi</p>
          <ul>
            <li><a href="">Tenaga Medis</a></li>
            <li><a href="">Jadwal Dokter</a></li>
            <li><a href="">Pengunjung</a></li>
            <li><a href="">Hak & Kewajiban Pasien</a></li>
            <li><a href="">PKRS</a></li>
            <li><a href="">Komite Mutu</a></li>
            <li><a href="">PPI</a></li>
          </ul>
        </div>
        <div class="pencapaian">
          <p>Pencapaian</p>
          <img src="{{ asset('images/kars-paripurna.jpeg') }}" />
        </div>
      </div>
      <div class="footer-row-4">
        <div>
          <p>Follow Us</p>
          <a href="https://www.instagram.com/rsnailidbs.padang/?hl=en"
            ><i><img src="{{ asset('icons/instagram-line.svg') }}" /></i
          ></a>
          <a href="https://www.facebook.com/rs.nailidbs">
          <i><img src="{{ asset('icons/facebook-circle-line.svg') }}" /> </i>
          </a>
        </div>
        <div class="contact">
          <p>Contact Us</p>
          <i class="contact-info" href="https://wa.me/08116604556"
            ><img src="{{ asset('icons/whatsapp-line.svg') }}" />
            <span>Whatsapp<br />08116604556</span></i
          >
          <i class="contact-info"
            ><img src="{{ asset('icons/phone-line.svg') }}" /><span
              >Telephone<br />0751-8951900</span
            ></i
          >
          <i class="contact-info"
            ><img src="{{ asset('icons/mail-line.svg') }}" /><span
              >Email<br />rs.nailidbs@gmail.com</span
            ></i
          >
        </div>
        <p>Layanan Pengguna</p>
        <ul>
          <li><a href="">Umpan Balik</a></li>
        </ul>
      </div>
    </footer>
    <script src="{{ asset('main-layouts-assets/js/main.js') }}"></script>
  </body>
</html>

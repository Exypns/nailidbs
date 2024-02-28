@extends('main/main')
@section('content')

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Rumah Sakit Naili DBS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%3A700"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/centre-of-excellence.css') }}"/>
  <script src="#" defer></script>
</head>
<body>

<!-- navigation -->


<!-- Header -->
<div class="centre-wrapper">
  <img src="{{ asset('main-layouts-assets/header-images/centre-of-excellence.png') }}" alt="img">
  <div class="centre-wrapper-content">
  <p>Centre Of Excellence</p>
  </div>
</div>

<!-- konten -->
<div class="centre">
    <div class="centre-container">
        <p class="nama-centre">Pelayanan Unggulan</p>
        <div class="centre-img"><img src="{{ asset('images/layanan-kesehatan-kerja.png') }}"></div>
        <p class="centre-content">RS Naili DBS telah ditunjuk menjadi Rumah Sakit Pusat Layanan Kecelakaan Kerja (PLKK) oleh BPJS Ketenagakerjaan. Dengan demikian, peserta BPJS Ketenagakerjaan yang mengalami kecelakaan kerja bisa mendapat pelayanan kesehatan dengan jaminan penuh. Adanya Dokter Okupasi, Orthopedi, Rehabilitasi Medik dan Dokter Spesialis lainnya merupakan komitmen kami dalam pelayanan kecelakaan kerja
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Klinik Okupasi</p>
        <div class="centre-img">
            <img src="{{ asset('images/klinik-okupasi.png') }}"></div>
        <p class="centre-content">Klinik Kedokteran Okupasi memberi pelayanan kesehatan bagi para pekerja yang bertujuan untuk menjaga dan meningkatkan produktivitas pekerja serta mencegah terjadinya penyakit akibat kerja. Klinik okupasi juga mendukung program Return to Work (RTW) yang merupakan bantuan untuk kesiapan kembali kerja. Program persiapan itu mencakup pendampingan kepada peserta yang mengalami kecelakaan kerja dan penyakit akibat kerja. Termasuk sejak peserta menjalani perawatan di rumah sakit sampai peserta tersebut dapat kembali bekerja.
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Sunday Clinic</p>
        <div class="centre-img">
            <img src="{{ asset('images/sunday-klinik.png') }}"></div>
        <p class="centre-content">Kesibukan terkadang menjadi halangan untuk dapat memeriksakan kesehatan anda ke rumah sakit di hari kerja. Sunday Clinic kini hadir di RS Naili DBS dengan berbagai pelayanan. Untuk mengetahui jadwal pelayanan yang tersedia, anda dapat melihat di platform media sosial atau menghubungi call center RS Naili DBS 
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Layanan Sport Fisioterapi</p>
        <div class="centre-img">
            <img src="{{ asset('images/layanan-sport-fisioterapi.png') }}"></div>
        <p class="centre-content">Cedera merupakan hal yang sangat mungkin terjadi saat berolahraga. Cedera bisa menyebabkan rasa sakit yang menurunkan kualitas hidup. Tanpa perawatan yang tepat, masalah ini dapat membatasi aktivitas sehari-hari. Dokter dan fisioterapis RS Naili DBS menggunakan beraneka macam terapi dan teknik fisik seperti terapi gerakan, laser, latihan fisik, hingga ultrasonografi untuk perawatan cedera-cedera yang terjadi akibat berolahraga. 
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Klinik Hemofili</p>
        <div class="centre-img">
            <img src="{{ asset('images/klinik-hemofili.png') }}"></div>
        <p class="centre-content">Hemofilia merupakan gangguan pembekuan darah yang menyebabkan darah sulit membeku. Penderita penyakit ini cenderung mudah mengalami perdarahan yang sulit dihentikan. Jika tidak segera diobati, penyakit ini dapat menyebabkan keadaan serius. Kini, klinik Hemofili telah tersedia di RS Naili DBS dimana Anda dapat dengan berkonsultasi dengan Dokter Spesialis dan melakukan pemeriksaan untuk mendapatkan diagnosis yang akurat.
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Bedah Laparoskopi</p>
        <div class="centre-img">
            <img src="{{ asset('images/bedah-laparoskopi.png') }}"></div>
        <p class="centre-content">Laparoskopi adalah prosedur pembedahan dengan luka minimal. Prosedur ini yang dilakukan untuk memeriksa dan mengobati kondisi organ tertentu pada bagian dalam perut atau panggul, seperti usus buntu, kantung empedu, atau rahim. Kelebihan prosedur ini adalah minimal sayatan, rasa sakit minimal dan pemulihannya yang cepat. 
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Layanan Persalinan</p>
        <div class="centre-img">
            <img src="{{ asset('images/layanan-persalinan.png') }}"></div>
        <p class="centre-content">Layanan Persalinan merupakan unit layanan kebidanan yang ditangani oleh Dokter Spesialis Obgyn yang berpengalaman. RS Naili DBS juga memberikan pilihan Pelayanan Syar'i dimana ibu mendapat layanan persalinan ramah gender dan perlindungan aurat pasien. Tidak hanya itu, tersedia benefit pengurusan akte kelahiran gratis untuk warga Padang. 
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Layanan Katarak</p>
        <div class="centre-img">
            <img src="{{ asset('images/layanan-katarak.png') }}"></div>
        <p class="centre-content">RS Naili DBS menghadirkan pelayanan pengobatan katarak dengan teknik Fakoemulsifikasi, yaitu proses penghancuran katarak menggunakan tenaga ultrasound dengan frekuensi tinggi.
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Layanan Radiologi</p>
        <div class="centre-img">
            <img src="{{ asset('images/layanan-radiologi.png') }}"></div>
        <p class="centre-content">Pelayanan radiologi merupakan salah satu instalasi penunjang yang memberikan pelayanan pencitraan radiodiagnostik untuk membantu pasien dan klinisi dalam proses penegakan diagnosis dan terapi. Instalasi radiologi didukung oleh SDM yang handal dan ramah serta alat-alat yang canggih dalam memberikan pelayanan radiologi yang tepat, akurat dan nyaman.
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Telehealth</p>
        <div class="centre-img">
            <img src="{{ asset('images/telehealth.png') }}"></div>
        <p class="centre-content">RS Naili DBS menyediakan layanan telehealth dalam bentuk Konsultasi Online. Layanan konsultasi online dapat diakses dengan terlebih dahulu melakukan registrasi online minimal H-1. Waktu konsultasi online akan dikonfirmasi kembali sesuai jadwal dokter.
        </p>
    </div>
    <div class="centre-container">
        <p class="nama-centre">Layanan HIV - AIDS</p>
        <div class="centre-img"> <img src="{{ asset('images/layanan-hiv-aids.png') }}"></div>
        <p class="centre-content">Infeksi HIV merupakan penyakit kronis yang dapat dikendalikan dengan pemberian obat antiretroviral (ARV) seumur hidup. Diperlukan layanan yang mudah dijangkau untuk menjaga ketersinambungan pengobatan pasien. RS Naili DBS turut serta dalam upaya pengendalian penyebaran virus HIV dan memberikan dukungan bagi penderita dengan memberikan pelayanan untuk screening serta pengobatan HIV.
        </p>
    </div>
 
</div>



</body>

@endsection
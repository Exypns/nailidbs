@extends('main.main')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans%3A400%2C700"/>
    <link rel="stylesheet" href="{{ asset('main-layouts-assets/css/profil.css') }}"/>
</head>.
<body>
    <!--navbar  -->

    <!-- isi -->
<section>
    <div class="all-profil">
        <!-- <div class="navbar-profil">
            <div>Sejarah</div>
            <div>Visi &amp; Misi</div>
            <div>Nilai-Nilai</div>
            <div>Motto</div>
        </div> -->
        <p class="Kegiatan">SEJARAH</p>
        <div class="Kegiatan-img-container">
          <img class="Kegiatan-img" src="{{ asset('main-layouts-assets/') }}gambar/garis.png">
        </div>
        
        <div class="isi-sejarah">
            <div class="container-sejarah1">
                <img class="gambarsejarah1" src="gambar/sejarah1.png" alt="">
                <p>Rumah Sakit Naili DBS mulai beroperasional sebagai rumah sakit umum Tipe C. 
                    Termotivasi dari keinginan Bapak Naili DBS (Datuak Buang Sati) yang menginginkan mendirikan sebuah Rumah Sakit yang berkualitas, 
                    dan mempunyai pelayanan yang optimal seperti pengalaman beliau sewaktu berobat ke luar negeri. Bapak Naili DBS meninggal dunia pada tanggal 26 Oktober 2013. Niat baik almarhum untuk mendirikan sebuah Rumah Sakit dilanjutkan oleh anak-anak almarhum yaitu bapak Indra Warman, 
                    Ibu Irdawati dan Ibu Eriati, dalam naungan badan usaha PT. Ananda Naili Prima. Rumah sakit ini diberi nama sesuai dengan nama almarhum yaitu Rumah Sakit Naili DBS,
                </p>
            </div>
            <div class="container-sejarah2">
                <img class="gambarsejarah1" src="gambar/sejarah2.png" alt="">
                <p>Rumah Sakit NAILI DBS memulai pembangunannya pada Oktober 2013 dan mulai beroperasional pada tanggal 04 April 2016 ditandai dengan penandatanganan oleh Gubernur menjabat saat itu Prof. Dr. H. Irwan Prayitno, M.Sc. 
                    tentunya dengan harapan rumah sakit ini dapat berkembang dengan baik dalam rangka memberikan pelayanan kesehatan perorangan dan masyarakat di kota Padang. Rumah Sakit Naili DBS mempunyai luas ± 1.524 M2 terletak di Jl. 
                    Ratulangi No.24 Kelurahan Kampung Jao Padang, yang berada dipusat kota Padang sehingga mudah dijangkau dari seluruh penjuru.
                </p>
            </div>
        </div>
        <!-- VISI M ISI -->
        <p class="Kegiatan">VISI MISI</p>
        <div class="Kegiatan-img-container">
          <img class="Kegiatan-img" src="gambar/garis.png">
        </div>
        <div class="isi-visimisi">
            <div class="container-visi">
                <h3>VISI</h3>
                <div class="sub-visi">
                     <img src="gambar/visi.png" alt="">
                     <p>Menjadi Rumah Sakit Pilihan dan Terdepan dalam memberikan pelayanan kesehatan secara Paripurna di Sumatera Barat</p>
                </div>
            </div>
            <div class="container-misi">
                <h3>MISI</h3>
                <div class="isi-container-misi">
                    <div class="sub-misi">
                        <img src="gambar/MISI1.png" alt="">
                        <p>Menyelenggarakan pelayanan kesehatan yang profesional, bermutu,serta mengikuti perkembangan ilmu pengetahuan dan teknologi kedokteran terkini yang berwawasan lingkungan</p>
                    </div>
                    <div class="sub-misi">
                        <img src="gambar/MISI2.png" alt="">
                        <p>Menjunjung tinggi nilai nilai kemanusiaan serta mengutamakan kepuasan pelanggan dan karyawan 
                        </p>
                    </div>
                    <div class="sub-misi">
                        <img src="gambar/MISI3.png" alt="">
                        <p>Meningkatkan pengetahuan serta keterampilan tenaga kesehatan dan karyawan melalui pendidikan dan pelatihan berkelanjutan
                        </p>
                    </div>
                    <div class="sub-misi">
                        <img src="gambar/MISI4.png" alt="">
                        <p>Melaksanakan pengelolaan manajemen dan keuangan secara efisien dan efektif untuk mencapai produktivitas yang optimal.
                        </p>
                    </div>
                    <div class="sub-misi">
                        <img src="gambar/MISI5.png" alt="">
                        <p>Menjadi mitra kerja yang handal dan terpercaya
                        </p>
                    </div>
                </div>
             
            </div>
        </div>
        <!-- NILAI-NILAI -->
        <p class="Kegiatan">NILAI-NILAI</p>
        <div class="Kegiatan-img-container">
          <img class="Kegiatan-img" src="gambar/garis.png">
        </div>
        </div>
            <div class="container-nilai">
                    <div class="card">
                        <img src="gambar/nilai.png" alt="">
                        <p>Ramah</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Adil</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Profesional</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Ikhlas</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Hormat</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Peduli</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Kebersamaan</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Jujur</p>
                    </div>
                
                    <div class="card">
                      <img src="gambar/nilai.png" alt="">
                      <p>Integritas</p>
                    </div>
             </div>
             <!-- MOTTO -->
             <p class="Kegiatan">MOTTO</p>
             <div class="Kegiatan-img-container">
               <img class="Kegiatan-img" src="gambar/garis.png">
             </div>
        <div class="isi-motto">
            <div class="container-motto">
                <h1>“Profesional, Empati dan Komunikatif dalam Melayani”</h1>
            </div>
        </div>
    </div>
</section>
    <!-- footer -->
</body>
@endsection
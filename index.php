<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISIBUK | LANDING PAGE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logos/logo-sisibuk.png" rel="icon">
  <link href="assets/img/logos/logo-sisibuk.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logos/logo-sisibuk.png" alt=""></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto"><img src="assets/img/logos/logo-sisibuk-2.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link   scrollto" href="#why-us">Why Us</a></li>
          <li><a class="nav-link   scrollto" href="#data">Data</a></li>
          <li><a class="nav-link scrollto" href="#fitur">Fitur</a></li>
          <li><a class="nav-link scrollto" href="#faq">FaQ</a></li>
          <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
          <?php
            $pageLanding = 4;
            echo "<li><a class='getstarted scrollto' href='./pages/dashboard.php?&page=".$pageLanding."'>Dashboard</a></li>"
          ?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Best Solutions For Your Study Reference</h1>
          <h2>SISIBUK merupakan website untuk mencari referensi buku terkait teknologi. Temukan buku yang cocok untuk referensi baca kamu di kuliah!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <?php
              $pageLanding = 4;
              echo "<a class='btn-get-started scrollto' href='./pages/dashboard.php?&page=".$pageLanding."'>Get Started to Dashboard</a>"
            ?>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/illustrations/landing-1.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in"></div>
    </section><!-- End Cta Section -->

    <!-- ======= About SISIBUK Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About SISIBUK</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              <strong>SISIBUK</strong> merupakan aplikasi berbasis website untuk mencari referensi buku mengenai teknologi. 
              Aplikasi ini memiliki beberapa fitur, antaranya:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> <strong>Fitur Penjelajahan,</strong>untuk kamu yang ingin menjelajahi list buku pada aplikasi ini.</li>
              <li><i class="ri-check-double-line"></i> <strong>Fitur Pencarian,</strong> untuk kamu yang ingin mencari secara detail buku yang kamu inginkan.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <strong>Aplikasi SISIBUK (Sistem Informasi Buku)</strong> ini menggunakan teknologi Semantik 
              untuk membantu pengguna mencari buku dengan lebih efisien. 
              Aplikasi ini memiliki daftar buku-buku yang tersedia di 
              Ruang Baca Informatika, memungkinkan pengguna untuk dengan mudah 
              menemukan buku berdasarkan berbagai kategori, judul, penulis, atau 
              topik tertentu. Dengan antarmuka yang ramah pengguna dan sistem pencarian 
              yang cerdas, SISIBUK memberikan akses cepat ke informasi buku dan 
              memudahkan pengguna untuk mengeksplorasi koleksi buku yang ada di Ruang Baca Informatika.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why-Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>WHY YOU SHOULD USE <strong>SISIBUK</strong></h3>
              <p>
                Jenis buku yang terdata pada aplikasi ini merupakan jenis buku Teknologi yang terdapat pada Ruang Baca Informatika. 
                Aplikasi ini akan memudahkan anda dalam mencari koleksi yang ada di Ruang Baca Program Studi Informatika.
                Terdapat beberapa poin penting mengenai aplikasi ini.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Teknologi Ontologi Semantik <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    SISIBUK menggunakan teknologi ontologi semantik, 
                    yang memungkinkan pencarian dan penjelajahan buku 
                    menjadi lebih cerdas dan akurat. Dengan ontologi 
                    semantik, aplikasi dapat memahami hubungan antara 
                    istilah dan konsep, sehingga menghasilkan hasil 
                    pencarian yang relevan dan berkualitas tinggi.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Antarmuka Pengguna yang Menarik dan Mudah Digunakan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Aplikasi ini dirancang dengan antarmuka yang intuitif 
                    dan estetis, memastikan pengguna merasa nyaman saat 
                    menggunakannya. Navigasi yang sederhana dan responsif 
                    memungkinkan pengguna menemukan buku dengan cepat tanpa kebingungan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Sumber Referensi yang Berkualitas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    SISIBUK memastikan buku yang terdaftar dalam aplikasi 
                    adalah buku-buku yang kredibel dan berkualitas. Dengan 
                    demikian, pengguna dapat merasa yakin bahwa mereka 
                    mendapatkan informasi yang valid dan dapat diandalkan
                    untuk keperluan akademis maupun pribadi.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Kategori Buku Untuk Referensi Belajar <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Bagi mahasiswa Program Studi Informatika akan lebih mudah 
                      untuk mencari referensi pembelajaran matakuliah wajib maupun penjaluran, 
                      serta referensi tugas akhir. Bagi yang ingin mengetahui kurikulum 
                      program studi informatika bisa mengakses link berikut: 
                      <a style="display: inline;" href="https://if.unud.ac.id/protected/storage/download/a09ee3ea85659a34f4eef09dd1434e2a.pdf">Kurikulum Prodi</a>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Total Data Section ======= -->
    <section id="data" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Total Data Buku</h3>
            <p class="fst-italic">
              Data Buku pada aplikasi SISIBUK mengambil dari koleksi yang ada di Ruang Baca Program Studi Informatika. 
              Adapun jumlah Buku yang terdata pada aplikasi SISIBUK, yaitu: 
            </p>
            <div class="team">
              <div class="col-lg-12 my-2" data-aos="zoom-in" data-aos-delay="100" >
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="assets/img/icons/book-1.png" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h1 style="font-size: 10rem; color: rgba(55, 81, 126)">161</h1>
                  </div>
                  <div style="margin-top: 7rem">
                    <h1 style="color: #37517E">Buku</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="fitur" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>FITUR</h2>
          <p>Untuk mendapatkan referensi buku yang diinginkan,  <strong>SISIBUK</strong> memiliki fitur berikut yang dapat digunakan:</p>
        </div>

        <div class="row section-center">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <?php
                $pageLanding = 4;
                echo "<h4><a href='./pages/penjelajahan.php?&page=".$pageLanding."'>Penjelajahan</a></h4>"
              ?>
              <p>Jelajahi buku-buku yang ada pada SISIBUK untuk referensi baca kamu!</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <?php
                $pageLanding = 4;
                echo "<h4><a href='./pages/pencarian.php?&page=".$pageLanding."'>Pencarian</a></h4>"
              ?>
              <p>Cari buku-buku yang kamu inginkan secara detail!</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding: 90px 0;">
      <div class="container m-2" data-aos="zoom-in">
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Bagian Tanya Jawab (Q&A) SISIBUK memberikan jawaban 
            langsung untuk pertanyaan umum seputar fitur, fungsi, 
            dan layanan kami. Tujuannya adalah untuk membantu 
            pengguna memahami SISIBUK lebih dalam, memastikan 
            platform ini memenuhi kebutuhan pencarian buku 
            mereka. Baik untuk pengguna baru maupun yang sudah 
            berpengalaman, Q&A ini dirancang sebagai panduan 
            praktis melalui seluruh pengalaman SISIBUK.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
                Bagaimana SISIBUK menjamin hasil pencarian yang diberikan akurat dan cepat? 
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                SISIBUK dapat memberikan hasil yang akurat dan cepat berkat 
                penggunaan teknologi ontologi semantik dan berbagai mekanisme pendukung lainnya.
                Dengan model ontologi semantik, SISIBUK dapat memahami hubungan kompleks antara 
                berbagai konsep buku, seperti penulis, penerbit, dan topik tertentu. 
                Model ini memungkinkan sistem untuk tidak hanya mencari berdasarkan kata kunci, 
                tetapi juga memahami konteks dan hubungan antara elemen-elemen ini. 
                </p>
              </div>
            </li>

            <li style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                Bagaimana cara menggunakan Fitur Penjelajahan? 
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dalam menggunakan fitur Penjelajahan, pengguna dapat memilih beberapa kategori jelajah yang diinginkan.
                  Terdapat kategori Negara, Kota, Tahun, Jalur, dan Bahasa. Setelah memilih kategori utama akan terdapat 
                  beberapa pilihan kembali untuk tiap kategori tersebut. Pengguna dapat bebas menjelajah untuk mendapatkan 
                  informasi buku yang diinginkan.
                </p>
              </div>
            </li>

            <li style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
                Apakah sistem pencarian dapat bekerja secara akurat?
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dalam menggunakan fitur Pencarian, hasil yang didapatkan akan akurat apabila pengguna dapat mengisi data dengan benar.
                  Pada fitur Pencarian ini tidak jauh berbeda dengan Penjelajahan dalam penggunaannya. Hanya saja perlu menginput data 
                  yang benar mengenai buku yang ingin dicari sehingga hasil akan keluar.
                </p>
              </div>
            </li>

            <li style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
                Dimana sumber informasi buku pada Aplikasi SISIBUK ini diperoleh?
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sumber informasi buku ini diambil secara langsung pada Ruang Baca Program Studi Informatika. 
                  Serta informasi tambahan dicari melalui internet, sehingga data akurat dan dapat dipercaya.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    <section id="blog" class=" recent-posts section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blog</h2>
          <p>Terdapat blog-blog terkait mengenai buku</p>
        </div>

        <div class="row gy-4">
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" >
            <article style="background-color: #FFFFFF">

              <div class="post-img">
                <img src="assets/img/blog/blogPhoto-1.jpeg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Life Tips</p>

              <h2 class="title">
                <a href="https://www.beautynesia.id/life/6-cara-mudah-atasi-kebiasaan-suka-mengantuk-saat-lagi-membaca-buku-yuk-terapkan/b-289138">6 Cara Mudah Atasi Kebiasaan Suka Mengantuk Saat Lagi Membaca Buku, Yuk Terapkan!</a>
              </h2>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article style="background-color: #FFFFFF">

              <div class="post-img" >
                <img src="assets/img/blog/blogPhoto-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Recommendation</p>

              <h2 class="title">
                <a href="https://www.niagahoster.co.id/blog/buku-pemrograman/">35+ Rekomendasi Buku Pemrograman Terbaik untuk Setiap Programmer</a>
              </h2>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article style="background-color: #FFFFFF">

              <div class="post-img">
                <img src="assets/img/blog/blogPhoto-4.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Knowledge</p>

              <h2 class="title">
                <a href="https://buku.kompas.com/read/1772/manajemen-informatika-definisi-dan-lingkup-pekerjaan">Manajemen Informatika: Definisi dan Lingkup Pekerjaan</a>
              </h2>

            </article>
          </div><!-- End post list item -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SISIBUK</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
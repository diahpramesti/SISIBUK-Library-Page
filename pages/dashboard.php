<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logos/logo-sisibuk.png">
  <link rel="icon" type="image/png" href="../assets/img/logos/logo-sisibuk.png">
  <title>
    SISIBUK | DASHBOARD
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header mb-4">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php " target="_blank" style="text-align: center;">
        <img src="../assets/img/logos/logo-sisibuk.png" class="navbar-brand-img-main-logo h-100" alt="main_logo">
        
      </a>
    </div>
    <hr class="horizontal light mb-2">

    <?php
      // Get the 'page' parameter from the request and sanitize it
      $page = isset($_REQUEST['page']) ? filter_var($_REQUEST['page'], FILTER_SANITIZE_NUMBER_INT) : 1;

      // Define a function to determine the active class
      function isActive($page, $expected) {
        $nav='';
        $hrefPage ='';
        if ($page==1){
          $nav="Dashboard";
          $hrefPage = "dashboard.php";
        } else if ($page==2) {
          $nav="Penjelajahan";
          $hrefPage = "penjelajahan.php";
        } else if ($page==3){
          $nav="Pencarian";
          $hrefPage = "pencarian.php";
        } else if ($page==4) {
          $nav = "Landing";
          $hrefPage = "../index.php";
        }
        // Determine if it's active
        $isActivePage = $page == $expected ? 'active bg-gradient-primary' : '';

        // Return an array with the navigation label, page number, and active class
        return [
            'navBar' => $nav,
            'navSection' => $isActivePage,
            'navHref' => $hrefPage,
        ];
      }
      $dashboardData = isActive($page, 1);
      $penjelajahanData = isActive($page, 2);
      $pencarianData = isActive($page, 3); 
      $landingData = isActive($page, 4);
    ?>

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <?php
            $pageLanding = 1;

            // Menggunakan string interpolasi tanpa tambahan tanda petik
            echo '<a class="nav-link text-white" href="../pages/penjelajahan.php?page=' . $pageLanding . '">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">travel_explore</i>
                </div>
                <span class="nav-link-text ms-1">Penjelajahan</span>
              </a>';
          ?>
          
        </li>
        <li class="nav-item">
          <?php
            $pageLanding = 1;

            // Menggunakan string interpolasi tanpa tambahan tanda petik
            echo '<a class="nav-link text-white" href="../pages/pencarian.php?page=' . $pageLanding . '">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">search</i>
                </div>
                <span class="nav-link-text ms-1">Pencarian</span>
              </a>';
          ?>
        </li>
        
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        
        <a class="btn bg-gradient-primary shadow-card w-100" href="../index.php" type="button">Back to Landing Page</a>
      </div>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="
              <?php 
                if($page==1){
                  echo $dashboardData['navHref'];
                } else if($page==2) {
                  echo $penjelajahanData['navHref'];
                } else if ($page==3) {
                  echo $pencarianData['navHref'];
                } else if ($page==4) {
                  echo $landingData['navHref'];
                }
              ?>
            ">
              <?php 
                if($page==1){
                  echo $dashboardData['navBar'];
                } else if($page==2) {
                  echo $penjelajahanData['navBar'];
                } else if ($page==3) {
                  echo $pencarianData['navBar'];
                } else if ($page==4) {
                  echo $landingData['navBar'];
                }
              ?>
            </a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center mb-4" style="background-color: #37517E; padding: 2rem; border-radius: 0.5rem; ">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-white" data-aos="fade-up" data-aos-delay="200">
              <h1 >Yuk Baca Buku!</h1>
              <p>Membaca buku memberikan manfaat dalam meningkatkan pengetahuan, 
                memperluas wawasan, dan mengasah keterampilan berpikir kritis. 
                Temukan koleksi buku ruang baca Program Studi Informatika 
                untuk mendalami dunia teknologi informasi dan 
                mengembangkan pemahaman yang mendalam.</p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="../assets/img/illustrations/dasboard-1.svg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->
      

      <!-- section card-book -->
      <div class="row " id="card-container">
        <div class="col-12">
          <div class="card my-4" style="">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                <h3 style="font-family: 'Jost', sans-serif; font-weight: 600;" class="text-white text-capitalize ps-4">Semua Data Buku</h3>
              </div>
            </div>
            <div class="justify-content-evenly card-body d-flex flex-wrap mt-3">
              <?php
                require_once("../sparqllib.php");
                $data = sparql_get(
                  "http://localhost:3030/IFBookCollection",
                  "
                  PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                  PREFIX owl: <http://www.w3.org/2002/07/owl#>
                  PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                  PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                  PREFIX :<http://www.semanticweb.org/asus/ontologies/2024/0/IFBookCollection#>

                  SELECT ?foto ?judul ?sinopsis ?tahun_terbit ?bahasa ?isbn_issn
                  WHERE {
                    ?Buku rdf:type :Buku .
                    ?Buku :foto ?foto .
                    ?Buku :judul ?judul .
                    ?Buku :sinopsis ?sinopsis .
                    ?Buku :tahun_terbit ?tahun_terbit.
                    ?Buku :bahasa ?bahasa .
                    ?Buku :isbn_issn ?isbn_issn .
                  } ORDER BY ASC(?judul)


                  "
                ) 
              ?>
  
              <?php $i = 0;?>
              <?php foreach ($data as $dat) : ?>
                <div class="card col-lg-3 col-md-6 mb-3 card-book-page mx-2">
                  <div class="z-index-2">
                    <div class="card-book" > 
                      <img src=<?= $dat['foto']?> class="img-card" alt="">
                    </div>
                    <div class="card-body" style="display: flex; flex-direction: column ">
                    
                      <h6 class="mb-0 judul" style="height: 30px; line-height: 1"><?= $dat['judul']?>
                      </h6>
                      <p class="text-sm deskripsi fixed-height" id="dynamic-text"><?= $dat['sinopsis']?></p>
                      <hr class="dark horizontal">
                      <div class="d-flex ">
                        <?php
                          $id = $dat['isbn_issn'];
                          $pageDetail = 1;
                          echo "<a class='w-100' href=detail.php?id=". $id ."&page=".$pageDetail. "><button class='mt-3 btn bg-gradient-secondary shadow-card w-100'>DETAIL</button></a>"
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div> 
        </div>  
      </div>

      <!-- end section card-book -->

      <div class="pagination ms-5" id="pagination" style="">
        <button class="btn bg-primary shadow-card w-20" id="prev">Prev</button>
        <button class="btn bg-primary shadow-card w-20 me-6" id="next">Next</button>
      </div>

      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © Copyright SISIBUK. All Rights Reserved
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script>
    const maxChar = 40; // Ganti angka 10 dengan jumlah maksimum karakter yang diinginkan

    // Ambil semua elemen <h1> dengan class "judul"
    const judulElements = document.querySelectorAll('.judul');

    // Iterasi semua elemen <h1>
    judulElements.forEach(function(element) {
      // Periksa panjang teks pada masing-masing elemen <h1>
      if (element.textContent.length > maxChar) {
        // Potong teks jika melebihi jumlah maksimum karakter
        const teksPotong = element.textContent.substring(0, maxChar) + '...';
        
        // Terapkan teks yang telah dipotong
        element.textContent = teksPotong;
      }
    });
  </script>
  <script>
    const max = 120; // Ganti angka 10 dengan jumlah maksimum karakter yang diinginkan

    // Ambil semua elemen <h1> dengan class "judul"
    const descElements = document.querySelectorAll('.deskripsi');

    // Iterasi semua elemen <h1>
    descElements.forEach(function(element) {
      // Periksa panjang teks pada masing-masing elemen <h1>
      if (element.textContent.length > max) {
        // Potong teks jika melebihi jumlah maksimum karakter
        const teksCut = element.textContent.substring(0, max) + '...';
        
        // Terapkan teks yang telah dipotong
        element.textContent = teksCut;
      }
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const cardContainer = document.getElementById('card-container');
      const prevButton = document.getElementById('prev');
      const nextButton = document.getElementById('next');
      const cards = document.querySelectorAll('.card-book-page');

      let currentPage = 1;
      const cardsPerPage = 8;

      function showPage(page) {
        const startIndex = (page - 1) * cardsPerPage;
        const endIndex = startIndex + cardsPerPage;
        
        cards.forEach((card, index) => {
          if (index >= startIndex && index < endIndex) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }

      function updatePaginationButtons() {
        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === Math.ceil(cards.length / cardsPerPage);
      }

      prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
          currentPage--;
          showPage(currentPage);
          updatePaginationButtons();
        }
      });

      nextButton.addEventListener('click', () => {
        if (currentPage < Math.ceil(cards.length / cardsPerPage)) {
          currentPage++;
          showPage(currentPage);
          updatePaginationButtons();
        }
      });

      showPage(currentPage);
      updatePaginationButtons();
    });



  </script>

  <script>
    // Function to adjust font size to fit within a specified height
    function adjustFontSize() {
      const element = document.getElementById('dynamic-text');
      const maxHeight = 80; // fixed height in pixels
      let fontSize = parseFloat(window.getComputedStyle(element).fontSize);

      // Keep reducing font size until the content fits within the fixed height
      while (element.scrollHeight > maxHeight && fontSize > 0.5) {
        fontSize -= 0.05; // Decrease font size
        element.style.fontSize = fontSize + 'rem';
      }
    }

    // Call the function on page load
    document.addEventListener('DOMContentLoaded', adjustFontSize);
  </script>

</body>

</html>
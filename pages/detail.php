<?php
    include "detail-query.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logos/logo-sisibuk.png">
  <link rel="icon" type="image/png" href="../assets/img/logos/logo-sisibuk.png">
  <title>
    Detail
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
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
        } else {
          $nav = "";
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
    ?>
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- Dashboard Section -->
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $dashboardData['navSection'] ?>" href="../pages/dashboard.php?page=1">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <!-- Penjelajahan Section -->
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $penjelajahanData['navSection'] ?>" href="../pages/penjelajahan.php?page=2">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">travel_explore</i>
            </div>
            <span class="nav-link-text ms-1">Penjelajahan</span>
          </a>
        </li>

        <!-- Pencarian Section -->
        <li class="nav-item">
          <a class="nav-link text-white <?php echo $pencarianData['navSection'] ?>" href="../pages/pencarian.php?page=3">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">search</i>
            </div>
            <span class="nav-link-text ms-1">Pencarian</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        
        <a class="btn bg-gradient-primary w-100" href="../index.php" type="button">Back to Landing Page</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
  <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-dark" href="
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
                  }
                ?> 
              </a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Detail</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <div class="container-fluid py-2">
      <div class="row min-vh-80">
        <div class="col-12 mt-3">
          <div class="card h-100">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h5 class="text-white text-capitalize ps-3">Detail Information</h5>
              </div>
            </div>
            <div class="card-body">
              <!-- ======= Portfolio Details Section ======= -->
              <section id="portfolio-details" class="portfolio-details">
                <div class="container">

                  <div class="row gy-4">

                    <div class="col-lg-8">
                      <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                          <div class="swiper-slide">
                            <img src="<?= $data[0]["foto"] ?>" alt="">
                          </div>

                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="portfolio-info">
                        <h3><?= $data[0]["judul"] ?></h3>
                        <ul> 
                          <?php
                            // Initialize the authors string and split into an array
                            $authors_string = $data[0]["authors"];
                            $authors_array = explode(',', $authors_string); 
                            $authors_array = array_map('trim', $authors_array); 

                            //penerbit array
                            $penerbit_string = $data[0]["organization"];
                            $penerbit_array = explode(',', $penerbit_string); 
                            $penerbit_array = array_map('trim', $penerbit_array); 

                            //negara array
                            $negara_string = $data[0]["country"];
                            $negara_array = explode(',', $negara_string); // Split into individual authors
                            $negara_array = array_map('trim', $negara_array); // Remove extra spaces
                            
                            //kota array
                            $kota_string = isset($data[0]['city']) ? $data[0]['city'] : '-'; 
                            $kota_array = explode(',', $kota_string); // Split into individual authors
                            $kota_array = array_map('trim', $kota_array); // Remove extra spaces

                            //jalur array
                            $penjaluran = isset($data[0]['penjaluran']) ? $data[0]['penjaluran'] : '-'; 
                            $jalur_array = explode(',', $penjaluran); // Split into individual authors
                            $jalur_array = array_map('trim', $jalur_array); // Remove extra spaces
                          ?>
                          <li><strong>Penulis</strong>:
                            <?php
                              $first = true;
                              foreach ($authors_array as $author) {
                                if (!$first) {
                                  echo ', ';
                                }
                                $first = false; 
                                echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?author=". $encoded_author = urlencode($author) . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$author</a>"; 
                              }
                            ?>
                          </li>
                          <li><strong>Penerbit</strong>: 
                            <?php 
                              $second = true;
                              foreach ($penerbit_array as $penerbit) {
                                if (!$second) {
                                  echo ', ';
                                }
                                $second = false; 
                                echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?penerbit=". $encoded_penerbit = urlencode($penerbit) . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$penerbit</a>";
                              } 
                            ?>
                          </li>
                          <li><strong>Tahun Terbit</strong>: 
                            <?php 
                              $tahunTerbit = $data[0]["tahun_terbit"]; 

                              echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?tahun_terbit=". $tahunTerbit . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$tahunTerbit</a>";
                            ?> 
                          </li>
                          <li><strong>ISBN/ISSN</strong>: <?= $data[0]["isbn_issn"] ?></li>
                          <li><strong>Bahasa</strong>: 
                            <?php 
                              $bahasa = $data[0]["bahasa"];

                              echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?bahasa=". $bahasa . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$bahasa</a>";
                            ?>
                          </li>
                          <li><strong>Negara</strong>: 
                            <?php 
                              $third = true;
                              foreach ($negara_array as $negara) {
                                if (!$third) {
                                  echo ', ';
                                }
                                $third = false; 
                                echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?negara=". urlencode($negara) . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$negara</a>";
                              } 
                            ?> 
                          </li>
                          <li><strong>Kota</strong>: 
                            <?php 
                              $forth = true;
                              if($kota_string!='-'){
                                foreach ($kota_array as $city) {
                                  if (!$forth) {
                                    echo ', ';
                                  }
                                  $forth = false; 
                                  echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?kota=". urlencode($city) . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$city</a>";
                                } 
                               
                              } else {
                                echo "-";
                              }

                              
                            ?> 
                          </li>
                          <li><strong>Jumlah Halaman</strong>: <?= $data[0]["jumlah_halaman"] ?> </li>
                          <li><strong>Referensi untuk</strong>: 
                            <?php
                            $fifth = true;
                            if($penjaluran!='-'){
                              foreach ($jalur_array as $penjaluran) {
                                if (!$fifth) {
                                  echo ', ';
                                }
                                $fifth = false; 
                                echo "<a style ='color: #4BA4CD; text-decoration: underline;' href=detail.php?jalur=". urlencode($penjaluran) . "&id=".$_REQUEST['id'] ."&page=".$_REQUEST['page']. ">$penjaluran</a>";
                              }   
                            } else {
                              echo "-";
                            }
                            ?> 
                          </li>

                        </ul>
                      </div>
                      <div class="portfolio-description">
                        <h2 style="color: black;">Sinopsis</h2>
                        <p class="sinopsisDetail">
                            <!-- Shortened text with hidden full text -->
                            <span class="truncated"><?= substr($data[0]["sinopsis"], 0, 500) ?>...</span>
                            <span class="fullText hidden"><?= $data[0]["sinopsis"] ?></span>
                        </p>
                        <!-- Read More link to toggle the full text -->
                        <a href="#" class="readMore" style ='color: #4BA4CD; text-decoration: underline;' onclick="toggleFullText(event, this);">Read More</a>
                      </div>
                    </div>

                  </div>

                </div>
              </section><!-- End Portfolio Details Section -->
            </div>
          </div>
        </div>
      </div>

      <!-- section card-book -->
      <div class="row mt-3" id="card-container">
        <div class="col-12">
          <?php $i = 0;?>
            <?php if (!empty($relasiDetail)): ?>
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                    <h3 style="font-family: 'Jost', sans-serif; font-weight: 600;" class="text-white text-capitalize ps-4">Buku Terkait</h3>
                  </div>
                </div>
                <div class="card-body mx-1 mt-4 row justify-content-sm-center" >
                  <div class="col-lg-12 col-md-6 mb-1">
                    <div class="card">
                      <div class="card-sparql pt-1" style="background-color: #37517E;">
                        <h3 class="text-center" style="color: #fff;" >SPARQL</h3>
                      </div>
                      
                      <hr class="dark horizontal">
                      <div class="d-flex mx-4 my-3">
                        <p class="mb-0 text-sm"> 
                          <?php 
                            if (!empty($relasiDetail)) {
                                echo $printQueryDetail;
                            } else {
                                echo "<p>No data available.</p>";
                            }
                          ?> 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="justify-content-evenly card-body d-flex flex-wrap mt-3">
                  <?php $i = 0;?>
                  <?php foreach ($relasiDetail as $rel) : ?>
                    
                    <div class="card col-lg-3 col-md-6 mb-3 card-book-page mx-2">
                      <div class="z-index-2">
                        <div class="card-book" > 
                          <img src=<?= $rel['foto']?> class="img-card" alt="">
                        </div>
                        <div class="card-body" style="display: flex; flex-direction: column ">
                          <h6 class="mb-0 judul" style="height: 30px; line-height: 1"><?= $rel['judul']?></h6>
                          <p class="text-sm deskripsi fixed-height" id="dynamic-text"><?= $rel['sinopsis']?></p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                            <?php
                              $id = $rel['isbn_issn'];
                              $pagePenjelajahan = $page;
                              echo "<a class='w-100' href=detail.php?id=". $id ."&page=".$pagePenjelajahan. "><button class='mt-3 btn bg-gradient-secondary shadow-card w-100'>DETAIL</button></a>"
                            ?> 
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
                


              </div>
            <?php else: ?>
              <p>No data available.</p>
          <?php endif; ?>
        </div>
        
      </div>
      <!-- end section card-book -->

      <!-- pagination section -->
      <?php if (!empty($relasiDetail)): ?>
        <div class="pagination ms-5" id="pagination" style="">
          <button class="btn bg-primary shadow-card w-20" id="prev">Prev</button>
          <button class="btn bg-primary shadow-card w-20 me-6" id="next">Next</button>
        </div>
      <?php endif; ?>
      <!--end of pagination section -->

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
  <script src="../assets/js/plugins/world.js"></script>
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
    // Function to toggle the visibility of full text
    function toggleFullText(event, element) {
        event.preventDefault(); // Prevent default link behavior

        // Get the parent element containing the text
        const parent = element.closest('.portfolio-description');

        // Find the full text and truncated text spans
        const fullText = parent.querySelector('.fullText');
        const truncatedText = parent.querySelector('.truncated');

        if (fullText.classList.contains('hidden')) {
            // If the full text is hidden, show it and hide the truncated text
            fullText.classList.remove('hidden');
            truncatedText.classList.add('hidden');
            element.textContent = "Read Less"; // Change the link text
        } else {
            // If the full text is visible, hide it and show the truncated text
            fullText.classList.add('hidden');
            truncatedText.classList.remove('hidden');
            element.textContent = "Read More"; // Change the link text
        }
    }

  </script>
</body>

</html>
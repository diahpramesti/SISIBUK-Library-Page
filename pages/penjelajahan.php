<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'penjelajahan-query.php';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logos/logo-sisibuk.png">
  <link rel="icon" type="image/png" href="../assets/img/logos/logo-sisibuk.png">
  <title>
    SISIBUK | PENJELAJAHAN
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
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/style-custom-select.css">
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="../assets/js/select-bar.js"></script>
  
</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- SIDENAV SECTION -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header mb-4">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php" target="_blank" style="text-align: center;">
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
          <?php
            $pageLanding = 2;

            // Menggunakan string interpolasi tanpa tambahan tanda petik
            echo '<a class="nav-link text-white" href="../pages/dashboard.php?page=' . $pageLanding . '">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>';
          ?>
          
        </li>
        <li class="nav-item">
          <?php
            $pageLanding = 2;

            // Menggunakan string interpolasi tanpa tambahan tanda petik
            echo '<a class="nav-link text-white active bg-gradient-primary" href="../pages/penjelajahan.php?page=' . $pageLanding . '">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">travel_explore</i>
                </div>
                <span class="nav-link-text ms-1">Penjelajahan</span>
              </a>';
          ?>
        </li>
        <li class="nav-item">
          <?php
            $pageLanding = 2;

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
        <a class="btn bg-gradient-primary w-100" href="../index.php" type="button">Back to Landing Page</a>
      </div>
    </div>
  </aside>
  <!-- END OF SIDENAV SECTION -->

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
                  } else if ($page==4) {
                    echo $landingData['navBar'];
                  }
                ?>
              </a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Penjelajahan</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Penjelajahan</h6>
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
              <h1>Fitur Penjelajahan</h1>
              <p>Jelajahi buku-buku yang kamu inginkan melalui beberapa kategori berikut ini!</p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200" style="text-align: center;">
              <img src="../assets/img/illustrations/penjelajahan-1.svg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- End Hero -->
                  
      <!-- Penjelajahan Section -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h4 class="text-white text-capitalize ps-3">Fitur Penjelajahan</h4>
              </div>
            </div>
            <div class="card-body mx-1 mt-4 row position-relative" >
              <div class="col-lg-6 col-md-6 mb-4">
                <h4 class="text-center pt-1">Cari Berdasarkan Kategori</h4>

                <form action="" method="post">
                  <div class="custom-dropdown mb-2" style="flex-wrap: wrap; background-color: #99999">
                      <select class="form-control" id="kategori" name="kategori" onchange="showSubKategoriDropdown()">
                          <option value="">Pilih Kategori</option>
                          <option value="asal_negara">Negara</option>
                          <option value="asal_kota">Kota</option>
                          <option value="tahun">Tahun</option>
                          <option value="jalur">Jalur</option>
                          <option value="bahasa">Bahasa</option>
                      </select>
                      
                  </div>
                  <!-- PR BUAT COPY SEMUA DATA asal_negara, asal_kota -->
                  <div class="custom-dropdown select-wrapper" style="flex-wrap: wrap; display: none;" id="asal_negara">
                      <select class="form-control" name="asal_negara">
                          <option value="">Pilih Negara</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Asia') ? 'selected' : '' ?> value="Asia">Asia</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Canada') ? 'selected' : '' ?> value="Canada">Canada</option>
                          <option <?= (isset($_POST['asal_negara']) === 'India') ? 'selected' : '' ?> value="India">India</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Indiana') ? 'selected' : '' ?> value="Indiana">Indiana</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Indonesia') ? 'selected' : '' ?> value="Indonesia">Indonesia</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Massachusetts') ? 'selected' : '' ?> value="Massachusetts">Massachusetts</option>
                          <option <?= (isset($_POST['asal_negara']) === 'New_Jersey') ? 'selected' : '' ?> value="New_Jersey">New Jersey</option>
                          <option <?= (isset($_POST['asal_negara']) === 'New_York') ? 'selected' : '' ?> value="New_York">New York</option>
                          <option <?= (isset($_POST['asal_negara']) === 'Singapore') ? 'selected' : '' ?> value="Singapore">Singapore</option>
                          <option <?= (isset($_POST['asal_negara']) === 'UK') ? 'selected' : '' ?> value="UK">UK</option>
                          <option <?= (isset($_POST['asal_negara']) === 'USA') ? 'selected' : '' ?> value="USA">USA</option>
                      </select>
                  </div>

                  <div class="custom-dropdown select-wrapper" style="flex-wrap: wrap; display: none;" id="asal_kota">
                      <select class="form-control" name="asal_kota">
                          <option value="">Pilih Kota</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Avenue_of_The_Americas') ? 'selected' : '' ?> value="Avenue_of_The_Americas">Avenue of The Americas</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Boston') ? 'selected' : '' ?> value="Boston">Boston</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Burlington') ? 'selected' : '' ?> value="Burlington">Burlington</option>
                          <option <?= (isset($_POST['asal_kota']) === 'California') ? 'selected' : '' ?> value="California">California</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Danver') ? 'selected' : '' ?> value="Danver">Danver</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Depok') ? 'selected' : '' ?> value="Depok">Depok</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Englewood_Cliffs') ? 'selected' : '' ?> value="Englewood_Cliffs">Englewood Cliffs</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Hoboken') ? 'selected' : '' ?> value="Hoboken">Hoboken</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Indianapolis') ? 'selected' : '' ?> value="Indianapolis">Indianapolis</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Jakarta') ? 'selected' : '' ?> value="Jakarta">Jakarta</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Jersey') ? 'selected' : '' ?> value="Jersey">Jersey</option>
                          <option <?= (isset($_POST['asal_kota']) === 'London') ? 'selected' : '' ?> value="London">London</option>
                          <option <?= (isset($_POST['asal_kota']) === 'New_Delhi') ? 'selected' : '' ?> value="New_Delhi">New Delhi</option>
                          <option <?= (isset($_POST['asal_kota']) === 'New_York_City') ? 'selected' : '' ?> value="New_York_City">New York City</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Seattle') ? 'selected' : '' ?> value="Seattle">Seattle</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Sebastopol') ? 'selected' : '' ?> value="Sebastopol">Sebastopol</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Upper_Saddle_River') ? 'selected' : '' ?> value="Upper_Saddle_River">Upper Saddle River</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Waltham') ? 'selected' : '' ?> value="Waltham">Walthamy</option>
                          <option <?= (isset($_POST['asal_kota']) === 'Yogyakarta') ? 'selected' : '' ?> value="Yogyakarta">Yogyakarta</option>
                      </select>
                  </div>

                  <div class="custom-dropdown" style="flex-wrap: wrap; display: none;" id="tahun">
                      <select class="form-control" name="tahun">
                          <option value="">Pilih tahun</option>
                          <option <?= (isset($_POST['tahun']) === '1981-1990') ? 'selected' : '' ?> value="1981-1990">1981-1990</option>
                          <option <?= (isset($_POST['tahun']) === '1991-2000') ? 'selected' : '' ?> value="1991-2000">1991-2000</option>
                          <option <?= (isset($_POST['tahun']) === '2001-2010') ? 'selected' : '' ?> value="2001-2010">2001-2010</option>
                          <option <?= (isset($_POST['tahun']) === '2011-2020') ? 'selected' : '' ?> value="2011-2020">2011-2020</option>
                      </select>
                  </div>
               
                  <div class="custom-dropdown" style="flex-wrap: wrap; display: none;" id="jalur">
                      <select class="form-control" name="jalur">
                          <option value="">Pilih Jalur</option>
                          <option <?= (isset($_POST['jalur']) === 'J1') ? 'selected' : '' ?> value="J1">J1</option>
                          <option <?= (isset($_POST['jalur']) === 'J2') ? 'selected' : '' ?> value="J2">J2</option>
                          <option <?= (isset($_POST['jalur']) === 'J3') ? 'selected' : '' ?> value="J3">J3</option>
                          <option <?= (isset($_POST['jalur']) === 'J4') ? 'selected' : '' ?> value="J4">J4</option>
                          <option <?= (isset($_POST['jalur']) === 'J5') ? 'selected' : '' ?> value="J5">J5</option>
                          <option <?= (isset($_POST['jalur']) === 'J6') ? 'selected' : '' ?> value="J6">J6</option>
                          <option <?= (isset($_POST['jalur']) === 'J7') ? 'selected' : '' ?> value="J7">J7</option>
                          <option <?= (isset($_POST['jalur']) === 'J8') ? 'selected' : '' ?> value="J8">J8</option>
                          <option <?= (isset($_POST['jalur']) === 'J9') ? 'selected' : '' ?> value="J9">J9</option>
                          <option <?= (isset($_POST['jalur']) === 'Wajib') ? 'selected' : '' ?> value="Wajib">Wajib</option>
                          <option <?= (isset($_POST['jalur']) === 'Umum') ? 'selected' : '' ?> value="Umum">Umum</option>
                      </select>
                  </div>

                  <div class="custom-dropdown" style="flex-wrap: wrap; display: none;" id="bahasa">
                      <select class="form-control" name="bahasa">
                          <option value="">Pilih Bahasa</option>
                          <option <?= (isset($_POST['bahasa']) === 'English') ? 'selected' : '' ?> value="English">English</option>
                          <option <?= (isset($_POST['bahasa']) === 'Indonesia') ? 'selected' : '' ?> value="Indonesia">Indonesia</option>
                      </select>
                  </div>

                  <div class="row mt-3 pb-3">
                      <div class="col-sm">
                          <button type="submit" class="btn btn-success">Cari</button>
                          <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                  </div>
                </form>
                
              </div>
              <div class="col-lg-6 col-md-6 mb-1">
                <div class="card">
                  <div class="card-sparql pt-1" style="background-color: #37517E;">
                    <h3 class="text-center" style="color: #fff;" >SPARQL</h3>
                  </div>
                  
                  <hr class="dark horizontal">
                  <div class="d-flex mx-4 my-3">
                    <p class="mb-0 text-sm"> 
                      <?php 
                        if (!empty($_POST['asal_negara']) || !empty($_POST['asal_kota']) || !empty($_POST['tahun']) || !empty($_POST['bahasa']) || !empty($_POST['jalur'])) {
                            echo $printQuery;
                        } else {
                            echo "<p>No data available. Please input the form first.</p>";
                        }
                      ?> 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Of Penjelajahan Section -->

      
      

      <!-- section card-book -->
      <div class="row " id="card-container">
        <div class="col-12">
          <?php $i = 0;?>
            <?php if (!empty($data)): ?>
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                    <h4 style="" class="text-white text-capitalize ps-4">Hasil Penjelajahan</h4>
                  </div>
                </div>
                <div class="justify-content-evenly card-body d-flex flex-wrap mt-3">
                
                  <?php $i = 0;?>
                  <?php foreach ($data as $dat) : ?>
                    
                    <div class="card col-lg-3 col-md-6 mb-3 card-book-page mx-2">
                      <div class="z-index-2">
                        <div class="card-book" > 
                          <img src=<?= $dat['foto']?> class="img-card" alt="">
                        </div>
                        <div class="card-body" style="display: flex; flex-direction: column ">
                          <h6 class="mb-0 judul" style="height: 30px; line-height: 1"><?= $dat['judul']?></h6>
                          <p class="text-sm deskripsi fixed-height" id="dynamic-text"><?= $dat['sinopsis']?></p>
                          <hr class="dark horizontal">
                          <div class="d-flex ">
                            <?php
                              $id = $dat['isbn_issn'];
                              $pagePenjelajahan = 2;
                              echo "<a class='w-100' href=detail.php?id=". $id ."&page=".$pagePenjelajahan. "><button class='mt-3 btn bg-gradient-secondary shadow-card w-100'>DETAIL</button></a>"
                            ?> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                  
                </div>
                <div class="h4 justify-content-evenly d-flex flex-wrap mb-3">Jumlah Buku Hasil Penjelajahan: <?= $i ?></div>
              </div>
            <?php else: ?>
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                    <h4 class="text-white text-capitalize ps-4">Hasil Penjelajahan</h4>
                  </div>
                </div>
                <div class="card-body">
                  <p class="mt-3">No Book</p>
                </div>
              </div>
          <?php endif; ?>
        </div>
        
      </div>
      <!-- end section card-book -->
      
      <!-- pagination section -->
      <?php if (!empty($data)): ?>
        <div class="pagination ms-5" id="pagination" style="">
          <button class="btn bg-primary shadow-card w-20" id="prev">Prev</button>
          <button class="btn bg-primary shadow-card w-20 me-6" id="next">Next</button>
        </div>
      <?php endif; ?>
      <!--end of pagination section -->

      <!-- footer section -->
      <footer class="footer py-4">
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
    function toggleDropdown() {
      document.getElementById("dropdownOptions").classList.toggle("show");
    }
    
    function selectOption(option) {
      document.getElementById("myDropdown").getElementsByTagName("button")[0].innerHTML = option;
      document.getElementById("dropdownOptions").classList.remove("show");
    }
    
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("custom-dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
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
    // scroll option
    document.addEventListener("DOMContentLoaded", function() {
      var selectOptions = document.getElementById("selectOptions");
      var optionCount = 50; // Jumlah opsi yang diinginkan

      // Tambahkan opsi ke dalam dropdown
      // for (var i = 1; i <= optionCount; i++) {
      //   var option = document.createElement("option");
      //   option.text = "Option " + i;
      //   selectOptions.add(option);
      // }

      var dropdownBtn = document.querySelector(".dropdown-btn");
      var dropdownContent = document.querySelector(".dropdown-content");

      dropdownBtn.addEventListener("click", function() {
        dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
      });

      // Sembunyikan dropdown ketika klik di luar dropdown
      window.addEventListener("click", function(event) {
        if (!dropdownBtn.contains(event.target)) {
          dropdownContent.style.display = "none";
        }
      });
    });
  </script>
  <script>
    function showSubKategoriDropdown() {
      var kategoriDropdown = document.getElementById("kategori");
      var subKategoriTahun = document.getElementById("tahun");
      var subKategoriJalur = document.getElementById("jalur");
      var subKategoriNegara = document.getElementById("asal_negara");
      var subKategoriKota = document.getElementById("asal_kota");
      var subKategoriBahasa = document.getElementById("bahasa");

      if(kategoriDropdown.value === "tahun") {
        subKategoriTahun.style.display = "block";
        subKategoriJalur.style.display = "none";
        subKategoriNegara.style.display = "none";
        subKategoriBahasa.style.display = "none";
        subKategoriKota.style.display ="none";
        // subKategoriJalur.value = "";
        // subKategoriNegara.value = "";
      }else if (kategoriDropdown.value === "jalur") {
        subKategoriTahun.style.display = "none"; // Hide the tahun dropdown
        subKategoriJalur.style.display = "block"; // Show the penulis dropdown
        subKategoriNegara.style.display = "none";
        subKategoriBahasa.style.display = "none";
        subKategoriKota.style.display ="none";
        // subKategoriTahun.value = "";
        // subKategoriNegara.value = "";
      } else if (kategoriDropdown.value === "asal_negara") {
        subKategoriTahun.style.display = "none"
        subKategoriJalur.style.display = "none";
        subKategoriNegara.style.display = "block";
        subKategoriBahasa.style.display = "none";
        subKategoriKota.style.display ="none";
        // subKategoriJalur.value = "";
        // subKategoriTahun.value = "";
      } else if (kategoriDropdown.value === "bahasa") {
        subKategoriTahun.style.display = "none"
        subKategoriJalur.style.display = "none";
        subKategoriNegara.style.display = "none";
        subKategoriBahasa.style.display = "block";
        subKategoriKota.style.display ="none";
        // subKategoriJalur.value = "";
        // subKategoriTahun.value = "";
      } else if (kategoriDropdown.value === "asal_kota") {
        subKategoriTahun.style.display = "none"
        subKategoriJalur.style.display = "none";
        subKategoriNegara.style.display = "none";
        subKategoriBahasa.style.display = "none";
        subKategoriKota.style.display ="block";
        // subKategoriJalur.value = "";
        // subKategoriTahun.value = "";
      } else {
        subKategoriTahun.style.display = "none"; // Hide the tahun dropdown
        subKategoriJalur.style.display = "none"; // Hide the penulis dropdown
        subKategoriNegara.style.display = "none";
        subKategoriBahasa.style.display = "none";
        // Reset the value of the subKategori dropdown
        // subKategoriTahun.value = ""; // Reset tahun dropdown
        // subKategoriJalur.value = ""; // Reset penulis dropdown
        // subKategoriNegara.value = "";
      }

      
    }
  </script>
</body>

</html>
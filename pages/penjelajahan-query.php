<?php
  require_once("../sparqllib.php");

  if (!empty($_POST['asal_negara']) || !empty($_POST['asal_kota']) || !empty($_POST['tahun']) || !empty($_POST['bahasa']) || !empty($_POST['jalur']) || !empty($_POST['judul'])|| !empty($_POST['sinopsis'])) {
    // Init query
    $prefix = "
    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
    PREFIX owl: <http://www.w3.org/2002/07/owl#>
    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
    PREFIX :<http://www.semanticweb.org/asus/ontologies/2024/0/IFBookCollection#>";

    $querySearch = "
      SELECT ?foto ?judul ?sinopsis ?tahun_terbit ?bahasa ?isbn_issn
      WHERE { 
        ?Buku rdf:type :Buku .
      ";

    if (isset($_POST['asal_negara']) && $_POST['asal_negara'] !== '') {
      $querySearch .= "?Buku :asal_negara :" . $_POST['asal_negara'] . " . ";
    }
    
    if (isset($_POST['tahun']) && $_POST['tahun'] !== '') {
      $querySearch .= "?Buku :dirilis_tahun :" . $_POST['tahun'] . " . ";
    }

    if (isset($_POST['asal_kota']) && $_POST['asal_kota'] !== '') {
      $querySearch .= "?Buku :asal_kota :" . $_POST['asal_kota'] . " . ";
    }

    if (isset($_POST['bahasa']) && $_POST['bahasa'] !== '') {
      $querySearch .= "?Buku :bahasa '" . $_POST['bahasa'] . "' . ";
    }

    if (isset($_POST['jalur']) && $_POST['jalur'] !== '') {
      $querySearch .= "
        ?Buku :referensi_untuk ?Jalur.
        ?Jalur :nama_jalur '" . $_POST['jalur'] . "' . "
      ;
    }

    //asal_kota, ditulis_oleh, diterbitkan_oleh, bahasa, jalur

    $querySearch .= "?Buku :isbn_issn ?isbn_issn . ?Buku :foto ?foto . ?Buku :judul ?judul . ?Buku :sinopsis ?sinopsis . ?Buku :tahun_terbit ?tahun_terbit. ";

    if (isset($_POST['judul']) && $_POST['judul'] !== '') {
      $querySearch .= "FILTER(CONTAINS(?judul, '" . $_POST['judul'] . "')) . ";
    }
    
    if (isset($_POST['sinopsis']) && $_POST['sinopsis'] !== '') {
      $querySearch .= "FILTER(CONTAINS(?sinopsis, '" . $_POST['sinopsis'] . "')) . ";
    }

    $querySearch .= "} ORDER BY ASC(?judul)";


    $printQuery = $querySearch;
    
    $query = $prefix . $querySearch;

    $data = sparql_get("http://localhost:3030/#/dataset/IFBookCollection", $query);

  } else {
    $printQuery = '';
  }
?>
<?php
  require_once("../sparqllib.php");

  if (isset($_REQUEST['id'])) {
    $buku =[];

    // Init query
    $prefix = "
    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
    PREFIX owl: <http://www.w3.org/2002/07/owl#>
    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
    PREFIX :<http://www.semanticweb.org/asus/ontologies/2024/0/IFBookCollection#>";

    $querySearch = "
    SELECT 
      ?isbn_issn 
      ?foto 
      ?judul 
      ?authors 
      ?organization
      ?tahun_terbit 
      ?bahasa 
      ?country
      ?city
      ?jumlah_halaman 
      ?sinopsis 
      ?penjaluran 
    WHERE { 
      ?Buku rdf:type :Buku .
      ?Buku :isbn_issn '".$_REQUEST['id']."' .
      ?Buku :foto ?foto .
      ?Buku :judul ?judul .
      ?Buku :tahun_terbit ?tahun_terbit .
      ?Buku :bahasa ?bahasa .
      ?Buku :sinopsis ?sinopsis .
      ?Buku :jumlah_halaman ?jumlah_halaman .


    {
      SELECT 
          ?isbn_issn
          (GROUP_CONCAT(DISTINCT ?nama_jalur; SEPARATOR=', ') AS ?penjaluran)
      WHERE {
        ?Buku :isbn_issn '".$_REQUEST['id']."' .
        OPTIONAL {
          ?Buku :referensi_untuk ?Jalur . 
          ?Jalur :nama_jalur ?nama_jalur .
        }
      }
      GROUP BY ?isbn_issn
    }
    

    {
      SELECT 
          ?isbn_issn
          (GROUP_CONCAT(DISTINCT ?nama_orang; SEPARATOR=', ') AS ?authors)
      WHERE {
        ?Buku :isbn_issn '".$_REQUEST['id']."' .
        ?Buku :ditulis_oleh ?Orang .
        ?Orang :nama_orang ?nama_orang .
      }
      GROUP BY ?isbn_issn
    }
  

    {
      SELECT 
          ?isbn_issn
          (GROUP_CONCAT(DISTINCT ?nama_organisasi; SEPARATOR=', ') AS ?organization)
      WHERE {
        ?Buku :isbn_issn '".$_REQUEST['id']."' .
        ?Buku :diterbitkan_oleh ?Organisasi .
        ?Organisasi :nama_organisasi ?nama_organisasi .
      }
      GROUP BY ?isbn_issn
    }
    

    {
      SELECT 
          ?isbn_issn
          (GROUP_CONCAT(DISTINCT ?nama_kota; SEPARATOR=', ') AS ?city)
      WHERE {
        ?Buku :isbn_issn '".$_REQUEST['id']."' .
        OPTIONAL {
          ?Buku :asal_kota ?Kota .
          ?Kota :nama_kota ?nama_kota .
        }
      }
      GROUP BY ?isbn_issn
    }
  

    {
      SELECT 
          ?isbn_issn
          (GROUP_CONCAT(DISTINCT ?nama_negara; SEPARATOR=', ') AS ?country)
      WHERE {
        ?Buku :isbn_issn '".$_REQUEST['id']."' .
        OPTIONAL {
          ?Buku :asal_negara ?Negara .
          ?Negara :nama_negara ?nama_negara .
        }
      }
      GROUP BY ?isbn_issn
    }
    
    

    ?Buku :isbn_issn ?isbn_issn .
  }
  
  ORDER BY ASC(?judul)
  
  
  ";


    $printQuery = $querySearch;
    
    $query = $prefix . $querySearch;

    $data = sparql_get("http://localhost:3030/#/dataset/IFBookCollection", $query);

    // print($printQuery);
  } else {
    $printQuery = '';
    // echo "No query parameters provided.";
  }

  if (isset($_REQUEST['author']) || isset($_REQUEST['penerbit']) || isset($_REQUEST['tahun_terbit']) || isset($_REQUEST['bahasa']) || isset($_REQUEST['negara']) || isset($_REQUEST['kota']) || isset($_REQUEST['jalur'])) {

    // Init query
    $prefixDetail = "
    PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
    PREFIX owl: <http://www.w3.org/2002/07/owl#>
    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
    PREFIX :<http://www.semanticweb.org/asus/ontologies/2024/0/IFBookCollection#>";

    $querySearchDetail = "
    SELECT 
      ?isbn_issn 
      ?foto 
      ?judul
      ?authors 
      ?organization
      ?tahun_terbit 
      ?bahasa
      ?country
      ?city
      ?jumlah_halaman
      ?sinopsis 
      ?penjaluran
    WHERE { 
      ?Buku rdf:type :Buku .
      ?Buku :isbn_issn ?isbn_issn .
      ?Buku :foto ?foto .
      ?Buku :judul ?judul .
      ";
    
    //CHECK JALUR
    //belom diubah
    if (isset($_REQUEST['jalur']) && $_REQUEST['jalur'] !== '') {
      $nama_jalur = urldecode($_REQUEST['jalur']);
      $querySearchDetail .= "
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_jalur; SEPARATOR=', ') AS ?penjaluran)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
            ?Buku :referensi_untuk ?Jalur . 
            ?Jalur :nama_jalur '".$_REQUEST['jalur']."' .
        }
        GROUP BY ?isbn_issn
      } 
      ";
    } else {
      $querySearchDetail .= '
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_jalur; SEPARATOR=", ") AS ?penjaluran)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          ?Buku :referensi_untuk ?Jalur . 
          ?Jalur :nama_jalur ?nama_jalur .

        }
        GROUP BY ?isbn_issn
      }  


      ';
    }


    //CHECK AUTHOR
    if (isset($_REQUEST['author']) && $_REQUEST['author'] !== '') {
      $author_name = urldecode($_REQUEST['author']);
      $querySearchDetail .= "
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_orang; SEPARATOR=', ') AS ?authors)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn.
          ?Buku :ditulis_oleh ?Orang .
          ?Orang :nama_orang '".$author_name."'.
        }
        GROUP BY ?isbn_issn
      }
      ";
    } else {
      $querySearchDetail .= '
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_orang; SEPARATOR=", ") AS ?authors)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn.
          ?Buku :ditulis_oleh ?Orang .
          ?Orang :nama_orang ?nama_orang .
        }
        GROUP BY ?isbn_issn
      }
      ';
    }

    //CHECK PENERBIT 
    if (isset($_REQUEST['penerbit']) && $_REQUEST['penerbit'] !== '') {
      $penerbit_name = urldecode($_REQUEST['penerbit']);
      $querySearchDetail .= "
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_organisasi; SEPARATOR=', ') AS ?organization)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          ?Buku :diterbitkan_oleh ?Organisasi .
          ?Organisasi :nama_organisasi '" .$penerbit_name. "' .
        }
        GROUP BY ?isbn_issn
      }
      ";
    } else {
      $querySearchDetail .= '
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_organisasi; SEPARATOR=", ") AS ?organization)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          ?Buku :diterbitkan_oleh ?Organisasi .
          ?Organisasi :nama_organisasi ?nama_organisasi .
        }
        GROUP BY ?isbn_issn
      }
      ';
    }

    //CHECK TAHUN TERBIT 
    if (isset($_REQUEST['tahun_terbit']) && $_REQUEST['tahun_terbit'] !== '') {
      $querySearchDetail .= "
        ?Buku :tahun_terbit '".$_REQUEST['tahun_terbit']."'.
      ";
    } else {
      $querySearchDetail .= '
        ?Buku :tahun_terbit ?tahun_terbit .
      ';
    }

    //CHECK BAHASA  
    if (isset($_REQUEST['bahasa']) && $_REQUEST['bahasa'] !== '') {
      $querySearchDetail .= "
        ?Buku :bahasa '".$_REQUEST['bahasa']."'.
      ";
    } else {
      $querySearchDetail .= '
        ?Buku :bahasa ?bahasa .
      ';
    }

    //CHECK NEGARA  
    if (isset($_REQUEST['negara']) && $_REQUEST['negara'] !== '') {
      $nama_negara = urldecode($_REQUEST['negara']);
      $querySearchDetail .= "

      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_negara; SEPARATOR=', ') AS ?country)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          
          ?Buku :asal_negara ?Negara .
          ?Negara :nama_negara '".$nama_negara."' .
          
        }
        GROUP BY ?isbn_issn
      }
      ";
    } else {
      $querySearchDetail .= '
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_negara; SEPARATOR=", ") AS ?country)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          OPTIONAL {
            ?Buku :asal_negara ?Negara .
            ?Negara :nama_negara ?nama_negara .
          }
        }
        GROUP BY ?isbn_issn
      }
      ';
    }


     //CHECK KOTA  
     if (isset($_REQUEST['kota']) && $_REQUEST['kota'] !== '') {
      $nama_kota = urldecode($_REQUEST['kota']);
      $querySearchDetail .= "
      
      {
        SELECT 
            ?isbn_issn
            (GROUP_CONCAT(DISTINCT ?nama_kota; SEPARATOR=', ') AS ?city)
        WHERE {
          ?Buku :isbn_issn ?isbn_issn .
          
            ?Buku :asal_kota ?Kota .
            ?Kota :nama_kota '".$nama_kota."' .
          
        }
        GROUP BY ?isbn_issn
      }
      ";
    } else {
      $querySearchDetail .= '
        
        {
          SELECT 
              ?isbn_issn
              (GROUP_CONCAT(DISTINCT ?nama_kota; SEPARATOR=", ") AS ?city)
          WHERE {
            ?Buku :isbn_issn ?isbn_issn .
            OPTIONAL {
              ?Buku :asal_kota ?Kota .
              ?Kota :nama_kota ?nama_kota .
            }
          }
          GROUP BY ?isbn_issn
        }
      ';
    }

    
    $querySearchDetail .="
      ?Buku :sinopsis ?sinopsis .
      ?Buku :jumlah_halaman ?jumlah_halaman .
      ?Buku :isbn_issn ?isbn_issn .
    } 
    
    
    
    ORDER BY ASC(?judul)
    ";


    $printQueryDetail = $querySearchDetail;
    
    $queryDetail = $prefixDetail . $querySearchDetail;

    $relasiDetail = sparql_get("http://skripsi-diah.deveureka.com:3030/IFBookCollection",$queryDetail);
    
  } else {
    $printQueryDetail = '';
    // echo "No query parameters provided.";
  }
?>
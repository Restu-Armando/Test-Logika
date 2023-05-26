<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal 2</title>
  </head>
  <body>
    <?php 
    
    function cariKata($teks, $kata) {
      // Mengubah kata menjadi lowercase untuk pencarian yang case-insensitive
      $kata = strtolower($kata);
  
      // Mencari kemunculan kata dalam teks
      $pos = stripos(strtolower($teks), $kata);
      $hasil = '';
  
      while ($pos !== false) {
          // Menambahkan kata yang ditemukan ke hasil
          $hasil .= substr($teks, $pos, strlen($kata)) . ' - ';
  
          // Menggeser posisi pencarian
          $pos = stripos(strtolower($teks), $kata, $pos + 1);
      }
  
      // Menghapus tanda pemisah terakhir ("-") jika ada
      if (!empty($hasil)) {
          $hasil = rtrim($hasil, ' -');
      }
  
      return $hasil;
  }
  
  // Masukan teks dan kata-kata yang dicari
  $teks = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.";
  $kata1 = "sang gajah";
  $kata2 = "serigala";
  $kata3 = "harimau";
  
  // Mencari kata-kata dalam teks
  $output1 = cariKata($teks, $kata1);
  $output2 = cariKata($teks, $kata2);
  $output3 = cariKata($teks, $kata3);

    ?>

<h1>Mencari Kata sang gajah, serigala dan harimau</h1>
<p>Input: <?php echo $teks; ?></p>
    <p>Output: <?php echo $output1; ?> - <?php echo $output2; ?> - <?php echo $output3; ?></p>

  </body>
</html>

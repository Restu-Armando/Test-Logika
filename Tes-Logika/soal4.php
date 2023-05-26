<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal 4</title>
  </head>
  <body>
  <?php
function findMissingNumber($arr) {
  // Menentukan angka terkecil dan terbesar dalam array
  $min = min($arr);
  $max = max($arr);

  // Looping dari angka terkecil hingga angka terbesar
  for ($i = $min; $i <= $max; $i++) {
    // Cek apakah angka tidak ada dalam array
    if (!in_array($i, $arr)) {
      return $i; // Mengembalikan angka yang tidak ada dalam array
    }
  }

  return null; // Mengembalikan null jika tidak ada angka yang tidak ada dalam array
}

// Contoh penggunaan
$array = [5, 2, 8, 4, 3, 10];
// $array = [2, 3, 4, 6];

// $array = [8, 6, 7, 12];

$missingNumber = findMissingNumber($array);

if ($missingNumber !== null) {
  echo $missingNumber;
} else {
  echo "Tidak ada angka terkecil yang tidak ada dalam array.";
}


?>


  </body>
</html>

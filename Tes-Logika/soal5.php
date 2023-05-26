<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal 5</title>
  </head>
  <body>
  <?php

function generateMatrix($sides)
{
    $matrix = array();

    for ($i = 0; $i < $sides; $i++) {
        $row = array();
        for ($j = 0; $j < $sides; $j++) {
            if ($i + $j == $sides - 1 || $i == 0 || $i == $sides - 1 || $j == 0 || $j == $sides - 1) {
                $row[] = "X";
            } else {
                $row[] = "O";
            }
        }
        $matrix[] = $row;
    }

    return $matrix;
}

function printMatrix($matrix)
{
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            echo $element . " ";
        }
        echo "<br>";
    }
}

// Input jumlah sisi
// $sides = 2;
// $sides = 3;
// $sides = 5;
$sides = 7;

// Memeriksa apakah bilangan ganjil
if ($sides % 2 == 0) {
    echo "Harus bilangan ganjil <br>";
} else {
    // Membuat matriks
    $matrix = generateMatrix($sides);

    // Menampilkan matriks
    printMatrix($matrix);
}

?>
  </body>
</html>

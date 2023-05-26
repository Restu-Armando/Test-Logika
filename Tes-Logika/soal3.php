<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal 3</title>
  </head>
  <body>
    <?php 
    
    function checkKataSandi($kataSandi) {
      // Mengecek panjang dari kata sandi
      $panjangKata = strlen($kataSandi);
      if ($panjangKata < 8 || $panjangKata > 32) {
          return ' Output : Kata sandi harus memiliki 8-32 karakter';
      }
      
      // Mengecek Kata Sandi karakter awal memiliki angka
      if (is_numeric($kataSandi[0])) {
          return ' Output : Karakter awal tidak boleh angka';
      }
      
      // Mengecek Kata sandi Harus Memeiliki Angka
      if (!preg_match('/\d/', $kataSandi)) {
          return ' Output : Harus memiliki angka';
      }
      
      // Mengecek Kata Sandi Harus memiliki huruf kapital dan huruf kecil
      if (!preg_match('/[A-Z]/', $kataSandi) || !preg_match('/[a-z]/', $kataSandi)) {
          return ' Output : Harus memiliki huruf kapital dan huruf kecil';
      }
      
      return ' Output : Kata sandi valid';
  }
  

  if (isset($_POST['kata_sandi'])) {
    $input = $_POST['kata_sandi'];
    $output = checkKataSandi($input);
}

  // Hasil Keluaran
  // echo "Input : 5andiwara <br>";
  // $katasandi1 = '5andiwara';
  // echo checkKataSandi($katasandi1);
  // echo "<br><br>";
  
  // echo "Input : sandiwar4 <br>";
  // $katasandi2 = 'sandiwar4';
  // echo checkKataSandi($katasandi2);  
  // echo "<br><br>";
  
  // echo "Input : Sandiwar4 <br>";
  // $katasandi3 = 'Sandiwar4';
  // echo checkKataSandi($katasandi3);  
  // echo "<br><br>";
   
    ?>
  <h1>Pengecekan Kata Sandi</h1>
    <form method="post" action="">
        <label for="kata_sandi">Kata Sandi:</label>
        <input type="text" id="kata_sandi" name="kata_sandi" required>
        <button type="submit">Cek Kata Sandi</button>
    </form>
    <br>
    <?php if (isset($output)): ?>
        <p><?php echo $output; ?></p>
    <?php endif; ?>
  </body>
</html>

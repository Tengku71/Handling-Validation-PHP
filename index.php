<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Pertemuan 9</title>
  <style>
    .error{
      color: red;
    }
  </style>
</head>
<body>
<?php
    $nim=$nama=$alamat=$email=$no_hp=$prodi="";
    $nimErr=$namaErr=$alamatErr=$emailErr=$no_hpErr=$prodiErr="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nim"])) {
        $nimErr = "Nim Tidak Boleh Kosong";
      } else {
        $nim = test_input($_POST["nama"]);
      }
      if (empty($_POST["nama"])) {
        $namaErr = "Nama Tidak Boleh Kosong";
      } else {
        $nama = test_input($_POST["nama"]);
      }        
      if (empty($_POST["alamat"])) {
        $alamatErr = "Alamat Tidak Boleh Kosong";
      } else {
        $alamat = test_input($_POST["alamat"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email Tidak Boleh Kosong";
      } else {
        $email = test_input($_POST["email"]);
      }
      if (empty($_POST["no_hp"])) {
        $no_hpErr = "Nomor HP Tidak Boleh Kosong";
      } else {
        $no_hp = test_input($_POST["email"]);
      }
      if (empty($_POST["prodi"])) {
        $prodiErr = "Prodi Tidak Boleh Kosong";
      } else {
        $prodi = test_input($_POST["email"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <h2>Form HTML dan Form Handling PHP</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    NIM : <input type="text" name="nim"><span class="error"> * <?php echo $nimErr;?></span><br><br>
    Nama : <input type="text" name="nama"><span class="error"> * <?php echo $namaErr;?></span><br><br>
    Alamat : <input type="text" name="alamat"><span class="error"> * <?php echo $alamatErr;?></span><br><br>
    Email : <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span><br><br>    
    Nomor HP : <input type="text" name="no_hp"><span class="error"> * <?php echo $no_hpErr;?></span><br><br>
    Prodi : <input type="text" name="prodi"><span class="error"> * <?php echo $prodiErr;?></span><br><br>
    <button>Submit</button><br><br>
  </form>
      
  <?php
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Nomor HP : " . $no_hp . "<br>";
    echo "Prodi : " . $prodi . "<br>";
  ?>
</body>
</html>
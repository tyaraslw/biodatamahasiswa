<?php
class mahasiswa {
    // properti
    public $nim;
    public $nama;
    public $jurusan;
    
    function __construct($nim,$nama,$jurusan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    
    function tampil_biodata() {
        echo "NIK : " . $this->nim;
        echo "<br>";
        echo "NAMA : " . $this->nama;
        echo "<br>";
        echo "JURUSAN : " . $this->jurusan;
    }
}    
$mahasiswa1 = new mahasiswa($_POST['nim'],$_POST['nama'],$_POST['jurusan']);
$mahasiswa1->tampil_biodata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">kembali</a>
</body>
</html>
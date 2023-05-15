<?php
class mahasiswa{
    public $nim = "25";
    public $nama = "tyaraaa";
    public $jurusan = "RPL";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()
?>
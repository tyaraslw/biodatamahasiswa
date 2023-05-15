<?php
class mahasiswa{
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim,$nama,$jurusan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function tampil_biodata(){
        echo $this->nim, "<br>";
        echo $this->nama, "<br>";
        echo $this->jurusan;
    }
}

$tampil = new mahasiswa("25","tyara","rpl");
$tampil->tampil_biodata()
?>
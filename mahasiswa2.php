<?php

class mahasiswa{
    public $nim = "25";
    public $nama = "tyarasalwa";
    public $jurusan = "DKV";
    function tampil_biodata(){
        echo $this-> nim,"<br>";
        echo $this-> nama,"<br>";
        echo $this-> jurusan;
    }
}
$mahasiswa1 = new mahasiswa();
    $mahasiswa1->nim = "123";
    $mahasiswa1->nama = "tyara";
    $mahasiswa1->jurusan = "pplg";

$mahasiswa1->tampil_biodata();

$mahasiswa1 = new mahasiswa("123","tyaraa","Rpl");
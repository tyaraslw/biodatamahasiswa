<?php

class mahasiswa{
    public $nim = "25";
    public $nama = "tyarasalwa";
    public $jurusan = "DKV";
    function tampil_biodata(){
        echo $this-> nim;
        echo $this-> nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();
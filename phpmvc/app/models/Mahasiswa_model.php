<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Amisha Al azis",
    //         "nrp" => "193040122",
    //         "email" => "amishaalazis@yahoo.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Iman",
    //         "nrp" => "193040114",
    //         "email" => "iman123@yahoo.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "kiki",
    //         "nrp" => "193040001",
    //         "email" => "kii@yahoo.com",
    //         "jurusan" => "Teknik Mesin"
    //     ]

    // ];

    private $dbh;
    private $stmt;

    public function __construct() {
        
        $dsn = 'mysql:host=localhost;dbname=prakweb2021_phpmvc_193040122';
        try{
                    $this->dbh = new PDO($dsn, 'root', '');
                }catch(PDOException $e){
                    die($e->getMessage());
                }

    }

    public function getAllMahasiswa() {
        $this->mhs;
    }
}
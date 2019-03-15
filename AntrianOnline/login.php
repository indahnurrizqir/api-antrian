<?php
//user melakukan login
    function login($mysqli){
        $nik = $_POST["nik"];
        $password = md5($_POST["password"]);
        if((empty($nik)) || (empty($password))){
            gagal('Kolom tidak boleh kosong');
        } else {
                $sql_masuk = 'SELECT * FROM user WHERE nik="'.$nik.'" AND password="'.md5($password).'"';
                $query_masuk = $mysqli->query($sql_masuk);
                if ($hak_akses == "admin" ){
                    berhasil("Selamat datang admin!");
                } elseif ($hak_akses == "cs" ){
                    berhasil("Selamat datang cs!");
                } elseif ($hak_akses == "android" ){
                    berhasil("Selamat datang!");
                } else {
                    gagal('Nik atau password salah!');
                }
        }
    }
        
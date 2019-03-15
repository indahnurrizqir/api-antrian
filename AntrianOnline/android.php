<?php
//user daftar
    function daftar($mysqli){
        $nik = $_POST["nik"];
        $nama = $_POST["nama"];
        $no_telp = $_POST["no_telp"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        if ((empty($nik))) {
            gagal('NIK tidak boleh kosong');
        } else if ((empty($nama))) {
             gagal('Nama tidak boleh kosong');
        } else if ((empty($no_telp))) {
            gagal('Nomor Telephon tidak boleh kosong');
        } else if ((empty($password))) {
            gagal('Password tidak boleh kosong');
         } else if ((empty($repassword))) {
            gagal('Password tidak boleh kosong');
        } else {
                $sql_daftarandroid= "INSERT INTO user (nik , nama, no_telp, password, repassword, hak_akses, token) VALUES ('".$nik."','".$nama."','".$no_telp."','".md5($password)."','".md5($repassword)."', '".android."', '".md5($nik.$password)."')";
                $query_daftarandroid = $mysqli->query($sql_daftarandroid);
                if ($query_daftarandroid){
                    berhasil("Register berhasil, silahkan login.");
                } else {
                    gagal('Nik Sudah Ada');
                }
          }
    }
//tampilkan profil 
        function getprofil($mysqli){
        $sql_profil = 'SELECT * FROM user WHERE nik="'.$nik.'"';
        $query_profil=$mysqli->query($sql_profil); 
        $data_profil = $query_profil->fetch_array(MYSQLI_ASSOC);
                $output_layanan = array(
                    "nik"  => $data_profil['nik'],
                    "nama"  => $data_profil['nama'],
                    "no_telp"  => $data_profil['no_telp'],
                    "password"  => $data_profil['password'],
                    "repassword"  => $data_profil['repassword'],
                );
                $return_profil = success($output_profil);
    }
//edit profil 
        function setprofil($mysqli){
        $sql_editprofil = 'UPDATE * FROM user WHERE nik="'.$nik.'"';
        $query_editprofil=$mysqli->query($sql_editprofil); 
        $data_profil = $query_profil->fetch_array(MYSQLI_ASSOC);
                $output_editprofil = array(
                    "nama"  => $data_editprofil['nama'],
                    "no_telp"  => $data_editprofil['no_telp'],
                    "password"  => $data_editprofil['password'],
                    "repassword"  => $data_editprofil['repassword'],
                );
        
                $return_editprofil = success($output_editprofil);
    }
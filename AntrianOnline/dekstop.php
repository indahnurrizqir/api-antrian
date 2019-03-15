<?php
    function daftar($mysqli){
        $nik = $_POST["nik"];
        $nama = $_POST["nama"];
        $no_telp = $_POST["no_telp"];
        if ((empty($nik))) {
            gagal('NIK tidak boleh kosong');
        } else if ((empty($nama))) {
             gagal('Nama tidak boleh kosong');
        } else if ((empty($no_telp))) {
            gagal('Nomor Telephon tidak boleh kosong');
        } else {
                $sql_daftardekstop= "INSERT INTO user (nik , nama, no_telp, password, repassword) VALUES ('".$nik."','".$nama."','".$no_telp."','".md5($password)."','".md5($repassword)."', '".dekstop."'')";
                $query_daftardekstop = $mysqli->query($sql_daftardekstop);
                if ($query_daftardekstop){
                    berhasil("Register berhasil");
                } else {
                    gagal('Nik Sudah Ada');
                }
          }
    }

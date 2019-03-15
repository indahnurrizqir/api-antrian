<?php
//tambah akun
    function addakun($mysqli){
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
                $sql_tambahakun = "INSERT INTO user (nik , nama, no_telp, password, repassword) VALUES ('".$nik."','".$nama."','".$no_telp."','".md5($password)."','".md5($repassword)."')";
                $query_tambahakun = $mysqli->query($sql_tambahakun);
                if ($query_tambahakun){
                    berhasil("Tambah data sudah berhasil");
                } else {
                    gagal('Nik sudah ada');
                }
          }
    }
//menampilkan data akun
    function getakun($mysqli){
        $sql_akun = "SELECT * FROM user";
        $query_akun=$mysqli->query($sql_akun); 
        $nama = array();
        while($data_akun = $query_akun->fetch_array(MYSQLI_ASSOC)){
                $output_akun = array(
                    "id_user"  => $data_akun['id_user'],
                    "nama"  => $data_akun['nama'],
                    "nik"  => $data_akun['nik'],
                    "no_telp"  => $data_akun['no_telp'],
                    "hak_akses"  => $data_akun['hak_akses'],
                );
                array_push($nama, $output_akun);
        }
                $return_akun = success($nama);
    }
//edit akun 
        function setakun($mysqli){
        $sql_editakun = 'UPDATE * FROM user WHERE nik="'.$nik.'"';
        $query_editakun =$mysqli->query($sql_getakun); 
        $data_getakun = $query_editakun->fetch_array(MYSQLI_ASSOC);
                $output_editakun = array(
                    "nama"  => $data_editakun['nama'],
                    "nik"  => $data_editakun['nik'],
                    "no_telp"  => $data_editakun['no_telp'],
                    "no_telp"  => $data_editakun['no_telp'],
                    "password"  => $data_editakun['password'],
                    "repassword"  => $data_editakun['repassword'],
                    "hak_akses"  => $data_editakun['hak_akses'],
                );
        
                $return_editakun = success($data_editakun);
    }
//hapus akun 
        function delakun($mysqli){
        $sql_hapusakun = 'UPDATE * FROM user WHERE nik="'.$nik.'"';
        $query_hapusakun =$mysqli->query($sql_hapus); 
        $data_hapusakun = $query_hapus->fetch_array(MYSQLI_ASSOC);
        $return_hapusakun = success($output_hapus);
    }
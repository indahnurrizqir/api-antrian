<?php
//menambah transaksi oleh customer atau waktu dilayani
    function addtransaksi($mysqli){
        $id_layanan = $_POST["id_layanan"];
        $id_user = $_POST["id_user"];
        $id_loket = $_POST["id_loket"];
        $waktu_layani = $_POST["waktu_layani"];
        $no_antrian = $_POST["no_antrian"];

        if ((empty($id_layanan))) {
            gagal('Layanan tidak boleh kosong');
        } else if ((empty($id_user))) {
             gagal('User tidak boleh kosong');
        } else if ((empty($waktu_layani))) {
            gagal('Waktu Telephon tidak boleh kosong');
        } else if ((empty($no_antrian))) {
            gagal('Antrian tidak boleh kosong');
         } else {
                $sql_tambahtransaksi= "INSERT INTO transaksi_layani (id_layanan , id_user, id_loket, id_user_cs , waktu_layani, no_antrian) VALUES ('".$id_layanan."','".$id_user."','".$id_loket."','".id_user_cs($id_user == 'cs')."','".$waktu_layani."', '".$no_antrian."')";
                $query_tambahtransaksi = $mysqli->query($sql_tambahtransaksi);
                if ($query_tambahtransaksi){
                    berhasil("tambah data berhasil");
                } else {
                    gagal('Masukan data lagi');
                }
          }
    }

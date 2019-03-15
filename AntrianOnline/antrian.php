   <?php
    function addantrian($mysqli){
        $id_layanan = $_POST["id_layanan"];
        $id_user = $_POST["id_user"];
        $waktu_ambil = date('H:i:s');
        $tgl = date ('Y-m-d');

        if ((empty($id_layanan))) {
            gagal('Layanan tidak boleh kosong');
        } else if ((empty($id_user))) {
             gagal('User tidak boleh kosong');

        } else {
                $tambah = 1;
                $sql_nomor_antrian = "SELECT max(nomor_antrian) as nomor_antrian FROM nomor_antrian where tgl = now() ";
                $query_nomor_antrian = $mysqli->query($sql_nomor_antrian);
                $data_nomor_antrian = $query_nomor_antrian->fetch_array(MYSQLI_ASSOC);
                $nomor_antrian = $data_nomor_antrian['nomor_antrian'];
                $sql_layanan_antrian = "INSERT INTO nomor_antrian (id_layanan , id_user, waktu_ambil, tgl, nomor_antrian) VALUES ('".$id_layanan."','".$id_user."','".$waktu_ambil."','".$tgl."','".((int)$nomor_antrian+$tambah)."')";
                $query_layanan_antrian = $mysqli->query($sql_layanan_antrian);

                if ($query_layanan_antrian){
                    berhasil("Cetak nomor antrian");
                } else {
                    gagal('Pilih layanan');
                }
          }
    }
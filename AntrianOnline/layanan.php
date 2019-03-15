<?php
//tambah layanan
    function addlayanan($mysqli){
        $jenis_layanan = $_POST["jenis_layanan"];
        $layanan = $_POST["layanan"];

        if ((empty($jenis_layanan))) {
            gagal('Jenis layanan tidak boleh kosong');
        } else if ((empty($layanan))) {
             gagal('Layanan tidak boleh kosong');
        } else {
                $sql_tambahlayanan = "INSERT INTO layanan (jenis_layanan , layanan) VALUES ('".$jenis_layanan."','".$layanan."')";
                $query_tambahlayanan = $mysqli->query($sql_tambahlayanan);
                if ($query_tambahlayanan){
                    berhasil("Tambah data sudah berhasil");
                } else {
                    gagal('Masukkan data lagi');
                }
          }
    }
//menampilkan layanan
    function getlayanan($mysqli){
        $sql_layanan = "SELECT * FROM layanan";
        $query_layanan=$mysqli->query($sql_layanan); 
        $jenis = array();
        while($data_layanan = $query_layanan->fetch_array(MYSQLI_ASSOC)){
                $output_layanan = array(
                    "jenis_layanan"  => $data_layanan['jenis_layanan'],
                    "layanan"  => $data_layanan['layanan'],
                );
                array_push($jenis, $output_layanan);
        }
                $return_layanan = success($jenis);
    }
//edit layanan
        function setlayanan($mysqli){
        $sql_editlayanan = 'UPDATE * FROM layanan WHERE id_layanan="'.$id_layanan.'"';
        $query_editlayanan =$mysqli->query($sql_setlayanan); 
        $data_editlayanan = $query_editlayanan->fetch_array(MYSQLI_ASSOC);
                $output_editakun = array(
                    "jenis_layanan"  => $data_editlayanan['jenis_layanan'],
                    "layanan"  => $data_editlayanan['layanan'],
                );
        
                $return_editlayanan = success($data_editlayanan);
    }
//hapus akun 
        function dellayanan($mysqli){
        $sql_hapuslayanan = 'UPDATE * FROM layanan WHERE id_layanan="'.$id_layanan.'"';
        $query_hapuslayanan =$mysqli->query($sql_hapusakun); 
        $data_hapuslayanan = $query_hapuslayanan->fetch_array(MYSQLI_ASSOC);
        $return_hapuslayanan = success($output_hapuslayanan);
    }
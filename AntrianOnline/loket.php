<?php
//tambah loket
    function addloket($mysqli){
        $nomor_loket = $_POST["nomor_loket"];

        if ((empty($nomor_loket))) {
            gagal('Nomor tidak boleh kosong');
        } else if ((empty($status))) {
            gagal('Status Telephon tidak boleh kosong');
        } else {
                $sql_tambahloket = "INSERT INTO loket (nomor_loket, status) VALUES ('".$nomor_loket."','".$status."')";
                $query_tambahloket = $mysqli->query($sql_tambahloket);
                if ($query_tambahloket){
                    berhasil("Tambah data sudah berhasil");
                } else {
                    gagal('Nomor sudah ada');
                }
          }
    }
//menampilkan data loket
    function getloket($mysqli){
        $sql_loket = "SELECT * FROM loket";
        $query_loket =$mysqli->query($sql_loket); 
        $nomor = array();
        while($data_loket = $query_loket->fetch_array(MYSQLI_ASSOC)){
                $output_loket = array(
                    "nomor_loket"  => $data_loket['nomor_loket'],
                    "status"  => $data_loket['status'],
                );
                array_push($nomor, $output_loket);
        }
                $return_loket = success($nomor);
    }
//edit loket
        function setloket($mysqli){
        $sql_editloket = 'UPDATE * FROM loket WHERE id_loket="'.$id_loket.'"';
        $query_editloket =$mysqli->query($sql_editloket); 
        $data_editloket = $query_editloket->fetch_array(MYSQLI_ASSOC);
                $output_editloket = array(
                    "nomor_loket"  => $data_editloket['nomor_loket'],
                    "status"  => $data_editloket['status'],
                );
        
                $return_editloket = success($data_editloket);
    }
//hapus loket
        function delloket($mysqli){
        $sql_hapusloket = 'UPDATE * FROM loket WHERE id_loket="'.$id_loket.'"';
        $query_hapusloket =$mysqli->query($sql_hapusloket); 
        $data_hapusloket = $query_hapusloket->fetch_array(MYSQLI_ASSOC);
        $return_hapusloket = success($output_hapusloket);
    }
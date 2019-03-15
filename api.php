<?php 
include  'database.php';

//user harus login
    function belum_login(){
        $output = array(
                    'status' => '2',
                    'message' => 'Belum login!'
                );
        echo json_encode($output);
        die();
        }
//jika data tidak ditemukan
    function success($result){
        if(!$result){
            data_notfound();
        }else{
            $output = array(
                    'status' => '1',
                    'message' => 'Succes',
                    'data'=> $result
                );
            echo json_encode($output);
            die();
        }
    }
//jika data tidak ditemukan
    function tidak_ditemukan(){
        $output = array(
                    'status' => '0',
                    'message' => 'Data Tidak Ditemukan'
                );
        echo json_encode($output);
        die();
    }
//jika data gagal
    function gagal($respon){
        $output = array(
                    'status' => '0',
                    'message' => $respon
                );
        echo json_encode($output);
        die();
    }
//jika data berhasil
    function berhasil($respon){
        $output = array(
                    'status' => '1',
                    'message' => $respon
                );
        echo json_encode($output);
        die();
    }
//aksi untuk memanggil function   
    if(isset($_GET['aksi'])) { // validasi aksi
        $url = explode('/', $_GET['aksi']);
    } else {
        die('tidak terdapat aksi');
    }

    include 'AntrianOnline/' . $url[1] . '.php';
    $url[2]($mysqli);
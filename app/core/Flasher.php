<?php

    class Flasher{
        public static function setFlash($pesan, $aksi, $tipe){
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        }

        public static function Flash(){
            if(isset($_SESSION['flash'])){
                echo '
                <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' fade show d-flex align-items-center justify-content-between" role="alert">
                <div>
                Data Mahasiswa
                <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] .'
                </div>
                <div>
                <button type="button" class="btn-close align-items-end" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                </div>

                ';
            unset($_SESSION['flash']);
            }
        }
    }
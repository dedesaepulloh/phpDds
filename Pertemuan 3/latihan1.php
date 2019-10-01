<?php
        //Contoh fungsi tanpa parameter
        function selamat(){
            echo "<h2>Selamat Belajar PHP</h2>";
        }

        // Contoh fungsi dengan parameter
        function apakabar($nama, $kota){
            echo "<h2>Apa kabar $nama dari $kota</h2>";
        }

        // Contoh fungsi pengembalian nilai
        function jumlahkan($bil1, $bil2){
            $hasil = $bil1 + $bil2;
            return $hasil;
        }

        // Contoh pemanggilan fungsi
        // selamat();
        // apakabar("Dede Saepulloh", "Ciamis");
        // echo jumlahkan(2, 3);

        // Contoh fungsi tanggal
        // date_default_timezone_set("Asia/jakarta");
        // echo "<h2>Tanggal Sekarang : ".date("d/m/Y")."</h2>";
        // echo "<h2>Waktu Sekarang : ".date("h:i:s")."</h2>";
        // $besok = mktime(0,0,0, date("m"),date("d")+1,date("Y"));
        // echo "<h2>Besok Adalah ".date("d/m/Y", $besok);

        // Latihan
        // 1. Buat fungsi terbilang
        //     120 : Seratus Duapuluh Ribu Rupiah
        // 2. Buat fungsi format curency
        //     1200 : Rp. 1.200
        // 3. Buat fungsi tanggal indo 
        //     2019/10/01 : Selasa, 01 Oktober 2019

        // Penyelesaian Latihan

        // Fungsi terbilang
        function terbilang($nilai){
            $huruf = array("","Satu","Dua","Tiga","Empat","Lima","Enam","Tujuh","Delapan","Sembilan","Sepuluh","Sebelas");
            if($nilai <12){
                $hasil = $huruf[$nilai];
            }
            // Belum beres
            return $hasil;
        }


        // Fungsi curency
        function format_rupiah($jumlah){
            $hasil = "Rp.".number_format($jumlah,0);
            return $hasil;
        }

        // Fungsi tanggal indo
        function tanggal_indo($tanggal){
            $harihuruf = array("Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
            $hariangka = date("w", strtotime($tanggal));
            $hariindo = $harihuruf[$hariangka];

            return $hariindo;
        }

        // Pemanggilan
        echo terbilang(9);
        echo "<br>";
        echo format_rupiah(90000);
        echo "<br>";
        echo tanggal_indo("2019-10-01");

    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Belajar Fungsi</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="jumbotron mt-3 ">
                    <h1 class="display-4">Belajar Fungsi</h1>
                    <p class="lead"><?php apakabar("Dede Saepulloh", "Ciamis") ?></p>
                    <hr class="my-4">
                    <p><?php echo jumlahkan(2, 3) ?></p>
                    <p><?php echo "Tanggal Sekarang : ".date("d/m/Y") ?></p>
                    <p><?php echo "Waktu Sekarang : ".date("h:i:s") ?></p>
                    <?php date_default_timezone_set("Asia/jakarta") ?>
                    <p><?php 
                        $besok = mktime(0,0,0, date("m"),date("d")+1,date("Y"));
                        echo "Besok Adalah ".date("d/m/Y", $besok);
                    ?></p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
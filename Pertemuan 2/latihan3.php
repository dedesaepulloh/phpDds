<?php 
    // Contoh untuk menulis file
    // Membuka suatu file dengan maksud untuk diisi data
    $fileku = "file.txt";
    $filehandle = fopen($fileku, 'r') or die ("File gagal dibuka");

    // Membaca suatu file dengan batasan 1000 karakter
    $data = fread($filehandle, 1000);

    //Menutup suatu file
    fclose($filehandle);
    echo "$data";
?>
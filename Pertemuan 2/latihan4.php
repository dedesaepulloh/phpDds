<?php 
    // Contoh untuk menulis file
    // Membuka suatu file dengan maksud untuk diisi data
    $fileku = "file.txt";
    $filehandle = fopen($fileku, 'a') or die ("File gagal dibuka");

    // Menulis / mengisi data pada file yang telah dibuka
    $datastring = "Hallo Dede Saepulloh... \n";
    fwrite($filehandle, $datastring);

    //Menutup suatu file
    fclose($filehandle);
?>
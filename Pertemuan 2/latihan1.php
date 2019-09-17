<?php
    //Contoh STRPOS
    $stringku = "Dede Saepulloh";
    $posisi = strpos($stringku, "Sae");
    echo "Posisi Sae ada diposisi ke $posisi";

    echo "<br>";

    //Contoh STR_REPLACE
    $stringawal = "Selamat Datang di halaman web ini";
    $ubahstring = str_replace("web", "website", $stringawal);
    echo "$ubahstring";

    echo "<br>";

    //Contoh STRTOUPPER
    $originalstring = "String Capitalization 123";
    $uppercase = strtoupper($originalstring);
    echo "Old String - $originalstring<br>";
    echo "new String - $uppercase";

    echo "<br>";

    //Contoh STRTOLOWER
    $originalstring = "STRING CAPITALIZATION 123";
    $lowercase = strtolower($originalstring);
    echo "Old String - $originalstring<br>";
    echo "new String - $lowercase";

    echo "<br>";

    //Contoh UCWORD
    $originalstring = "a title that could use some HELP";
    $ucword = ucwords($originalstring);
    echo "Old String - $originalstring<br>";
    echo "new String - $ucword";

    echo "<br>";

    //Contoh EXPLODE
    $phonenumber = "800-555-5555";
    $hasil = explode("-",$phonenumber, 3);
    echo "Pecahan 1 = $hasil[0]<br>";
    echo "Pecahan 3 = $hasil[1]<br>";
    echo "Pecahan 3 = $hasil[2]<br>";

    echo "<br>";

    //Contoh IMPLODE
    $pecahan = array("Hello", "Code", "Fighter!", "I", "am", "Dede", "Saepulloh");
    $denganspasi = implode(" ", $pecahan);
    $dengandash = implode("-", $pecahan);
    echo "$denganspasi<br>";
    echo "$dengandash";

    echo "<br";
?>
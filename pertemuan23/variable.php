<?php 
    echo 'Hello World';
    echo '<br/>';


    // variable system (built-in)
    echo 'Document Root: '. $_SERVER["DOCUMENT_ROOT"];
    echo '<br/>';
    echo '<br/>';

    // $_SESSION["DOCUMENT_ROOT"];
    // $_GET;
    // $_POST;
    // $_REQUEST;

    // variable user (variable yang dibuat oleh pengguna)
    $name = 'Putri';
    $age = 22;
    $isHungry = true;

    echo $name;
    echo '<br/>';
    $name = 'Fay'; //ubah variable $nama 
    echo $name . '--reassign value';
    echo '<br/>';

    // menampilkan variable echo
    echo 'Nama saya ' .$name. ', umur saya ' .$age. ', Apakah saya lapar?' .$isHungry;

    // menampilkan variable dengan HTML
    echo "<h1 style='color: red'>Nama saya $name, umur saya $age, Apakah saya lapar?$isHungry";
    echo "<br/><br/>";

    // variable konstan (tidak bisa dilakukan reassign)
    // 1. define, const
    define ("BOOTCAMP", "Fullstack Web Dev");
    const MATERI = "Laravel";
    // error gabisa reassign value--> const materi = "Java";
    // error gabisa reassign value--> define("BOOTCAMP", "DevOps"); 
    echo BOOTCAMP;
    echo '<br/>';
    echo MATERI;
?>
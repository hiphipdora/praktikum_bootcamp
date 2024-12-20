<?php 

//Empty Array
$fruits = array(); //cara lama
$cars = [];

// Array dan isinya
$moviees = array('action', 'romance', 'comedy');
$brands = ['iPhone', 'Samsung', 'Blackberry'];

//Cetak
var_dump($movies);
var_dump($brands);

print_r($moviees);

var_dump($brands[0]);

//Simple Array (dihitung berdasarkan index)
$course = ['Pemrograman', 'Animasi', 'Branding'];

// Associative Array (dihitung berdasarkan key)
$courses = [
    "MK01" => "Pemrograman", 
    "MK02" => "Animasi", 
    "MK03" => "Branding"
]; // menulis "key" => "value"

var_dump($courses);

// Multidimensional Array | dihitung berdasarkan index dan / atau key
$movie1 = [
    "title" => "Budi Pekerti",
    "genre" => "Drama",
    "produser" => "Adi",
    "release_year" => 2023
];

$movie2 = [
    "title" => "Resident Evil",
    "genre" => "Action",
    "produser" => "Rul",
    "release_year" => 2015
];

$movie3 = [
    "title" => "Toys Story",
    "genre" => "Family",
    "produser" => "Fakrhi",
    "release_year" => 2020
];

$movies = [
["title" => "Budi Pekerti",
    "genre" => "Drama",
    "produser" => "Adi",
    "release_year" => 2023
],

["title" => "Resident Evil",
    "genre" => "Action",
    "produser" => "Rul",
    "release_year" => 2015],

["title" => "Toys Story",
    "genre" => "Family",
    "produser" => "Fakrhi",
    "release_year" => 2020]
];

print_r($movies);
print_r($movies[1]['release_year']);
?>
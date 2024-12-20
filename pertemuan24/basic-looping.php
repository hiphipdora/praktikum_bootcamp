<?php 

for($x = 1; $x <= 10; $x++){
    echo '<br/>Bilangan ' .$x;
};

echo '<hr/>';


for($y = 10; $y >= 1; $y--){
    echo '<br/>Bilangan ' .$y;
};

// looping array
$courses = [
    "MK01" => "Pemrograman", 
    "MK02" => "Animasi", 
    "MK03" => "Branding"
]; // menulis "key" => "value"

//use plural as variable and singular for value. random word allowed for key
foreach ($courses as $code => $course) {
    echo "Mata Kuliah $course memiliki $code <br/>";
    echo '<br/>';
};
foreach ($courses as $course) {
    echo "Mata Kuliah $course <br/>";
    echo '<br/>';
};


//multidimensional
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

foreach($movies as $movie){
    echo "
    <li>Judul: {$movie['title']}</li>
    <li>Genre: {$movie['genre']}</li>
    <li>Produser: {$movie['produser']}</li>";
    echo '<li>Release Year:  ' .$movie['release_year']. '</li><br/>';
};

?>
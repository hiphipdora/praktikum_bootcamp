<?php require_once 'movies-data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Daftar Film</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release Year</th>
                    <th>Country</th>
                </tr>
            </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($movies as $movie){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $movie['title'] ?></td>
                        <td><?= $movie['genre'] ?></td>
                        <td><?= $movie['release_year'] ?></td>
                        <td><?= $movie['country'] ?></td>
                    </tr>
                    <?php }; ?>
                </tbody>
        </table>
    </div>
</body>
</html>


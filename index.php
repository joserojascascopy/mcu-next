<?php

$result = file_get_contents('https://whenisthenextmcufilm.com/api'); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);

$title = $data['title'];
$days_until = $data['days_until'];
$release_date = $data['release_date'];
$poster_url = $data['poster_url'];
$overview = $data['overview'];

$following_production_title = $data["following_production"]['title'];
$following_production_poster_url = $data["following_production"]['poster_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU Next?</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>

    <main class="container">
        <div>
            <h1 class="titulo">MCU Next?</h1>
            <p class="nombre-pelicula"><?php echo $title; ?></p>
            <p class="descripcion"><span>Faltan: </span><?php echo $days_until; ?> días</p>
            <img class="poster" src="<?php echo $poster_url; ?>" alt="Poster MCU">
            <p class="estrena"><span>Se estrena el: </span><?php echo $release_date; ?></p>
            <p class="overview"><?php echo $overview; ?></p>
            <p class="siguiente-estreno">Siguien Estreno:</p>
            <h2 class="siguiente-pelicula"><?php echo $following_production_title ?></h2>
            <img class="poster-siguiente" src="<?php echo $following_production_poster_url; ?>" alt="Poster MCU Next">
        </div>
    </main>

</body>

</html>
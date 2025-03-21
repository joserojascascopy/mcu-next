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
</head>

<body class="container">

    <main>
        <h1 class="title-page">MCU Next?</h1>
        <p class="title"><?php echo $title; ?></p>
        <p><span>Faltan: </span><?php echo $days_until; ?> días</p>
        <img src="<?php echo $poster_url; ?>" alt="Poster MCU">
        <p><span>Se estrena el: </span><?php echo $release_date; ?></p>
        <p><?php echo $overview; ?></p>
        <p>Siguien Estreno</p>
        <h2><?php echo $following_production_title ?></h2>
        <img src="<?php echo $following_production_poster_url; ?>" alt="Poster MCU Next">
    </main>

</body>

</html>
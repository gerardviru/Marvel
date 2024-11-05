<?php
CONST API_URL = "https://whenisthenextmcufilm.com/api";

//Llamar a la API, realizar un GET y obtener el Json
$resultado = file_get_contents(API_URL);

$poster_url ="https://image.tmdb.org/t/p/w500/bSsjWM91kSZqW0BagqaoIeo8Jz7.jpg";
$title = "Daredevil: Born Again";
$overview = "Después de reunirse con el recién elegido presidente estadounidense Thaddeus Ross, Sam se encuentra en medio de un incidente internacional. Debe descubrir la razón detrás de un nefasto complot global antes de que el verdadero cerebro haga que el mundo entero se ponga rojo.";
$release_date = "04-03-2025";
$following_production = "Captain America: Brave New World";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>La próxima película de Marvel: <?= $title; ?></title>
  <meta name="description" content="La próxima película de Marvel" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>
<main>
  <section>
  <img src="<?= $poster_url; ?>" width="200" alt="Poster de <?= $title ?>" style="border-radius: 16px" />
  </section>

  <hgroup>
    <h6><?= $title ?> </br> </br> <?= $overview; ?> </br> </br></h6>
    <p>Fecha de estreno: <?= $release_date; ?></p>
    <p>La siguiente es: <?= $following_production; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }
</style>
</body>
</html>
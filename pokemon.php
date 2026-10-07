<?php

$pokemon = $_GET["pokemon"] ?? "pikachu";

$url = "https://pokeapi.co/api/v2/pokemon/" . strtolower($pokemon);

$respuesta = file_get_contents($url);

$datos = json_decode($respuesta, true);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokémon con PHP</title>
</head>
<body>
    <h1>Pokémon</h1>
    <form method="GET">
        <input type="text" name="pokemon" placeholder="Escribe un Pokémon">
        <button type="submit">Buscar</button>
    </form>
<a href="/?pokemon=bulbasaur">Bulbasaur</a>
<a href="/?pokemon=charmander">Charmander</a>
<a href="/?pokemon=squirtle">Squirtle</a>

    <hr>
    <h2>
        <?php echo $datos["name"]; ?>
    </h2>
    <img   src="<?php echo $datos["sprites"]["front_default"]; ?>" width="150">
    <p>
        Tipo:<?php echo $datos["types"][0]["type"]["name"]; ?>
    </p>
    <p>
        Altura:<?php echo $datos["height"]; ?>
    </p>
    <p>
        Peso:<?php echo $datos["weight"]; ?>
    </p>

</body>
</html>
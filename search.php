<?php
  # Llamadas iniciales a la API a usar
  $querry = $_GET["querry"];
  $API_URL = "https://api.domainsdb.info/v1/domains/search?domain={$querry}";
  
  /*
  # ch = cURL handle
  $ch = curl_init(API_URL);
  // Recibir petición sin mostrar en pantalla
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  # Obtenemos la información y la formateamos
  $result = curl_exec($ch);*/

  # Silence empty answers
  $context = stream_context_create(array('http' => array('ignore_errors' => true),));
  $result = file_get_contents($API_URL, false, $context);
  $data = json_decode($result, true);
  
  # Cerramos conexión
  #curl_close($ch);

  #var_dump($data);
?>

<head>
  <meta charset="UTF-8" />
  <title>
    Identificador de existencia de dominios 🌐
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<body>
  <hgroup>  
    <h1>
      💭¿Mi dominio ya existe?💭
    </h1>
    <h2>
      Escribe el nombre de cualquier dominio y te diremos si ya se encuentra en uso 🔍
    </h2>
  </hgroup>
  
  <form action="search.php" method="get">
    <input type="text" name="querry" placeholder="Escribe un dominio" maxlength="50" required><br>
    <input type="submit" class="boton" >
  </form>
  
  <main>
    <?php
        # Con una ternaria decidimos que mostrar - TRUE then FALSE
        #$output = $data ? "El domino ya está en uso 😔" : "Dominio disponible 😁";
        /*$amount = $data ? sizeof($data["message"]) : 0;
        $last = match (true) {
            $amount > 0 => "Existen $amount dominios registrados",
            $amount == 0 => "",
        };*/
        $output = match (true) {
            array_key_exists("message", $data) => "Dominio disponible 😁",
            array_key_exists("domains", $data) => "El domino ya está en uso 😔",
            default => "🙁😖",
        }
    ?>
    <h3>
        <?= $output;?>
    </h3>
  </main>
</body>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    place-content: center;
    margin-top: 3rem;
  }

  hgroup {
    justify-content: center;
    text-align: center;
    font-weight: bold;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }

  h3 {
    justify-content: center;
    text-align: center;
    font-weight: bold;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }

  form {
    text-align: center;
    margin: 0 auto;
    max-width: 70%;
  }

</style>


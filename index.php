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
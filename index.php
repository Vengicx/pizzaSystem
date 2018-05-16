<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pizza Genérica</title>
  </head>
  <body>
  <div class="container">
    <h2 class="center">Cadastro de Matéria-Prima</h2>

    <form action="save/materiaprima.php" method="post">
      <div class="input-field col s6">
        <input id="nomemateria" type="text" class="validate">
        <label for="nomemateria">Nome da Matéria Prima</label>
      </div>
      <div class="input-field col s6">
          <input id="valormateria" type="text" class="validate">
          <label for="valormateria">Valor em R$</label>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    
    </form>


  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  </html>
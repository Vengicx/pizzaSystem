<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/font-awesome.min.css">
	    <link rel="stylesheet" href="css/fontawesome.min.css">
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Pizza Genérica</title>
    </head>
    <body>
    <nav>
      <?php include "menu.php"; ?>
    </nav>
      <main>
        <div class="container">
            <?php
                $fd = $pg = "";
               
                if( isset ($_GET["fd"])){
                    $fd = trim ($_GET["fd"]);
                }
                if( isset($_GET["pg"])){
                    $pg = trim ($_GET["pg"]);
                }
                
                if (empty ($pg)){
                    $pagina = "principal.php";
                }else{
                    $pagina = $fd."/".$pg.".php";
                }
                if(file_exists($pagina)){
                    include $pagina;
                }else{
                    include "erro.php";
                }
            ?>
        </div>
      </main>
    <footer class="page-footer orange accent-3">
      <?php include "footer.php"; ?>
    </footer>
        <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
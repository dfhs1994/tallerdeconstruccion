<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taller de Construcci&oacute; de Aplicaciones</title>
    </head>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>

    <body>
        <header id="headerSection" class="container">
            <img class="bordered" width="800px" 
                 src="http://static.cdn.ea.com/blog.bioware.com/wp-content/uploads/2013/02/Tech-Mastery-Aaron-Norton.png" 
                 alt="Esto es una imagen" />
        </header>
        <nav id="mainContainer" class="container">

        </nav>
        <footer id="footerSection" class="footer-copyright">

        </footer>
    </body>

    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="css/materialize/js/materialize.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#mainContainer').load('/tca-project/tiles/MenuTile.php',{
                "choices":
                        [
                    {
                        "id":"inicioId",
                        "texto":"Inicio",
                        "loadPage":"",
                        "targetDiv":"newsSection"                 
                    },
                    {
                        "id":"quienesSomosId",
                        "texto":"¿Quienes Somos?",
                        "loadPage":"/tiles/quienesSomosTile.php",
                        "targetDiv":"mainContainner"                 
                    }
                        ]
            });
        });
    </script>

</html>

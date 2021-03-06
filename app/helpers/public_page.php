<?php
//Clase para definir las plantillas de las páginas web del sitio público
class Public_Page {
    //Método para imprimir el encabezado y establecer el titulo del documento
    public static function headerTemplate($title) {
        print('
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <!--Se establece la codificación de caracteres para el documento-->
                <meta charset="utf-8">
                <!--Se importa la fuente de iconos de Google-->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!--Se importan los archivos CSS-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <link type="text/css" rel="stylesheet" href="../../resources/css/public_styles.css" />
                <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <!--Título del documento-->
                <title>Tienda - '.$title.'</title>
            </head>
            
            <body>
                <!--Encabezado del documento-->
                <header>
                    <!--Barra de navegación fija-->
                    <div class="navbar-fixed">
                        <nav class="blue">
                            <div class="nav-wrapper">
                                <a href="index.php" class="brand-logo"><img src="../../resources/img/logo.png" height="65"></a>
                                <a href="#" data-target="mobile-sidenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                                <ul class="right hide-on-med-and-down">
                                    <li><a href="https://materializecss.com/cards.html">Cards</a></li>
                                    <li><a href="https://materializecss.com/icons.html">Icons</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--Navegación lateral para dispositivos móviles-->
                    <ul class="sidenav" id="mobile-sidenav">
                        <li><a href="https://materializecss.com/cards.html">Cards</a></li>
                        <li><a href="https://materializecss.com/icons.html">Icons</a></li>
                    </ul>
                </header>
                <!--Contenido principal del documento-->
                <main>
        ');
    }

    //Método para imprimir el pie y establecer el controlador del documento
    public static function footerTemplate($controller) {
        print('
                </main>
                <!--Pie del documento-->
                <footer class="page-footer blue">
                    <div class="container">
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="white-text">Footer Content</h5>
                                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                                    content.</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="white-text">Links</h5>
                                <ul>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            © 2014 Copyright Text
                            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                        </div>
                    </div>
                </footer>
                <!--Importación de archivos JavaScript al final del cuerpo para una carga optimizada-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                <script src="../../app/controllers/public/'.$controller.'"></script>
            </body>
            </html>
        ');
    }
}
?>
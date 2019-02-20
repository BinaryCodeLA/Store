<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <title>Tienda</title>
    </head>
    <body>

        <div id="page" class="row">
            <div class="col-12">
                <!--Header-->
                <header class="container col-12">
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <div class="logo">  
                                <a href="index.php"> <img src="img/ecocamiseta.png"/> </a>
                            </div>
                        </div> 
                        <div class="col-xs-12 col-md-9 d-none d-md-block">
                            <a href="index.php"><h1>Bienvenidos a Eco-Camisetas</h1></a>
                        </div>
                    </div>

                </header>
                <!--menu-->
                <div class="row">
                    <!--menu principal-->
                    <div class="col-xs12 col-md-2 col-lg-3 col-xl-3">
                        <nav id="menu">
                            <ul>
                                <li><a href="#">Incio</a></li>
                                <li><a href="#">categoria 2</a></li>
                                <li><a href="#">categoria 3</a></li>
                                <li><a href="#">categoria 4</a></li>
                                <li><a href="#">categoria 5</a></li>
                            </ul>
                        </nav>
                        <!--Barra lateral-->
                        <aside id="lateral">
                            <h2>Ingresar a Tienda</h2>
                            <div id="login" class="block_aside">
                                <form action="#" method="POST">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"/>
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password"/>
                                    <input type="submit" value="Ingresar"/>
                                </form>
                                <ul>
                                    <li><a href="#">Mis Pedidos </a></li>
                                    <li><a href="#">Gestionar Pedidos </a></li>
                                    <li><a href="#">Categorias6 </a></li>
                                </ul>
                            </div>
                        </aside>

                    </div>
                    <!--contenido central-->
                    <div id="principal" class="col-xs12 col-md-10 col-lg-9 col-xl-9">
                        <div class="row">
                            <div class="col-12">
                                <h1>Productos Destacados</h1>
                                <hr/>
                            </div>    
                            <div class="col-12">
                                <div id="product">
                                    <img src="img/camiseta.png"/>
                                    <h5><strong>Camiseta Imperio</strong></h5>
                                    <span>Precio: $ 10</span>
                                    <a href="#" class="buttom">Comprar</a>
                                </div>
                                <div id="product">
                                    <img src="img/camiseta.png"/>
                                    <h5><strong>Camiseta Imperio</strong></h5>
                                    <span>Precio: $ 10</span>
                                    <a href="#" class="buttom">Comprar</a>
                                </div>
                                <div id="product">
                                    <img src="img/camiseta.png"/>
                                    <h5><strong>Camiseta Imperio</strong></h5>
                                    <span>Precio: $ 10</span>
                                    <a href="#" class="buttom">Comprar</a>
                                </div>
                            </div> <!--columna 1 de imagener-->
                        </div>
                    </div>
                </div>
                <footer class="footer col-xs-12">
                        <span>Desarrollado por Lesner Villega &copy; <?= date('Y') ?></span>
                    </footer>
                    <script src="js/jquery-3.3.1.slim.min.js"></script>
                    <script src="js/popper.min.js"></script>
            </div>
        </div>
    </body>
</html>
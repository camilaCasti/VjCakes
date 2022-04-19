<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../../Vista/carrito/css/estilo.css">
    <link rel="stylesheet" href="../../Vista/carrito/css/bootstrap.min.css">
    <script src="../../Vista/carrito/js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../Vista/carrito/css/sweetalert2.min.css">

    <title>Manapas Shop</title>
</head>

<body>
    
    <div class="BackGroundxd" style="background-image: url('img/BackGround.jpg');">
    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">Pasteleria Manapas</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                            
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse"   >
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="../../Vista/carrito/img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="false"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse" scr >
                                    <table id="lista-carrito" class="table" >
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Comprar productos</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y disfruta su sabor.</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Alfajor</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Alfajor1.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5000</span> </h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Delicioso alfajor, con relleno de limon</li>
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Alfajor2 </h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Alfajor2.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Alfajor, enteramente de delicioso chocolate.
                                Con capas de chocolate
                            </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Alfajor3</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Alfajor3.JPG" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Alfajor, de chocolate blanco relleno de chocolate cremoso.</li>
                        
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Merengue suizo</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Merengue.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Delicioso merengue suizo.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Merengue con chips</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/merengue1.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5769</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Delicioso merengue suizo, con chips de mani, apetecible cada dia.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Merengue</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/merengue2.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2599</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Delicioso merengue esponjoso, disfturasas cada modrida.</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Torta </h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Torta1.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">21000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Deliciosa torta con chocolate espolboreado</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Torta</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Torta2.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">869</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Torta xd</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Torta</h4>
                    </div>
                    <div class="card-body">
                        <img src="../../Vista/carrito/img/Torta3.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5397</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Torta</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>

            </div>


        </div>
    </main>

    <script src="../../Vista/carrito/js/jquery-3.4.1.min.js"></script>
    <script src="../../Vista/carrito/js/bootstrap.min.js"></script>
    <script src="../../Vista/carrito/js/sweetalert2.min.js"></script>
    <script src="../../Vista/carrito/js/carrito.js"></script>
    <script src="../../Vista/carrito/js/pedido.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>


<body>
  <section class="section">
    <div class="container">
      <h1 class="title has-text-primary">¡Bienvenidos!</h1>
      <p class="subtitle has-text-danger">Explora y descubre contenido emocionante.</p>
      <nav class="navbar is-" role="navigation" aria-label="main navigation">
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
			<button class="button is-success" href="productos.php">Productos</button>
                <a class="button is-info" href="cart.php">Inicio</a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="ver.php" class="button is-success">
                            <strong>Ver <?php
                                                include_once "funcion.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div class="buttons">
                        <a target="_blank" rel="noreferrer" href="" class="button is-primary">
                            <strong>Soporte y ayuda</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
    <section class="section">

    </body>
</html>
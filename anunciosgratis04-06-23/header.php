<body>
    <header>
        <div>
        	<div class=""><?php if(isset($_SESSION["usuario"])){ ?><a href="perfil.php" class="derecha">Tus anuncios</a> <a href="cerrar-sesion.php" class="derecha">Cerrar sesión</a><?php } else { ?><a href="iniciar-sesion.php" class="derecha">Iniciar sesión</a> <a href="registro.php" class="derecha">Registro de usuario</a><?php } ?> </div>
            <img src="imagenes/anunciosgratis.online.png" class="logo" alt="Anuncios Gratis logotipo" align="left"></a><br><br><br><h1>Poner y publicar anuncios gratis</h1><br><br><br><br>>
            <a href="publicar.php" class="button">Publicar anuncio gratis</a>
        </div>
    </header>

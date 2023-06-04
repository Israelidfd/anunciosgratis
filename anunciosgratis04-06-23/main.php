<br>
<div>
<form action="" method="get">
<input type="text" name="busqueda" placeholder="¿Qué estás buscando?" class="formbusqueda">
<input type="submit" name="buscar" value="Buscar">
</form><br>
<div class="derecha" align="right"><?php include("mapa.php"); ?></div>
</div>
<div id="wrapper">
    <div id="first">
	<div><h2>Aficiones y Ocio</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 1  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Imagen y Sonido</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 2  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Náutica</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 3  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Negocios</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 4  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Bebés</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 5  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>	
	<div><h2>Casa y jardín</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 6  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Caza</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 7  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Pesca</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 8  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Informática</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 9  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Servicios</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 10  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	
	</div><!-- box1 -->
  
	<div id="second">
	<div><h2>Inmobiliaria</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 11  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Deportes</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 12  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Empleo</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 13  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Telefonía</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 14  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Juegos</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 15  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Formación y libros</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 16  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Mascotas y Ganadería</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 17  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Moda y complementos</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 18  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>
	<div><h2>Motor</h2>
	<?php $resultado = $link->query("SELECT * FROM `subcategorias` WHERE `idcategoria` = 19  ORDER BY RAND() LIMIT 10"); 
while ($fila = $resultado->fetch_assoc()) {
    echo "<a href='categoria.php?categoria=".$fila['idsubcategoria']."'>".utf8_encode($fila['subcategoria']). "</a>\n\n&nbsp;&nbsp;&nbsp;&nbsp;";
}	?>
	</div>	
	</div><!-- fin box2 -->    
</div>
<div class="clear"></div><br><br>

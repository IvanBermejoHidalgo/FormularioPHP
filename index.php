<html>
  <head>
    	<meta charset="UTF-8">
    	<meta name="author" content="Iván Bermejo Hidalgo">
    	<link rel="stylesheet" href="styles.css">
    	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/NYCS-bull-trans-F.svg/1200px-NYCS-bull-trans-F.svg.png" type="image/x-icon">
    	<title>Formulario</title>
  </head>
  <body>
	<h1>La historia de <?php echo $_POST["nombre"]; ?></h1>
	<p>Hace tiempo en España, había una persona llamada <?php echo $_POST["nombre"]; ?> que era muy fan de las carreras de coches.
	<?php echo $_POST["nombre"]; ?> tenía <?php echo $_POST["edad"]; ?> años. De nacionalidad <?php echo $_POST["nacionalidad"]; ?>. <?php echo $_POST["nombre"]; ?> corria en el campeonato de <?php echo $_POST["compe"]; ?>.
	<?php echo $_POST["nombre"]; ?> tenía que cambiar de scuderia, las scuderias que querian contar con el piloto eran Williams, McLaren y Ferrari. Al final se decidió por la Scuderia <?php echo $_POST["scuderia"]; ?>.</p>
	<br>
	<img src="tres.jpg" width="500" height="300">
	<br>
	<p>Su primera victoria en la <?php echo $_POST["compe"]; ?> fué en la carrera del <?php echo $_POST["carrera"]; ?>. <?php echo $_POST["nombre"]; ?> iba en  el puesto <?php echo $_POST["posicion"]; ?>, no estaba teniendo buena carrera pero de repente, <?php echo $_POST["repente"]; ?> y tiene la fortuna de entrar el primero a cambiar neumaticos y ponerse en tercera posición gracias al tiempo ganado durante el repentino acontecimiento. En la relanzada de la carrera <?php echo $_POST["nombre"]; ?> consigue adelantar al segundo piloto por el <?php echo $_POST["adelantar"]; ?> de la curva.</p>
	<img src="adelantamiento.jpg" width="600" height="350">
	<p>Iba en segudo puesto despues de adelantar al anterior piloto. Quedaban <?php echo $_POST["vueltas"]; ?> para acabar la carrera, todo parecía que iba a acabar en segunda posición pero de repente otro golpe de suerte, al piloto que lideraba la carrera le ocurre que <?php echo $_POST["repente"]; ?>. Con las vueltas que quedaban y si no pasaba nada raro iba a conseguir su primera vicoria en <?php echo $_POST["compe"]; ?>. Y así fué, consiguió su primera victoria.</p>
	<img src="victoria.jpg" width="500" height="300">
	<br>
	<p>Y así fue como <?php echo $_POST["nombre"]; ?> ganó su primera carrera en <?php echo $_POST["compe"]; ?>.</p> 
  </body>
</html>

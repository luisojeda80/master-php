	<!--barra lateral-->
	<div id="contenedor">
		<aside id="sidebar">
			<div id="login" class="bloque">
				<h3>ingresa</h3>
				<form action="login.php" method="POST">
					<LABEL>Mail</LABEL></br>
					<input type="mail" name="email" id="email"></br>
					<LABEL>Contraseña</LABEL></br>
					<input type="password" name="password" id="password"></br>
					<input type="submit" name="enviar" value="Entrar">
				</form>
				
			</div>
			<div id="register" class="bloque">
				<h3>Regístrate</h3>
				<form action="registro.php" method="POST">
					<LABEL>Nombre</LABEL></br>
					<input type="text" name="nombre" id="nombre"></br>
					<LABEL>Apellido</LABEL></br>
					<input type="text" name="apellido" id="apellido"></br>
					<LABEL>Mail</LABEL></br>
					<input type="mail" name="email" id="email"></br>
					<LABEL>Contraseña</LABEL></br>
					<input type="password" name="password" id="password"></br>
					<input type="submit" name="submit" value="Enviar">
				</form>
			</div>
		</aside>	
	</div>
<?php if(isset($_SESSION['mail-sended']) && $_SESSION['mail-sended'] == true) : ?>
	<!-- .thanks-content -->
	<section class="thanks-content">
		<!-- .message -->
		<div id="thanks-msg" class="message">
			<h2>Gracias por escribirnos sus Preguntas ó Comentarios</h2>
			
			<p>Su mensaje fue enviado exitosamente y será atendido por uno de nuestros ejecutivos lo más pronto posible.</p>
		</div>
		<!-- /.message -->
	</section>
	<!-- /.thanks-content -->

	<?php ob_end_flush(); $_SESSION = []; ?>
<?php else: ?>
<?php
	$_SESSION = []; // Vaciar el array de sessión
	header('Location: /contacto'); // Redireccionar a /contacto
	ob_end_flush(); // Elimina el contenido de buffer de salida y lo deshabilita
	exit(); // No seguir ejecutando el código de abajo
?>
<?php endif; ?>
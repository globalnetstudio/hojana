<div class="contact">
	<?php if(isset($_SESSION['error']) && $_SESSION['error'] !== '') : ?>
	<div class="form-errors">
		<p><b><?php echo $_SESSION['error']; ?></b></p>

		<ul>
			<?php foreach($_SESSION['form-errors'] as $key => $error) : ?>
				<?php if($key == 'questionComment') : ?>
					<li>Esciba sus <b><?php echo $error ?></b></li>
				<?php elseif($key == 'email-format'): ?>
					<li>Formato incorrecto de <b><?php echo $error ?></b></li>	
				<?php else: ?>
					<li>Esciba su <b><?php echo $error ?></b></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div> <!-- /.form-errors -->
	<?php endif; ?>

	<h2 class="heading">Contáctanos</h2>

	<p class="notice">Nos interesa escucharte. Responderemos a tu comentario lo más pronto posible.</p>

	<form id="contactForm" action="process-email.php" method="POST">
		<div class="name-email-phone-group clearfix">
			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['name'])) ? "class='inputError'" : null; ?>
					type="text"
					name="name"
					placeholder="Nombre Completo:"
					value="<?php echo (isset($_SESSION['old-name'])) ? $_SESSION['old-name'] : null; ?>"
				>
			</div> <!-- /.column -->

			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['email'])) ? "class='inputError'" : null; ?>
					type="email"
					name="email"
					placeholder="Correo Electrónico:"
					value="<?php echo (isset($_SESSION['old-email'])) ? $_SESSION['old-email'] : null; ?>"
				>	
			</div> <!-- /.column -->

			<div class="column">
				<input <?php echo (isset($_SESSION['form-errors']['phone'])) ? "class='inputError'" : null; ?>
					type="text"
					name="phone"
					placeholder="Teléfono (con lada):"
					value="<?php echo (isset($_SESSION['old-phone'])) ? $_SESSION['old-phone'] : null; ?>"
				>
			</div> <!-- /.column -->
		</div> <!-- /.form-group -->

		<div class="form-group">
			<textarea <?php echo (isset($_SESSION['form-errors']['questionComment'])) ? "class='inputError'" : null; ?>
				name="questionComment"
				placeholder="Preguntas y Comentarios:"
				rows="5"				
			><?php echo (isset($_SESSION['old-message'])) ? $_SESSION['old-message'] : null; ?></textarea>
		</div> <!-- /.form-group -->

		<div class="bottom-form clearfix">

			<div class="left-column">
				<div>
					<p>¿ Como prefieres que te contactemos ?</p>
					<label for="by_email">
						<input
							type="checkbox"
							id="by_email"
							name="byEmail"
							value="1"
							<?php echo (isset($_SESSION['old-email-check'])) ? 'checked' : null; ?>
						>&nbsp;E-mail
					</label>
					<label for="by_phone">
						<input
							type="checkbox"
							id="by_phone"
							name="byPhone"
							value="1"
							<?php echo (isset($_SESSION['old-phone-check'])) ? 'checked' : null; ?>
						>&nbsp;Teléfono
					</label>
				</div>
			</div> <!-- /.left-column -->

			<div class="right-column">
				<button type="reset">BORRAR</button>
				<button type="submit">ENVIAR</button>
			</div> <!-- /.right-column -->

		</div> <!-- /.form-group -->

	</form>

	<div class="address">
		<!-- <p>Dirección Instalaciones</p> -->
	</div> <!-- .address -->

	<div id="map-container" class="map">
		<!-- <iframe id="map" src="#" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	</div> <!-- /.map -->

</div> <!-- .contact -->

<script>
$(document).ready(function() {
	$("#contactForm").validate({
		rules: {
			name: {
				required: true,
				minlength: 3
				
			},
	    email: {
	      required: true,
	      email: true
	    },
			phone: {
				required: true,
				minlength: 4
			},
			questionComment: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			name: {
				required: "* Escriba su nombre",
				minlength: "* Escriba por lo menos 4 caracteres"
			},
			
			phone: {
				required: "* Escriba su teléfono (con lada)",
				minlength: "* Escriba por lo menos 4 caracteres"
			},

			email: {
				required: "* Escriba su email",
				email: "* Formato Inválido"
			},

			questionComment: {
				required: "* Escriba sus preguntas y comentarios",
				minlength: "* Escriba por lo menos 3 caracteres"
			},
		}
	});
});
</script>
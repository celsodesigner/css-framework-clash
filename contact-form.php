<!-- ALERT MESSAGES -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#form').submit(function(){
			var dados = jQuery( this ).serialize();
 
			jQuery.ajax({
				type: "POST",
				url: "send-message.php",
				data: dados,
				success: function()
				{
					$('#ok').css("display", "block");
				},
				error: function()
				{
					$('#no').css("display", "block");
				}
			});
			
			return false;
		});
	});
</script>
<!-- END ALLERT MESSAGES -->

<form id="form" action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <div class="col-1-2">
            <label><input name="nome" type="text" id="nome" placeholder="NOME *" required/></label>
            <label><input name="cidade" type="text" id="cidade" placeholder="CIDADE/ESTADO *" required/></label>
            <label><input name="telefone" type="tel" id="telefone" placeholder="TELEFONE"/></label>
        </div>
        <div class="col-1-2">
            <label><input name="celular" type="tel" id="celular" placeholder="CELULAR *" required/></label>
            <label><input name="email" type="email" id="email" placeholder="EMAIL *" required/></label>
            <label><input name="assunto" type="text" id="assunto" placeholder="ASSUNTO *" required /></label>
        </div>
        <div class="col-1-1">
            <label><textarea name="mensagem" rows="6" id="mensagem" placeholder="MENSAGEM *" required></textarea></label>
        </div>
        <p class="required-field">* Campos obrigatórios</p>
        <input type="submit" name="enviar" value= "Enviar" class="button" />
        <input type="reset" name="reset" value="Limpar" class="button" />
    </fieldset>
</form>

<div id="ok" class="alert-messages">
    <ul class="success-message">
        <li><span>Mensagem enviada com sucesso. Responderemos em breve. Obrigado!</span></li>
    </ul>
</div>
<div id="no" class="alert-messages">
    <ul class="error-message">
        <li><span>Erro. Contate o administrador.</span></li>
   </ul>
</div>

<?php

function publiki_hook_javascript_footer() {
	if (!is_front_page()) { ?>

		<script>
			var ctxt = document.querySelector('.wpcf7-submit');
			ctxt.value = 'me lembre das aulas';
		</script>
	
	<?php } ?>

        <script>
			window.onload = function() {
			
			var loading = document.querySelector(".ajax-loader");
			loading.parentElement.style.textAlign = "center";
			loading.style.backgroundImage = "url('https://falcontrader.com.br/viver-de-trade/wp-content/uploads/2019/08/bg_9b0000-16px.gif')";
			loading.style.backgroundRepeat = "no-repeat";
			loading.style.width = "250px";
			loading.style.height = "16px";
			loading.style.margin = "20px 0px 20px 4px";
			loading.style.display = "inline-block";
			loading.style.lineHeight = "14px";
			loading.innerHTML = "<span class='loader-text blink'>Processando Aguarde!!!</span>";
			
			var waittxt = document.querySelector(".loader-text");
			waittxt.style.color = "#ffffff";
			waittxt.style.display = "inline-block";
			waittxt.style.width = "100%";
			waittxt.style.fontWeight = "600";

			var returntxt = document.querySelector(".wpcf7-response-output");
			returntxt.style.border = "2px solid #ffed17";
			returntxt.style.color = "#000000";
			returntxt.style.textAlign = "center";
			returntxt.style.fontWeight = "bold";
			returntxt.style.backgroundColor = "#ffed17";
			};
        </script>
    <?php
}
add_action('wp_footer', 'publiki_hook_javascript_footer');

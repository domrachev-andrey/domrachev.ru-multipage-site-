	<footer class="main-footer">
		<div class="container">
			<section class="footer-company">
				<p>ООО "Домрачев"<br>
					ОГРН 1217700584111<br>
					ИНН 7727478970
				</p>	
			</section>
			<section class="footer-contacts">
				<p>Наши контакты<br>
					<a href="tel:+7(499)793-69-71">+7(499)793-69-71</a><br>
					<a href="mailto:1c@domrachev.ru">1c@domrachev.ru</a>
				</p>	
			</section>
			<section class="footer-social">
				<p>Мы в социальных сетях<br>
					<a href="https://vk.com/domrachev_consulting"><img img src="img/vk.png" alt=""></a>
				</p>	
			</section>
		</div>
	</footer>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		function func_js(){
			var a = "<?php func_php(); ?>";
		}

		var link = document.querySelector(".formsendorder");
		link.addEventListener("submit", function(event) {
			event.preventDefault();
			func_js();
			console.log("Клик по кнопке submit");
		});
	</script>
	<?php
		function func_php(){
			mail('1c@domrachev.ru', 'From site', 'From site');
		}
	?>	
</body>
</html>

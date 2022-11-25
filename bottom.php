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
					<a href="https://vk.com/domrachev_consulting"><img img src="https://domrachev.ru/img/vk.png" alt=""></a>
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
		link.addEventListener("submit", function(event){
			event.preventDefault();
			func_js();
			modal.style.display = "none";
		});
	</script>
	<script>
		<?php
		function func_php(){
			var_dump($_GET);
			$phone = $_GET['phone'];
			$email = $_GET['email'];
			if (!empty($phone) && !empty($email)){
				$name = $_GET['name'];
				$details = $_GET['details'];
				$message = 'Имя: ' . $name .chr(13).chr(10). 'Телефон: ' . $phone .chr(13).chr(10). 'e-mail: ' . $email .chr(13).chr(10). 'Детали: ' . $details .chr(13).chr(10);
				mail('1c@domrachev.ru', 'From site', $message);
			}
		}
		?>	
	</script>
</body>
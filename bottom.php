	<footer class="main-footer">
		<div class="container container-footer">
			<div class="footer-wrapper">
			<div class="footer-company">
				<p>ООО "Домрачев"<br>
					ОГРН 1217700584111<br>
					ИНН 7727478970
				</p>
			</div>
			<div class="footer-contacts">
				<h2>Наши контакты</h2>
				<div class="footer-contacts__link">
					<a href="tel:+7(499)793-69-71">+7(499)793-69-71</a>
					<a href="mailto:1c@domrachev.ru">1c@domrachev.ru</a>
			</div>
			</div>
			<div class="footer-social">
				<h2>Мы в социальных сетях</h2>
				<div class="footer-social__link">
					<a href="https://vk.com/domrachev_consulting" target="_blank"><img src="/assets/img/vk.png" alt="vk"></a>
					<a href="https://www.youtube.com/@domrachevconsulting" target="_blank"><img src="/assets/img/youtube.png" alt="youtube"></a>
					<a href="https://t.me/domrachev_consulting" target="_blank"><img src="/assets/img/telegram.png" alt="telegram"></a>
				</div>
			</div>
			</div>
		</div>
	</footer>
	<div id="id01" class="modal">
		<div class="modal-window">
			<form class="formsendorder" action="#">
				<h2>Заказать звонок</h2>
				<input type="text" placeholder="Ваше имя" name="name" required>
				<input type="text" placeholder="Телефон" name="phone" required>
				<input type="text" placeholder="E-mail" name="email" required>
				<textarea cols="5" rows="5" placeholder="Когда удобно? Опишите кратко вопросы, которые хотите обсудить" name="details" required></textarea>
				<label class="custom-checkbox">
					<input class="custom-checkbox__input" type="checkbox" checked />
					<span class="custom-checkbox__span"></span>
					<span class="custom-checkbox__text">Согласен с обработкой персональных данных</span>
				</label>
				<button type="submit" class="sendorder button">Заказать звонок</button>
				<button onclick="document.getElementById('id01').style.display='none'" class="close" title="Закрыть"><i class="fa fa-times" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		function func_js() {
			var a = "<?php func_php(); ?>";
		}

		var link = document.querySelector(".formsendorder");
		link.addEventListener("submit", function(event) {
			event.preventDefault();
			func_js();
			modal.style.display = "none";
		});
	</script>
	<script>
		<?php
		function func_php()
		{
			var_dump($_GET);
			$phone = $_GET['phone'];
			$email = $_GET['email'];
			if (!empty($phone) && !empty($email)) {
				$name = $_GET['name'];
				$details = $_GET['details'];
				$message = 'Имя: ' . $name . chr(13) . chr(10) . 'Телефон: ' . $phone . chr(13) . chr(10) . 'e-mail: ' . $email . chr(13) . chr(10) . 'Детали: ' . $details . chr(13) . chr(10);
				mail('1c@domrachev.ru', 'From site', $message);
			}
		}
		?>
	</script>
	<script src="/assets/js/index.js"></script>
	<script src="/assets/js/modal.js"></script>
	</body>
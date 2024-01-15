<?php
$pageTitle = "Контакты | 1С Франчайзи Домрачев";
include '../top.php';
?>
<main class="contacts">
	<div class="container">
		<div class="index-item">
			<h1>Контактная информация</h1>
				ООО "Домрачев"<br>
				ОГРН 1217700584111<br>
				ИНН 7727478970<br>
				Расчетный счет 40702810010000959532 в АО "ТИНЬКОФФ БАНК"<br>
				к/c 30101810145250000974, БИК 044525974
		</div>
		<div class="index-item">
				ИП Домрачев Андрей Геннадьевич<br>
				ОГРНИП 315774600076835<br>
				ИНН 121504081278<br>
				Расчетный счет 40802810700002982526 в АО "ТИНЬКОФФ БАНК"<br>
				к/c 30101810145250000974, БИК 044525974
				</div>
			<div class="index-item">
				<h3>Телефон:</h3>

				<a  href="tel:+7(499)793-69-71">+7(499)793-69-71</a>
			</div>
			<div class="index-item">
				<h3>Время работы компании:</h3>
				<div>
				Понедельник&nbsp;&mdash; Пятница с&nbsp;9:00 до&nbsp;19:00
				</div>
				<div>
					Отдел по работе с клиентами и партнерами: <a class="link" href="mailto:1c@domrachev.ru">1c@domrachev.ru</a><br>
					Линия консультаций: <a class="link" href="mailto:hotline@domrachev.ru">hotline@domrachev.ru</a><br>
					Кадры: <a class="link" href="mailto:job@domrachev.ru">job@domrachev.ru</a>
				</div>
				</div>
				<div class="index-item">
					<h3>Мы в социальных сетях</h3>
					<div class="contacts__social">
						<a class="link" href="https://vk.com/domrachev_consulting"  target="_blank">VK</a>
						<a class="link" href="https://www.youtube.com/@domrachevconsulting"  target="_blank">Youtube</a>
						<a class="link" href="https://rutube.ru/channel/29802794/"  target="_blank">Rutube</a>
						<a class="link" href="https://dzen.ru/domrachev_consulting"  target="_blank">Дзен</a>
						<a class="link" href="https://t.me/domrachev_consulting"  target="_blank">Telegram</a>
					</div>
				</div>
			</div>
		</div>
</main>
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
</body>
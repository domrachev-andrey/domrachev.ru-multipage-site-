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

			<a href="tel:+7(499)793-69-71">+7(499)793-69-71</a>
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
				<a class="link" href="https://vk.com/domrachev_consulting" target="_blank">VK</a>
				<a class="link" href="https://www.youtube.com/@domrachevconsulting" target="_blank">Youtube</a>
				<a class="link" href="https://rutube.ru/channel/29802794/" target="_blank">Rutube</a>
				<a class="link" href="https://dzen.ru/domrachev_consulting" target="_blank">Дзен</a>
				<a class="link" href="https://t.me/domrachev_consulting" target="_blank">Telegram</a>
			</div>
		</div>
	</div>
	</div>
</main>
<div class="modals fix-block">
	<div class=" modal-window popup-card form-modal" data-target="forms-feedback">
		<form class="formsendorder" id="feedback-form">
			<h2>Заказать звонок</h2>
			<input type="text" placeholder="Ваше имя" name="feedback-name" required>
			<input type="tel" placeholder="Телефон" name="feedback-phone" required>
			<input type="text" placeholder="E-mail" name="feedback-email" required>
			<textarea cols="5" rows="5" placeholder="Когда удобно? Опишите кратко вопросы, которые хотите обсудить" name="feedback-details" required></textarea>
			<label class="custom-checkbox">
				<input class="custom-checkbox__input" type="checkbox" checked />
				<span class="custom-checkbox__span"></span>
				<span class="custom-checkbox__text">Согласен с <a class="feedback__link">обработкой персональных данных</a></span></span>
			</label>
			<button type="submit" class="sendorder button">Заказать звонок</button>
			<button class="popup-close close" title="Закрыть"><i class="fa fa-times" aria-hidden="true"></i></button>
		</form>
	</div>
</div>
<script src="/assets/js/inputmask.min.js"></script>
<script src="/assets/js/index.js"></script>
<script src="/assets/js/modal.js"></script>
<script src="/assets/js/form.js"></script>
</body>
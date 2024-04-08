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
					<span class="custom-checkbox__text">Согласен с <a href="/privacy-policy" class="feedback__link">обработкой персональных данных</a></span></span>
				</label>
				<button type="submit" class="sendorder button">Заказать звонок</button>
				<button class="popup-close close" title="Закрыть"><i class="fa fa-times" aria-hidden="true"></i></button>
			</form>
		</div>
		<div class="popup-card form-modal" data-target="forms-popup">
			<h2>Записаться на&nbsp;курсы</h2>
			<div id="tinkoff-message" class="tinkoff-message">
				<div class="tinkoff-message__inner">
				<div class="tinkoff-message__text"></div>
				<div class="loader"></div>
				</div>
			</div>
			<script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
			<form class="payform-tinkoff" name="payform-tinkoff" id="payform-tinkoff" enctype="multipart/form-data" autocomplete novalidate>
				<input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="1689274614129">
				<input class="payform-tinkoff-row" type="hidden" name="frame" value="false">
				<input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
				<input class="payform-tinkoff-row" type="hidden" name="receipt" value="">
				<div class="feedback__inner">
					<input class="feedback__input req payform-tinkoff-row" type="text" value = "5000" placeholder="Сумма" name="amount">
					<span class="error-label"></span>
				</div>
				<input class="payform-tinkoff-row" type="hidden" placeholder="Номер заказа" name="order">
				<div class="feedback__inner">
					<input class="feedback__input req payform-tinkoff-row" type="text" value="Курс <Старт в программировании 1C>" name="description">
					<span class="error-label"></span>
				</div>
				<div class="feedback__inner">
					<input class="feedback__input req payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name">
					<span class="error-label"></span>
				</div>
				<div class="feedback__inner">
					<input class="feedback__input req payform-tinkoff-row email" type="email" placeholder="E-mail" name="email">
					<span class="error-label"></span>
				</div>
				<div class="feedback__inner">
					<input class="feedback__input req payform-tinkoff-row input-phone" type="tel" placeholder="Контактный телефон" name="phone">
					<span class="error-label"></span>
				</div>

				<input class="payform-tinkoff-row payform-tinkoff-btn" type="submit" value="Оплатить">
				<div class="feedback__checkbox">
					<label class="feedback-details">
						<input class="feedback-details__input req" id="input-checkbox" type="checkbox" name="consent" checked />
						<span class="feedback-details__span"></span>
						<span>Я&nbsp;согласен на&nbsp;обработку моих персональных данных согласно
							<a class="feedback__link" href="/privacy-policy">условиям</a></span>
					</label>
				</div>
				<span class="error-label-checkbox">согласие на&nbsp;обработку обязательно для
					отправки
					данных</span>
			</form>



			<button class="popup-close close" title="Закрыть"><i class="fa fa-times" aria-hidden="true"></i></button>
		</div>
	</div>




	<script src="/assets/js/inputmask.min.js"></script>
	<script src="/assets/js/index.js"></script>
	<script src="/assets/js/modal.js"></script>
	<script src="/assets/js/form.js"></script>

	</body>
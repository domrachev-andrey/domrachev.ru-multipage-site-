<?php
$pageTitle = "Обучение | Франчайзи Домрачев";
include '../top1.php';
include 'key.php';
include '../top2.php';
?>
	<main class="training">
		<div class="container">
			<h1>Обучение</h1>
		<div class="index-item">
			<p>
				Научитесь работать в любых программах 1С на уровне опытного пользователя.
				Преподаватели Учебного центра сертифицированы по всем типовым конфигурациям 1С:<br>
				1С:Бухгалтерия 8<br>
				1С:Зарплата и управление персоналом 8<br>
				1С:Управление торговлей 8<br>
				1С:Документооборот 8<br>
				1С:Управление нашей фирмой 8<br>
				1С:Комплексная автоматизация 8<br>
				1С:ERP Управление предприятием 2<br>
				И др.
			</p>
<script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
<form class="payform-tinkoff" name="payform-tinkoff" id="payform-tinkoff">
    <input class="payform-tinkoff-row" type="hidden" name="terminalkey" value="1689274614129">
    <input class="payform-tinkoff-row" type="hidden" name="frame" value="false">
    <input class="payform-tinkoff-row" type="hidden" name="language" value="ru">
    <input class="payform-tinkoff-row" type="hidden" name="receipt" value="">
    <input class="payform-tinkoff-row" type="text" placeholder="Сумма заказа" name="amount" required>
    <input class="payform-tinkoff-row" type="hidden" placeholder="Номер заказа" name="order">
    <input class="payform-tinkoff-row" type="text" placeholder="Описание заказа" name="description">
    <input class="payform-tinkoff-row" type="text" placeholder="ФИО плательщика" name="name">
    <input class="payform-tinkoff-row" type="email" placeholder="E-mail" name="email">
    <input class="payform-tinkoff-row" type="tel" placeholder="Контактный телефон" name="phone">
    <input class="payform-tinkoff-row payform-tinkoff-btn" type="submit" value="Оплатить">
</form>

<script type="text/javascript">
    const TPF = document.getElementById("payform-tinkoff");

    TPF.addEventListener("submit", function (e) {
        e.preventDefault();
        const {description, amount, email, phone, receipt} = TPF;

        if (receipt) {
            if (!email.value && !phone.value)
                return alert("Поле E-mail или Phone не должно быть пустым");

            TPF.receipt.value = JSON.stringify({
                "EmailCompany": "mail@mail.com",
                "Taxation": "patent",
                "Items": [
                    {
                        "Name": description.value || "Оплата",
                        "Price": amount.value + '00',
                        "Quantity": 1.00,
                        "Amount": amount.value + '00',
                        "PaymentMethod": "full_prepayment",
                        "PaymentObject": "service",
                        "Tax": "none"
                    }
                ]
            });
        }
        pay(TPF);
    })
</script>
 
		</div>
		</div>
	</main>
<?php
	include '../bottom.php';
?>

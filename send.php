<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Массив с данными всех форм
    $forms = array(
        "Tinkoff" => array(
            "Имя" => isset($_POST["name"]) ? $_POST["name"] : "",
            "Телефон" => isset($_POST["phone"]) ? $_POST["phone"] : "",
            "Почта" => isset($_POST["email"]) ? $_POST["email"] : ""
        ),
        "Заказ звонка" => array(
            "Имя" => isset($_POST["feedback-name"]) ? $_POST["feedback-name"] : "",
            "Телефон" => isset($_POST["feedback-phone"]) ? $_POST["feedback-phone"] : "",
            "Почта" => isset($_POST["feedback-email"]) ? $_POST["feedback-email"] : "",
            "Сообщение" => isset($_POST["feedback-details"]) ? $_POST["feedback-details"] : ""
        ),
        // Добавьте другие формы здесь
    );

    // Общие заголовки для всех сообщений
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Отправка сообщений
    foreach ($forms as $form_name => $form_data) {
        if (!empty(array_filter($form_data))) {
            $message = '<html><body>';
            $message .= '<style>';
            $message .= 'body { font-family: Arial, sans-serif; background-color: #2F2929; }';
            $message .= '.container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #00A460;color: #272727 }';
            $message .= '.paragraph { margin-bottom: 10px; }';
            $message .= '</style>';
            $message .= '<div class="container">';
            $message .= "<h3> Данные формы ($form_name):</h3>";
            foreach ($form_data as $field_name => $field_value) {
                $message .= "<p class='paragraph'>$field_name: <strong>$field_value</strong></p>";
            }
            $message .= '</div>';
            $message .= '</body></html>';

            $to = "1c@domrachev.ru"; // Укажите адрес электронной почты
            $subject = "Данные из формы $form_name";
            mail($to, $subject, $message, $headers);
        }
    }
}
?>

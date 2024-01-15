<?php
$pageTitle = "1С Франчайзи Домрачев консалтинг";
include 'top.php';
?>
<main class="main-page">
	<div class="container">
		<div class="main-page__wrapper">
		<?php
		$items = [
    [
        "link" => "soft",
        "img_src" => "img/logo1cfm.png",
        "title" => "Программы 1С"
    ],
    [
        "link" => "implementation",
        "img_src" => "img/fran1cp.png",
        "title" => "Внедрение 1С"
    ],
    [
        "link" => "its",
        "img_src" => "img/1citsm.png",
        "title" => "1С ИТС"
    ],
    [
        "link" => "1cfresh",
        "img_src" => "img/1cfresh.png",
        "title" => "1С Фреш"
    ],
];

foreach ($items as $item) {
    echo '<div class="main-page__item">';
    echo "<a href='{$item['link']}'></a>";
    echo "<img src='{$item['img_src']}' alt='Изображение 1С'>";
    echo "<h2>{$item['title']}</h2>";
    echo '</div>';
}
?>
		</div>
	</div>
</main>
<?php
include 'bottom.php';
?>
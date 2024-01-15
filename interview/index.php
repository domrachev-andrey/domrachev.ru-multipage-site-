<?php
$pageTitle = "Обучение программированию в 1С | Франчайзи Домрачев";
include '../top1.php';
include 'key.php';
include '../top2.php';
?>
<main class="video">
	<div class="container">
		<h1>Обучение программированию в 1С</h1>
		<div class="video__wrapper">
			<?php
			$video = [
				[
					"lesson" => "Собеседование на программиста 1С",
					"video" => "https://www.youtube.com/embed/Yra6Shxej70",
					"links" => [
							"VK" => "https://vk.com/video-217010365_456239039",
							"RuTube" => "https://rutube.ru/video/d0fb17c0a95e588386bb63cf8a297650/",
							"Dzen" => "https://dzen.ru/video/watch/6485f7eed940955d100fbeac?share_to=link"
					]
			],
			[
					"lesson" => "Задача 2. Регистр сведений - последний и предпоследний срез",
					"video" => "https://www.youtube.com/embed/Qg2oB1Rsa0Y",
					"links" => [
							"VK" => "https://vk.com/video-217010365_456239040",
							"RuTube" => "https://rutube.ru/video/366d5ab2a6d9842c01a9abafc0d94f7e/",
							"Dzen" => "https://dzen.ru/video/watch/6497108b612ee4447370750b"
					]
			]
			];
			foreach ($video as $article) {
				echo '<div class="index-item">';
				echo "<h3>{$article['lesson']}</h3>";
				echo "<div style='position: relative; padding-bottom: 56.25%;'><iframe style='position: absolute; width: 100%; height: 100%;' src='{$article['video']}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
				echo '<div class="video__link">';
				foreach ($article['links'] as $platform => $link) {
					echo "<a class='link' target='_blank' href='{$link}'>{$platform}</a>";
				}
				echo '</div></div>';
			}
			?>
		</div>
	</div>
</main>
<?php
include '../bottom.php';
?>

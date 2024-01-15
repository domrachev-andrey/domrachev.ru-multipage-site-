<?php
$pageTitle = "Курс программирования 1С | Франчайзи Домрачев";
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
					"lesson" => "Урок 1. Установка учебной версии 1С",
					"video" => "https://www.youtube.com/embed/t41LIorFhwM",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239018",
						"RuTube" => "https://rutube.ru/video/809c3023929f6948206164ba175c79f9/",
						"Dzen" => "https://dzen.ru/video/watch/63b577e87fc57c5d5d472409?share_to=link"
					]
				],
				[
					"lesson" => "Урок 2. Создание учебной базы 1С",
					"video" => "https://www.youtube.com/embed/iyNW4dOyR2A",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239020",
						"RuTube" => "https://rutube.ru/video/b7cec40a3f3ab374f34ad20176cce5bf/",
						"Dzen" => "https://dzen.ru/video/watch/63bd762e491ee17bd9de6cc1?share_to=link"
					]
				],
				[
					"lesson" => "Урок 3. \"Hello, world\" в 1С",
					"video" => "https://www.youtube.com/embed/vweWD5Hs1v4",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239023",
						"RuTube" => "https://rutube.ru/video/10aa46c55a1ee06421cac50d56e3d168/",
						"Dzen" => "https://dzen.ru/video/watch/63c19d4467ba7f28a736fd3c?share_to=link"
					]
				],
				[
					"lesson" => "Урок 4. Переменные в 1С",
					"video" => "https://www.youtube.com/embed/eZMAE_nZH1s",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239025",
						"RuTube" => "https://rutube.ru/video/dea53dc0ddf8f26ba3157e40e8bb645b/",
						"Dzen" => "https://dzen.ru/video/watch/63cd73b260fd03712209f3ed?share_to=link"
					]
				],
				[
					"lesson" => "Урок 5. Примитивные типы в 1С",
					"video" => "https://www.youtube.com/embed/BRfKfwVVciE",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239026",
						"RuTube" => "https://rutube.ru/video/61e3f56b4548a20a611f239ad3c9d0e5/",
						"Dzen" => "https://dzen.ru/video/watch/63d5606ccbe4534dd47896d5?share_to=link"
					]
				],
				[
					"lesson" => "Урок 6. Условия в 1С",
					"video" => "https://www.youtube.com/embed/jV1t24Co4yA",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239027",
						"RuTube" => "https://rutube.ru/video/f8868179354c89169bf744c3b0c9b206/",
						"Dzen" => "https://dzen.ru/video/watch/63d9056fedfd6e0f0e7fcd54?share_to=link"
					]
				],
				[
					"lesson" => "Урок 7. Массивы в 1С",
					"video" => "https://www.youtube.com/embed/T0xX3ni-_s0",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239028",
						"RuTube" => "https://rutube.ru/video/9411b22b9eaef7d6ec30944e12169d79/",
						"Dzen" => "https://dzen.ru/video/watch/63e2459f00d5cb197f3a3c6e?share_to=link"
					]
				],
				[
					"lesson" => "Урок 8. Циклы в 1С (часть 1)",
					"video" => "https://www.youtube.com/embed/UqlSQ0u1tIs",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239029",
						"RuTube" => "https://rutube.ru/video/c20bbf884fc3fb9040cf7b36d55f2d52/",
						"Dzen" => "https://dzen.ru/video/watch/63e7b7b83672ed09e3c79df7?share_to=link"
					]
				],
				[
					"lesson" => "Урок 9. Циклы в 1С (часть 2)",
					"video" => "https://www.youtube.com/embed/a--O9heNQrA",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239030",
						"RuTube" => "https://rutube.ru/video/522656612a11a3ea314b44b69e7c2de7/",
						"Dzen" => "https://dzen.ru/video/watch/63f0ba0b207f8f08e7a515ee?share_to=link"
					]
				],
				[
					"lesson" => "Урок 10. Процедуры и функции в 1С (часть 1)",
					"video" => "https://www.youtube.com/embed/0cipRCxJoyc",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239031",
						"RuTube" => "https://rutube.ru/video/bc296c9b9d310ff7481635bfdebb3563/",
						"Dzen" => "https://dzen.ru/video/watch/63fa008b3b6ad87fb5057c17?share_to=link"
					]
				],
				[
					"lesson" => "Урок 11. Процедуры и функции в 1С (часть 2)",
					"video" => "https://www.youtube.com/embed/9WILtwzIP4M",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239032",
						"RuTube" => "https://rutube.ru/video/32a86c3c1117399d79bcf82596bdc3b1",
						"Dzen" => "https://dzen.ru/video/watch/64038caa514e2803c30ea930?share_to=link"
					]
				],
				[
					"lesson" => "Урок 12. Процедуры и функции в 1С (часть 3)",
					"video" => "https://www.youtube.com/embed/64cvASUA66E",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239033",
						"RuTube" => "https://rutube.ru/video/1dd318dae17fbb97443df899d710e086/",
						"Dzen" => "https://dzen.ru/video/watch/64073b109949f4747db18a61?share_to=link"
					]
				],
				[
					"lesson" => "Урок 13. Структура программного модуля в 1С",
					"video" => "https://www.youtube.com/embed/XcbxANuMNio",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239034",
						"RuTube" => "https://rutube.ru/video/756dab0a1a57c205c01f8bb6f4006f19/",
						"Dzen" => "https://dzen.ru/video/watch/640b5aa3352af862c463f8b9?share_to=link"
					]
				],
				[
					"lesson" => "Урок 14. Справочники в 1С (часть 1)",
					"video" => "https://www.youtube.com/embed/R3bmEikb_Wc",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239035",
						"RuTube" => "https://rutube.ru/video/34b21f904711352f79a0a1ec5ec4986e/",
						"Dzen" => "https://dzen.ru/video/watch/644e29e90726a46417a7ce7e?share_to=link"
					]
				],
				[
					"lesson" => "Урок 15. Справочники в 1С (часть 2)",
					"video" => "https://www.youtube.com/embed/6TO0vA7G_34",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239036",
						"RuTube" => "https://rutube.ru/video/0e206030a3d04ebab770ea4565c2d87f/",
						"Dzen" => "https://dzen.ru/video/watch/6455594fee01843ac38ba8d7"
					]
				],
				[
					"lesson" => "Урок 16. Справочники в 1С (часть 3)",
					"video" => "https://www.youtube.com/embed/GOCWFgRrYrk",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239037",
						"RuTube" => "https://rutube.ru/video/7772638a36a7478b8ea21a69714e6a90/",
						"Dzen" => "https://dzen.ru/video/watch/647a4d54cdf57971265cb220"
					]
				],
				[
					"lesson" => "Урок 17. Справочники в 1С (часть 4)",
					"video" => "https://www.youtube.com/embed/yY7LMbqGhic",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239043",
						"RuTube" => "https://rutube.ru/video/644740a6d0ae7dc6c80c966a040fc2b7/",
						"Dzen" => "https://dzen.ru/video/watch/64cfb5e62b27db0318bfa7d3"
					]
				],
				[
					"lesson" => "Урок 18. Справочники в 1С (часть 5)",
					"video" => "https://www.youtube.com/embed/eLtGIChReJ8",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239044",
						"RuTube" => "https://rutube.ru/video/741c3337fe0240e5c7e788e65cee6388/",
						"Dzen" => "https://dzen.ru/video/watch/652c1f5bd141d60240c4ba95"
					]
				],

				[
					"lesson" => "Урок 19. Документы в 1С (часть 1)",
					"video" => "https://www.youtube.com/embed/QrvzEshiz78",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239047",
						"RuTube" => "https://rutube.ru/video/private/9eeda815d7df2cf392431cd2a60b968c/",
						"Dzen" => "https://dzen.ru/video/watch/65496103400a6057ac80d5d4"
					]
				],

				[
					"lesson" => "Урок 20. Документы в 1С (часть 2)",
					"video" => "https://www.youtube.com/embed/1hJ1Fam6ycQ",
					"links" => [
						"VK" => "https://vk.com/video-217010365_456239050",
						"RuTube" => "https://rutube.ru/video/1b2e44a1c423f54ed0b31af3f5061c2d",
						"Dzen" => "https://dzen.ru/video/watch/6597fafb4fb36f29990ddd27"
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
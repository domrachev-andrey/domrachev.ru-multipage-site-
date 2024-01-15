<?php
$pageTitle = "Лайфхаки 1С | Франчайзи Домрачев";
include '../top1.php';
include 'key.php';
include '../top2.php';
?>

<main class="video">
    <div class="container">
        <h1>Лайфхаки 1С</h1>
        <div class="video__wrapper">
            <?php
            $videoItem = [
							[
                "lesson" => "Случай 1. Основная таблица динамического списка задана неверно. Не задан ни текст запроса, ни основная таблица динамического списка.",
                "video" => "https://www.youtube.com/embed/H5vtXjoM17s",
                "links" => [
                    "VK" => "https://vk.com/video-217010365_456239042",
                    "RuTube" => "https://rutube.ru/video/7135111a98e692b907377f6b2ca62fe2/?r=wd",
                    "Dzen" => "https://dzen.ru/video/watch/64a07be0939a601a8db6b754?share_to=link"
                ]
							]
            ];
            foreach ($videoItem as $item) {
                echo '<div class="index-item">';
                echo "<h3>{$item['lesson']}</h3>";
                echo "<div style='position: relative; padding-bottom: 56.25%;'><iframe style='position: absolute; width: 100%; height: 100%;' src='{$item['video']}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
                echo '<div class="video__link">';
                foreach ($item['links'] as $platform => $link) {
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

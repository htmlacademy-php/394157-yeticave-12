<?php
require_once('helpers.php');
require_once('data.php');
$is_auth = rand(0, 1);
$user_name = 'Сайфутдинов Руслан'; // укажите здесь ваше имя
$title = 'GifTube - Главная страница';


$page_content = include_template('main.php', [
    'categories' => $categories,
    'lots' => $lots,
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
	'categories' => $categories,
	'is_auth' => $is_auth,
	'user_name' => $user_name,
	'title' => $title,
]);

print($layout_content);
?>
<?php
require_once('helpers.php');
require_once('data.php');

function esc($str) {
	$text = htmlspecialchars($str);

	return $text;
}

$page_content = include_template('main.php', [
    'categories' => $categories,
    'lots' => $lots
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
	'categories' => $categories,
    'title' => 'GifTube - Главная страница'
]);

print($layout_content);
?>
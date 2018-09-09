<?php
/*Подключаем библиотеку JQUERY*/
wp_enqueue_script("jquery");
/*Подключаем JavaScript из файла myjs*/
wp_enqueue_script('newscript', get_stylesheet_directory_uri() . '/myjs.js');
?>
<?php 
	add_action('wp_enqueue_scripts', 'childhood_scripts');
	//энкю_скриптс отслеживает как стили так и скрипты, те сначала стиль потом скрипт подключим
	
	function childhood_scripts() {

		wp_enqueue_style('childhood-style', get_stylesheet_uri() );

		//первый название со стилем, чтобы отличить, второй аргумент какой именно файл. это стандартный хук
		// когда будут подключаться скрипты мы туда впихнем доп стиль

		wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true) ;

		//название скрипта, путь начало+продолжение через точку, зависимость, хз, и булиновое значение в футере или нет, у нас "да" поэтому тру
		//зависимость можно куказать от джейкверри, он сам подключен в wp всегда изначально
	};

	add_theme_support('custom-logo');
	add_theme_support( 'post-thumbnails' ); //для вывода миниатюры постов (делается для превью игрушек)

?>
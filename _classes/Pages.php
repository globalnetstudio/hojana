<?php

class Pages {

	public static function home()
	{
		return [
			'page_title'       => '',
			'page_name'        => 'home',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/home.php',
		];
	}

	public static function contact()
	{
		return [
			'page_title'       => ' - Contacto',
			'page_name'        => 'contact',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/contact.php',
		];
	}

	public static function thanks()
	{
		return [
			'page_title'       => ' - Gracias',
			'page_name'        => 'thanks',
			'meta_robots'      => 'noindex, nofollow',
			'meta_description' => '',
			'page_view'        => '_views/thanks.php',
		];
	}
}
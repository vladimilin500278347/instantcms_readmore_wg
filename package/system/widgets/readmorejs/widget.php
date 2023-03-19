<?php

/**
 * Сделано пользоватем https://instantcms.ru/users/12494
 * vladimilin500278347@gmail.com
 * https://www.facebook.com/vladimilin
 * Виджет распростроняется как есть, без каких бы то ни было гарантий!
 */
class widgetReadmorejs extends cmsWidget
{

	public function run ()
	{
		$this->is_title = false;
		$this->setWrapper ( 'wrapper_plain' );

		return array ();

	}

}

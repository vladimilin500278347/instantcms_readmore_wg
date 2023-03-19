<?php

/**
 * Сделано пользоватем https://instantcms.ru/users/12494
 * vladimilin500278347@gmail.com
 * https://www.facebook.com/vladimilin
 * Виджет распростроняется как есть, без каких бы то ни было гарантий!
 */
class formWidgetReadmorejsOptions extends cmsForm
{

	public function init ()
	{

		return array (

			array (
				'type'   => 'fieldset',
				'title'  => LANG_OPTIONS,
				'childs' => array (

					new fieldString( 'options:readmorejs_content', array (
						'title'   => LANG_WD_READMOREJS_CONTENT,
						'hint'    => LANG_WD_READMOREJS_CONTENT_HINT,
						'rules'   => array (
							array ( 'required' ),
						),
						'default' => '.field.ft_html.f_teaser > div',
					) ),
					new fieldString( 'options:readmorejs_words', array (
						'title'   => LANG_WD_READMOREJS_WORDS,
						'hint'    => LANG_WD_READMOREJS_WORDS_HINT,
						'rules'   => array (
							array ( 'required' ),
						),
						'default' => '10',
					) ),
					new fieldString( 'options:readmorejs_class', array (
						'title'   => LANG_WD_READMOREJS_CLASS,
						'hint'    => LANG_WD_READMOREJS_CLASS_HINT,
						'default' => 'rm-link',
					) ),
					new fieldString( 'options:readmorejs_containerclass', array (
						'title'   => LANG_WD_READMOREJS_CONTAINERCLASS,
						'hint'    => LANG_WD_READMOREJS_CONTAINERCLASS_HINT,
						'default' => 'rm-more_value',
					) ),
				),
			),
			array (
				'type'   => 'fieldset',
				'title'  => LANG_WD_READMOREJS_OPTIONS_TITLES,
				'childs' => array (

					new fieldString( 'options:readmorejs_lessLink', array (
						'title'   => LANG_WD_READMOREJS_LESSLINK,
						'rules'   => array (
							array ( 'required' ),
						),
						'default' => LANG_WD_READMOREJS_LESSLINK_DEFAULT,
					) ),
					new fieldString( 'options:readmorejs_moreLink', array (
						'title'   => LANG_WD_READMOREJS_MORELINK,
						'rules'   => array (
							array ( 'required' ),
						),
						'default' => LANG_WD_READMOREJS_MORELINK_DEFAULT,
					) ),
					new fieldColor( 'options:readmorejs_color', array (
						'title' => LANG_WD_READMOREJS_COLOR,
					) ),
					new fieldColor( 'options:readmorejs_backcolor', array (
						'title' => LANG_WD_READMOREJS_BACKCOLOR,
					) ),
					new fieldColor( 'options:readmorejs_bordercolor', array (
						'title' => LANG_WD_READMOREJS_BORDERCOLOR,
					) ),
					new fieldString( 'options:readmorejs_borderradius', array (
						'title' => LANG_WD_READMOREJS_BORDERRADIUS,
					) ),
					new fieldString( 'options:readmorejs_fontsize', array (
						'title' => LANG_WD_READMOREJS_FONTSIZE,
					) ),
					new fieldNumber( 'options:readmorejs_fontweight', array (
						'title' => LANG_WD_READMOREJS_FONTWEIGHT,
					) ),

				),
			),
		);
	}
}

<?php
/**
 * Сделано пользоватем https://instantcms.ru/users/12494
 * vladimilin500278347@gmail.com
 * https://www.facebook.com/vladimilin
 * Виджет распростроняется как есть, без каких бы то ни было гарантий!
 */

$this->addCSS ( $this->getTplFilePath ( 'widgets/readmorejs/css/readmorejs.css', false ) );
$this->addJS ( $this->getTplFilePath ( 'widgets/readmorejs/js/readmorejs.min.js', false ) );
?>

<?php ob_start (); ?>
<script>
	$(document).ready(function () {
		$readMoreJS.init({
			target: '<?php echo $widget -> options[ 'readmorejs_content' ]; ?>',
			numOfWords: <?php echo $widget -> options[ 'readmorejs_words' ]; ?>,
			moreLink: '<?php echo $widget -> options[ 'readmorejs_moreLink' ]; ?>...',
			lessLink: '<?php echo $widget -> options[ 'readmorejs_lessLink' ]; ?>',
			linkClass: '<?php echo $widget -> options[ 'readmorejs_class' ]; ?>',
			<?php if ( ! empty($widget -> options[ 'readmorejs_color' ])) { echo 'linkColor: "' . 'color:' . $widget -> options[ 'readmorejs_color' ] . ';",'; } ?>
			<?php if ( ! empty($widget -> options[ 'readmorejs_backcolor' ])) { echo 'linkBackColor: "' . 'background-color:' . $widget -> options[ 'readmorejs_backcolor' ] . ';",'; } ?>
			<?php if ( ! empty($widget -> options[ 'readmorejs_bordercolor' ])) { echo 'linkBorderColor: "' . 'border-color:' . $widget -> options[ 'readmorejs_bordercolor' ] . ';",'; } ?>
			<?php if ( ! empty($widget -> options[ 'readmorejs_borderradius' ])) { echo 'linkBorderRadius: "' . 'border-radius:' . $widget -> options[ 'readmorejs_borderradius' ] . 'px' . ';",'; } ?>
			<?php if ( ! empty($widget -> options[ 'readmorejs_fontsize' ])) { echo 'linkFontSize: "' . 'font-size:' . $widget -> options[ 'readmorejs_fontsize' ] . 'px' . ';",'; } ?>
			<?php if ( ! empty($widget -> options[ 'readmorejs_fontweight' ])) { echo 'linkFontWeight: "' . 'font-weight:' . $widget -> options[ 'readmorejs_fontweight' ] . ';",'; } ?>
			containerClass: '<?php echo $widget -> options[ 'readmorejs_containerclass' ]; ?>'
		});
	});
</script>
<?php $this->addBottom ( ob_get_clean () ); ?>

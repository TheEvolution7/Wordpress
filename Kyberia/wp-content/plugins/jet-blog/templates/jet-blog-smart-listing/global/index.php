<?php
/**
 * Posts listing wrapper
 */
$settings   = $this->_get_widget_settings();
$title      = $settings['block_title'];
$tag        = jet_blog_tools()->validate_html_tag( $settings['title_tag'] );
$scroll_top = ! empty( $settings['scroll_top'] ) ? filter_var( $settings['scroll_top'], FILTER_VALIDATE_BOOLEAN ) : false;

?>
<div class="jet-smart-listing-wrap" data-settings='<?php $this->_export_settings(); ?>' data-page="1" data-term="0" data-scroll-top=<?php echo $scroll_top;?>>
	<div class="jet-smart-listing__heading"><?php

		if ( $title ) {
			printf( '<%1$s class="jet-smart-listing__title">%2$s</%1$s>', $tag, $title );
		} else {
			echo '<span class="jet-smart-listing__title-placeholder"></span>';
		}

		$this->_get_filters();

	?></div>
	<div class="<?php $this->_listing_classes(); ?>"><?php
		$this->_render_posts();
	?></div>
	<?php $this->_get_arrows(); ?>
</div>
<div class="jet-smart-listing-loading"></div>
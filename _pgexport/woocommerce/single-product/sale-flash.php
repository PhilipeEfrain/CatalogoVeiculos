<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

if ( $product->is_on_sale() ) : ?>
<div class="bg-danger fs-4 fw-bold pb-2 pe-3 position-absolute ps-3 pt-2 rounded-end text-white" style="top: 50px; left: 0;">
    <?php _e( 'Desconto de', 'modelo2' ); ?> <span><?php echo PG_WC_Helper::getSavedAmount( $product, 'percent', true ) ?></span> 
</div>        
<?php endif; ?>

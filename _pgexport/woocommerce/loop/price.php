<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $product;
?>
<div class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
    <?php echo $product->get_price_html(); ?>
</div>
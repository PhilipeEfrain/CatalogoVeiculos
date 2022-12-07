<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
    return;
}

$product_rating_count = $product->get_rating_count();
$product_review_count = $product->get_review_count();
$product_rating      = $product->get_average_rating();

if ( $product_rating_count > 0 ) : ?>     
<div class="gy-2 row">
</div>
<?php endif; ?>
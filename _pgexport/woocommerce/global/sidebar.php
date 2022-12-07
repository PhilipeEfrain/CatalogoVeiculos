<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( is_active_sidebar( 'shop' ) ) { ?>
<div class="activeboardradius bg-dark col col-md col-sm order-first order-md-0 order-sm-first text-white">
    <?php dynamic_sidebar( 'shop' ); ?>
</div>
<?php } ?>
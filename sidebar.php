<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" style="width: 300px;">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
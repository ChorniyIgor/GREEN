<?php wp_enqueue_script( 'light-slider');?>
<?php wp_enqueue_script( 'getg-main-script');?>


<div class="light-slider light-slider-fullwidth ">
    <ul class="itemwrap">
        <?php  echo do_shortcode($content); ?>
    </ul>
    <nav>
        <a class="prev" href="#"><i class="fas fa-angle-left"></i></a>
        <a class="next" href="#"><i class="fas fa-angle-right"></i></a>
    </nav>
</div>

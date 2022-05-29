<?php
get_header();
get_template_part('template-parts/preloader');
get_template_part('template-parts/header-top');
get_template_part('template-parts/header-menu');
?>

<div id="bashir-rased-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php get_template_part('template-parts/blog-content','single'); ?>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</div>

<?php get_footer(); ?>
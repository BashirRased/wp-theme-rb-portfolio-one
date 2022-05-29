<li class="bashir-rased-portfolio-active" data-filter="*">
    <?php esc_html_e('all','bashir-rased'); ?>
</li>

<?php
$bashir_rased_tags = get_terms(array(
    'taxonomy'    => 'portfolio_tag'
));

if(!empty($bashir_rased_tags)):
foreach($bashir_rased_tags as $bashir_rased_tag): ?>

<li data-filter="<?php echo ".".$bashir_rased_tag->slug; ?>">
    <?php echo wp_kses_post($bashir_rased_tag->name); ?>  
</li>

<?php
endforeach;
elseif (empty($bashir_rased_tags)):
else: ?>

<li data-filter=".graphic-design">
    <?php esc_html_e('graphic design','bashir-rased'); ?>
</li>
<li data-filter=".web-design">
    <?php esc_html_e('web design','bashir-rased'); ?>
</li>
<li data-filter=".web-development">
    <?php esc_html_e('web development','bashir-rased'); ?>
</li>
<li data-filter=".wordpress">
    <?php esc_html_e('WordPress','bashir-rased'); ?>
</li>
<li data-filter=".laravel">
    <?php esc_html_e('laravel','bashir-rased'); ?>
</li>

<?php endif; ?>
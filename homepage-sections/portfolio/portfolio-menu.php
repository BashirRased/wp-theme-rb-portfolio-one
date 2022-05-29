<?php
/**
 * The template for displaying frontpage portfolio section
 *
 * Part of portfolio section menu
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */

?>

<li class="bashir-rased-portfolio-active" data-filter="*">
    <?php esc_html_e('all','bashir-rased'); ?>
</li>

<?php
if(has_term('portfolio_tag')){
    $bashir_rased_tags = get_terms(array(
        'taxonomy'    => 'portfolio_tag'
    ));
}

if(!empty($bashir_rased_tags) && isset($bashir_rased_tags)):
foreach ($bashir_rased_tags as $bashir_rased_tag):

$bashir_rased_tag_link = $bashir_rased_tag->slug;
$bashir_rased_tag_name = $bashir_rased_tag->name;
?>

<li data-filter="<?php echo esc_attr(".".wp_kses_post($bashir_rased_tag_link));?>">
    <?php
	printf(
		/* translators: %s: portfolio menu list */
		__('%s','bashir-rased'),
		$bashir_rased_tag_name
	);
    ?>
</li>

<?php
endforeach;
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
<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section title last
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.0.9
 */
 
$bashir_rased_data = get_option('bashir_rased_theme_option');

if(is_array($bashir_rased_data['bashir-rased-header-title-last']) || is_object($bashir_rased_data['bashir-rased-header-title-last'])){
	$bashir_rased_designations = $bashir_rased_data['bashir-rased-header-title-last'];
}

if (isset($bashir_rased_designations) && !empty($bashir_rased_designations)) :

$bashir_rased_count = 0;
foreach ($bashir_rased_designations as $bashir_rased_designation):
		$bashir_rased_count++;
	if ($bashir_rased_count === 1) {
		$bashir_rased_count = "";
	}
	else {
		$bashir_rased_count = ", "; 
	}    
?>

    <span class="bashir-rased-type-effect-skills">
        <?php
		printf(
			/* translators: %s: type effect skills */
			__('%1$s%2$s','bashir-rased'),
			$bashir_rased_count,
			$bashir_rased_designation['bashir-rased-header-title-last-option']
		);		 
        ?>		 
    </span>

<?php        
    endforeach;
else: ?>
<span class="bashir-rased-type-effect-skills">
    <?php esc_html_e('Designer, Developer, Freelancer','bashir-rased'); ?>
</span>
<?php endif; ?>


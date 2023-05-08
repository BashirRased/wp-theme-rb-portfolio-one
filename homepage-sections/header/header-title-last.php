<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section title last
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

$bashir_rased_data = get_option( 'bashir_rased_theme_option' );

if ($bashir_rased_data) {
	$bashir_rased_designations = $bashir_rased_data['bashir-rased-header-title-last'];
}

if (!empty($bashir_rased_designations)) :

$bashir_rased_count = 0;
foreach ($bashir_rased_designations as $bashir_rased_designation):
		$bashir_rased_count++;
	if ($bashir_rased_count === 1) {
		$bashir_rased_count = "";
	}
	else {
		$bashir_rased_count = ", "; 
	} 
	
$bashir_rased_header_title_last_option = $bashir_rased_designation['bashir-rased-header-title-last-option'];

if (!empty($bashir_rased_header_title_last_option)) :
?>

    <span class="bashir-rased-type-effect-skills">
        <?php
		printf(
			/* translators: 
			%1$s: , 
			%2$s: type effect skills 
			*/
			'%1$s%2$s',
			$bashir_rased_count,
			esc_html($bashir_rased_header_title_last_option,'bashir-rased')
		);		 
        ?>		 
    </span>

<?php
	endif;
    endforeach;
?>

<?php endif; ?>


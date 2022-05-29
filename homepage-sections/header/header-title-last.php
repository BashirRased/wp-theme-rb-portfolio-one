<?php
/**
 * The template for displaying frontpage header section
 *
 * Part of header section title last
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.2
 */
 
global $bashir_rased_data;

if($bashir_rased_data) :

$bashir_rased_designations = $bashir_rased_data['bashir-rased-header-title-last'];

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
	
$bashir_rased_header_title_last_option = $bashir_rased_designation['bashir-rased-header-title-last-option'];

if (isset($bashir_rased_header_title_last_option) && !empty($bashir_rased_header_title_last_option)) :
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

<?php else: ?>
<span class="bashir-rased-type-effect-skills">
    <?php esc_html_e('Designer, Developer, Freelancer','bashir-rased'); ?>
</span>

<?php
	endif;
    endforeach;
	else:
?>
<span class="bashir-rased-type-effect-skills">
    <?php esc_html_e('Designer, Developer, Freelancer','bashir-rased'); ?>
</span>
<?php endif; ?>

<?php else: ?>
<span class="bashir-rased-type-effect-skills">
    <?php esc_html_e('Designer, Developer, Freelancer','bashir-rased'); ?>
</span>
<?php endif; ?>


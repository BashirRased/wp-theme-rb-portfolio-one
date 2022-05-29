<?php
/**
 * The template for displaying frontpage hire me section
 *
 * Part of hire me section buttons
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.1
 */

global $bashir_rased_data;

if($bashir_rased_data):

$bashir_rased_hire_btn_link = $bashir_rased_data['bashir-rased-hire-btn-link']['url'];

$bashir_rased_hire_btn_target = $bashir_rased_data['bashir-rased-hire-btn-link']['target'];

$bashir_rased_hire_btn_text = $bashir_rased_data['bashir-rased-hire-btn-link']['text'];
 
?>
 
<a href="<?php

if(isset($bashir_rased_hire_btn_link) && !empty($bashir_rased_hire_btn_link)){
    echo esc_url($bashir_rased_hire_btn_link);
}

else {
    echo esc_url('#');
}

?>" target="<?php

if(isset($bashir_rased_hire_btn_target) && !empty($bashir_rased_hire_btn_target)){
    echo esc_attr($bashir_rased_hire_btn_target);
}

else {
    echo esc_attr('_self');
}
?>">
    <?php
    if(isset($bashir_rased_hire_btn_text) && !empty($bashir_rased_hire_btn_text)){
        printf(
			/* translators: %s: Name of hire me button text */
			'%s',
			esc_html($bashir_rased_hire_btn_text,'bashir-rased')
		);
    }
    
    else {
        esc_html_e('Hire Me','bashir-rased');
    }
    ?>
</a>

<?php else: ?>

    <a href="<?php echo esc_url('#'); ?>" target="_self">
        <?php esc_html_e('Hire Me','bashir-rased'); ?>
    </a>

<?php endif; ?>
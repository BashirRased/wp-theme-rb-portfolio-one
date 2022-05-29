<span class="bashir-rased-type-effect-skills" data-period="2000" data-type='[<?php
$bashir_rased_data = get_option('bashir_rased_theme_option');
$bashir_rased_designations = $bashir_rased_data['bashir-rased-header-title-last'];
if (isset($bashir_rased_designations) && !empty($bashir_rased_designations)) {
    $bashir_rased_count = 0;
    foreach ($bashir_rased_designations as $bashir_rased_designation) {
        $bashir_rased_count++;
        if($bashir_rased_count == 1){
            $bashir_rased_count_value = "";
        }
        else {
            $bashir_rased_count_value = ", ";
        }
        echo wp_kses_post($bashir_rased_count_value).'"'.wp_kses_post($bashir_rased_designation['bashir-rased-header-title-last-option']).'"';
    }
}
else {
    echo '"Designer", "Developer", "Freelancer"';
}
?>]'>
</span>
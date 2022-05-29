<?php
    $bashir_rased_data = get_option('bashir_rased_theme_option');
    $bashir_rased_design_skills = $bashir_rased_data['bashir-rased-design-skill-item'];
    if (isset($bashir_rased_design_skills) && !empty($bashir_rased_design_skills)) :
    foreach ($bashir_rased_design_skills as $bashir_rased_design_skill) :
?>

<div class="bashir-rased-skills-bar-text-area">
    <div class="bashir-rased-skills-text-left float-left">
        <?php echo wp_kses_post($bashir_rased_design_skill['bashir-rased-design-skill-text']); ?>
    </div>
    <div class="bashir-rased-skills-text-right float-right">
        <?php echo wp_kses_post($bashir_rased_design_skill['bashir-rased-design-skill-value']).'%'; ?>
    </div>
</div>
<div class="bashir-rased-skills-bar" data-percent="<?php echo wp_kses_post($bashir_rased_design_skill['bashir-rased-design-skill-value']).'%'; ?>
">
    <div class="bashir-rased-skills-bar-animation"></div>
</div>

<?php 
endforeach;

else: get_template_part('homepage-sections/skill/skill-design-item','else');

endif;

?>
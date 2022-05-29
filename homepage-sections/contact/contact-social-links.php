<?php
/**
 * The template for displaying frontpage contact me section
 *
 * Part of contact me section social links
 *
 * @package WordPress
 * @subpackage bashir_rased
 * @since Bashir Rased 1.1.0
 */

if(get_option('rb_facebook_link')): ?>
<li class="bashir-rased-facebook-link">
    <a href="<?php echo esc_url(get_option('rb_facebook_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_twitter_link')): ?>
<li class="bashir-rased-twitter-link">
    <a href="<?php echo esc_url(get_option('rb_twitter_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_linkedin_link')): ?>
<li class="bashir-rased-linkedin-link">
    <a href="<?php echo esc_url(get_option('rb_linkedin_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_instagram_link')): ?>
<li class="bashir-rased-instagram-link">
    <a href="<?php echo esc_url(get_option('rb_instagram_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_pinterest_link')): ?>
<li class="bashir-rased-pinterest-link">
    <a href="<?php echo esc_url(get_option('rb_pinterest_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_behance_link')): ?>
<li class="bashir-rased-behance-link">
    <a href="<?php echo esc_url(get_option('rb_behance_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_dribbble_link')): ?>
<li class="bashir-rased-dribbble-link">
    <a href="<?php echo esc_url(get_option('rb_dribbble_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_github_link')): ?>
<li class="bashir-rased-github-link">
    <a href="<?php echo esc_url(get_option('rb_github_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_youtube_link')): ?>
<li class="bashir-rased-youtube-link">
    <a href="<?php echo esc_url(get_option('rb_youtube_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_blogger_link')): ?>
<li class="bashir-rased-blogger-link">
    <a href="<?php echo esc_url(get_option('rb_blogger_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_wordpress_link')): ?>
<li class="bashir-rased-wordpress-link">
    <a href="<?php echo esc_url(get_option('rb_wordpress_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_codepen_link')): ?>
<li class="bashir-rased-codepen-link">
    <a href="<?php echo esc_url(get_option('rb_codepen_link')); ?>" target="_blank"><span></span></a>
</li>
<?php endif; ?>

<?php if(get_option('rb_skype_text')): ?>
<li class="bashir-rased-skype-link" title="<?php echo esc_html(printf(__('%s','bashir-rased'), get_option('rb_skype_text'))); ?>">
    <span></span>
</li>
<?php endif; ?>
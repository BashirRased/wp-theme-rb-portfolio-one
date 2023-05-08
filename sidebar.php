<?php
/**
 * The template for displaying right sidebar area.
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

if (!is_active_sidebar('bashir-rased-sidebar-right')) {
	return;
}
dynamic_sidebar('bashir-rased-sidebar-right');
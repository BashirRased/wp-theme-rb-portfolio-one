<?php
/**
 * The template for displaying right sidebar area.
 *
 * @package RB Portfolio One
 * @version RB Portfolio One 1.1.4
 * @since RB Portfolio One 1.1.4
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
dynamic_sidebar('sidebar-1');
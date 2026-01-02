<?php
/**
 * The template for displaying right sidebar area.
 *
 * @package RB_Themes
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
dynamic_sidebar('sidebar-1');